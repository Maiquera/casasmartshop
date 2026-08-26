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
        ->paginate(8);

        return view('home', compact('posts'));
    }

    public function show(string $slug): View
    {
        
        $post = Post::with(['category', 'products', 'tags'])
            ->where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        $post->incrementQuietly('views_count');

        return view('posts.show', compact('post'));
    }

    public function search(Request $request): View {
        $term = trim($request->input('q'));

        $posts = Post::query()->where('status', 'published')->when($term, function($query, $term){
            $query->where(function ($q) use ($term) {
                $q->where('title', 'LIKE')
                ->orWhere('excerpt', 'LIKE', "%{$term}%")
                ->orWhere('content', 'LIKE', "%{$term}%");
            });
        })
        ->select(['id', 'category_id', 'title', 'slug', 'image', 'excerpt', 'content', 'published_at'])
        ->latest('published_at')
        ->paginate(9)
        ->withQueryString();

        return view('posts.search', compact('posts', 'term'));
    }
}
