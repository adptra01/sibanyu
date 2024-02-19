<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class PostController extends Controller
{
    public function store(PostRequest $request)
    {

        $validate_data = $request->validated();

        // thumbnail  image
        $request->file('thumbnail')->getClientOriginalName();
        $validate_data['thumbnail'] = $request->file('thumbnail')->store('public/thumbnail');

        //slug and author
        $validate_data['slug'] = Str::slug($request->title) . '-' . Str::random(2);
        $validate_data['user_id'] = auth()->user()->id;

        // save the validation data
        Post::create($validate_data);

        return redirect()->route('posts.index')->with('success', 'Proses Berhasil Dilakukan 😁!');
    }


    public function update($id, PostRequest $request)
    {
        $validate_data = $request->validated();
        $post = Post::findOrFail($id);

        if ($request->hasFile('thumbnail')) {
            // thumbnail  image
            Storage::delete($post->thumbnail);
            $request->file('thumbnail')->getClientOriginalName();
            $validate_data['thumbnail'] = $request->file('thumbnail')->store('public/thumbnail');
        }

        //slug and author
        $validate_data['slug'] = Str::slug($request->title) . '-' . Str::random(2);
        $validate_data['user_id'] = auth()->user()->id;

        $post->update($validate_data);

        return redirect('/admin/posts/' . $id)->with('success', 'Proses Berhasil Dilakukan 😁!');
    }
}
