<?php

namespace App\View\Composers;

use App\Models\Post;
use Illuminate\View\View;

class SidebarComposer
{
    public function compose(View $view): void
    {
        $mostReadPosts = Post::orderBy('views_count','desc')
            ->take(5)
            ->get();

        $view->with('mostReadPosts', $mostReadPosts);
    }
}