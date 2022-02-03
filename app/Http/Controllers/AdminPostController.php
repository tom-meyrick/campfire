<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
{
    public function index() 
    {
        return view('admin.posts.index', [
            'posts' => Post::paginate(50)
        ]); 
    }

    public function create() {
        return view('admin.posts.create');
    }

    public function store() {
        $attributes = request()->validate([
            'title' => ['required','max:255', 'min:3'],
            'thumbnail' => ['required', 'image', 'max:255', 'min:3'],
            'slug' => ['required', Rule::unique('posts', 'slug'),'max:255', 'min:3'],
            'excerpt' => ['required','max:255','min:3'],
            'body' => ['required','min:3','max:255'],
            'category_id' => ['required', Rule::exists('categories', 'id')]
         ]);

        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        Post::create($attributes); 

        return redirect('/');
    }

    public function edit(Post $post) 
    {
        return view('admin.posts.edit', [
            'post' => $post
        ]);
    }

    public function update(Post $post)
    {  
        $attributes = request()->validate([
            'title' => ['required','max:255', 'min:3'],
            'thumbnail' => ['image'],
            'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post->id),'max:255', 'min:3'],
            'excerpt' => ['required','max:255','min:3'],
            'body' => ['required','min:3','max:255'],
            'category_id' => ['required', Rule::exists('categories', 'id')]
            ]);
        
        if(isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        $post->update($attributes);

        return back()->with('success', 'Post Updated');
    }

    public function destroy(Post $post) 
    {
        $post->delete();

        return back()->with('success', 'Post Deleted');
    }
}
