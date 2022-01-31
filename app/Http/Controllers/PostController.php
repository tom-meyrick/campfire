<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function index() {

    return view('posts.index', [
        'posts' => Post::latest()->filter(
            request(['search', 'category', 'author'])
            )->paginate(6)
            ->withQueryString(),
    ]);
    }

    public function show(Post $post) {
        return view('posts.show', 
        ['post' => $post]);
    }

    public function create() {
        return view('posts.create');
    }

    public function store() {
        $attributes = request()->validate([
            'title' => ['required','max:255', 'min:3'],
            'slug' => ['required', Rule::unique('posts', 'slug'),'max:255', 'min:3'],
            'excerpt' => ['required','max:255','min:3'],
            'body' => ['required','email','max:255'],
            'category' => ['required', Rule::exists('categories', 'id')]
         ]);

        $attributes['user_id'] = auth()->id();

        Post::create($attributes); 

        return redirect('/');
    }
 }
