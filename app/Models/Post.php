<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'image',
        'excerpt',
        'meta_description',
        'content',
        'status',
        'published_at',
    ];

    protected $casts = [
        'content' => 'array',
        'published_at' => 'datetime',
    ];

    public function getCleanContentAttribute(): string
    {
        if (is_string($this->content)) {
            return $this->content;
        }

        if (!is_array($this->content)) {
            return '';
        }

        $htmlSegments = [];

        foreach ($this->content as $block) {
            if (($block['type'] ?? '') === 'text' && !empty($block['data']['content'])) {
                $htmlSegments[] = $block['data']['content'];
            }
        }

        return implode(' ', $htmlSegments);
    }

    public function getFirstProductImageAttribute(): ?string
    {
        if (!is_array($this->content)) {
            return null;
        }

        foreach ($this->content as $block) {
            if (($block['type'] ?? '') === 'affiliate_product' && !empty($block['data']['image'])) {
                return $block['data']['image'];
            }
        }

        return null;
    }

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function products(): HasMany {
        return $this->hasMany(Product::class);
    }

    public function tags(): BelongsToMany {
        return $this->belongsToMany(Tag::class);
    }
}
