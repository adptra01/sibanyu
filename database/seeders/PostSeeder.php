<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\Factory;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     */
    public function run(): void
    {
        // Fetch data from the API
        $response = Http::get('https://api-berita-indonesia.vercel.app/antara/dunia/'); // category : politik, hukum, ekonomi, bola, olahraga, humaniora, lifestyle, hiburan, dunia, tekno, otomotif
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
                    'slug' => Str::slug($postData['title']) . Str::random(2),
                    'content' => '<p>' . $postData['description'] . Str::wordWrap(fake()->unique()->paragraph(100), characters: rand(300, 1000), break: "<br />\n") . '</p>',
                    'category_id' => Category::all()->random()->id,
                    'user_id' => User::all()->random()->id,
                    'viewer' => fake()->numerify(),
                    'status' => 1,
                ];
                $postPublish = Post::create($createPost);


                $imageUrl = $postData['thumbnail'];
                $imageData = file_get_contents($imageUrl);
                Storage::put('public/thumbnail/' . $imageName, $imageData);

                $seoData = [
                    'model_type' => Post::class,
                    'model_id' => $postPublish->id,
                    'title' => $postData['title'],
                    'description' => $postData['description'],
                    'author' => User::all()->random()->name,
                    'robots' => 'index, follow',
                    'canonical_url' => Str::slug($postData['title']) . Str::random(2),
                ];

                $postPublish->seo()->create($seoData);
                $this->command->info('Tambah Berita: ' . $postPublish->title);
            }

            $this->command->info('Posts seeded successfully!');
        } else {
            $this->command->error('Failed to fetch data from the API.');
        } //
    }
}
