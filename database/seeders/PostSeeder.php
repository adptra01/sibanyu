<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     */
    public function run(): void
    {
        $randomCategories = ['politik', 'hukum', 'ekonomi', 'bola', 'olahraga', 'humaniora', 'lifestyle', 'hiburan', 'dunia', 'tekno', 'otomotif'];

        // Pilih kategori acak dari array
        $category = Arr::random($randomCategories);

        // Fetch data from the API
        $response = Http::get('https://api-berita-indonesia.vercel.app/antara/' . $category);

        // $response = Http::get('https://api-berita-indonesia.vercel.app/kumparan/terbaru');


        // Check if the request was successful
        if ($response->successful()) {
            $data = $response->json();

            // Extract posts data
            $posts = $data['data']['posts'];

            // Insert posts into the database
            foreach ($posts as $postData) {
                // Create a new Post record
                $imageName = basename($postData['thumbnail']);

                $createPost = [
                    'title' => $postData['title'],
                    'thumbnail' => 'thumbnail/' . $imageName,
                    'slug' => Str::slug($postData['title']) . '-' . Str::random(2),
                    'content' => '<p>' . $postData['description'] . Str::wordWrap(fake()->unique()->paragraph(100), characters: rand(300, 1000), break: "<br />\n") . '</p>',
                    'category_id' => Category::all()->random()->id,
                    'user_id' => User::where('role', 'Penulis')->inRandomOrder()->first()->id,
                    'viewer' => fake()->numerify(),
                    'status' => 1,
                ];
                $postPublish = Post::create($createPost);


                $imageUrl = $postData['thumbnail'];
                $imageData = file_get_contents($imageUrl);
                Storage::put('public/thumbnail/' . $imageName, $imageData);

                $this->command->info('Tambah Contoh Berita: ' . $postPublish->title);
            }

            $this->command->info('Posts seeded successfully!');
        } else {
            $this->command->error('Failed to fetch data from the API.');
        } //
    }
}
