<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Post;
use App\Models\Category;

class SidebarPosts extends Component
{

    public $sidebarPosts;
    public $title;

    public function __construct(
        public ?Category $category = null,
        public ?int $exceptPostId = null,
        public int $limit = 5
    ) {
        $query = Post::with('category')
            ->where('status', 'published')
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now());

        if ($this->category) {
            $query->where('category_id', $this->category->id);
            $this->title = '🔥 Mais lidos em ' . $this->category->name;
        } else {
            $this->title = '🔥 Artigos mais lidos';
        }

        if ($this->exceptPostId) {
            $query->where('id', '!=', $this->exceptPostId);
        }

        $this->sidebarPosts = $query->latest('published_at')
            ->take($this->limit)
            ->get();
    }

    public function render(): View|Closure|string
    {
        return view('components.sidebar-posts');
    }
}
