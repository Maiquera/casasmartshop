<?php

namespace App\View\Composers;

use App\Models\Post;
use Illuminate\View\View;

class SidebarComposer
{
    public function compose(View $view): void
    {
        $data = $view->getData();
        
        $categoryId = null;
        $currentPostId = null;

        if (isset($data['category'])) {
            $categoryId = $data['category']->id;
        } 
      
        elseif (isset($data['post'])) {
            $categoryId = $data['post']->category_id;
            $currentPostId = $data['post']->id; 
        }

        $query = Post::where('status', 'published');

        if ($categoryId) {
            $query->where('category_id', $categoryId);
        }

        if ($currentPostId) {
            $query->where('id', '!=', $currentPostId);
        }

        $mostReadPosts = $query->orderBy('views_count', 'desc')
            ->take(5)
            ->get();

        $view->with('mostReadPosts', $mostReadPosts);
    }
}