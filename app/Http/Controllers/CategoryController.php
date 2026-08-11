<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function show(string $slug): View
    {
        $category = Category::where('slug', $slug,'','')->firstOrFail();

        $posts = $category->posts()
            ->where('status', 'published')
            ->latest('published_at')
            ->paginate(6);

        return view('categories.show', compact('category', 'posts'));
    }
}
