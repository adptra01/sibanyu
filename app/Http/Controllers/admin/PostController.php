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

        $validatedData = $request->validated();

        $thumbnailPath = $request->file('thumbnail')->store('public/thumbnail');

        $validatedData['thumbnail'] = $thumbnailPath;

        $validatedData['slug'] = Str::slug($request->title);

        $validatedData['user_id'] = auth()->id();

        if (is_array($request->keyword) && count($request->keyword) > 0) {
            $validatedData['keyword'] = implode(', ', $request->keyword);
        } else {
            $validatedData['keyword'] = '';
        }


        $post = Post::create($validatedData);


        $redirectRoute = auth()->user()->role == 'Admin' ? '/admin/posts/' : '/writer/posts/';

        return redirect($redirectRoute . $post->id)->with('success', 'Proses Berhasil Dilakukan 😁!');
    }


    public function update($id, PostRequest $request)
    {

        $validatedData = $request->validated();

        $post = Post::findOrFail($id);

        if ($request->hasFile('thumbnail')) {
            Storage::delete($post->thumbnail);

            $request->file('thumbnail')->getClientOriginalName();

            $validatedData['thumbnail'] = $request->file('thumbnail')->store('public/thumbnail');
        }

        $validatedData['slug'] = Str::slug($request->title);

        $validatedData['user_id'] = auth()->user()->id;

        if (is_array($request->keyword) && count($request->keyword) > 0) {
            $validatedData['keyword'] = implode(',' . '&nbsp', $request->keyword);
        } else {
            $validatedData['keyword'] = '';
        }

        $post->update($validatedData);

        $redirectRoute = auth()->user()->role == 'Admin' ? '/admin/posts/' : '/writer/posts/';

        return redirect($redirectRoute . $post->id)->with('success', 'Proses Berhasil Dilakukan 😁!');
    }
}
