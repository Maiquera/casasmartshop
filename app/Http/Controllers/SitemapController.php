<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response{
        $posts = Post::latest()->get();
        $categories = Category::all();

        return response()
            ->view('sitemap', compact('posts', 'categories'))
            ->header('Content-Type', 'text/xml');
    }
}
