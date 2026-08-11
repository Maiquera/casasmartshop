<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(): View {
        
        $posts = Post::with('category')
        ->where('status', 'published')
        ->latest('published_at')
        ->paginate(6);

        return view('posts.index', compact('posts'));
    }

    public function show(string $slug): View
    {
        
        $post = Post::with(['category', 'products', 'tags'])
            ->where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        return view('posts.show', compact('post'));
    }
}
