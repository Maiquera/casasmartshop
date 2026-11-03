<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $sitemap = Cache::remember('sitemap_xml', now()->addHours(12), function () {
            $posts = Post::where('status', 'published')
                ->where('published_at', '<=', now())
                ->latest('published_at')
                ->get();

            $categories = Category::all();


            return view('sitemap', compact('posts', 'categories'))->render();
        });

        return response($sitemap)->header('Content-Type', 'text/xml');
    }
}
