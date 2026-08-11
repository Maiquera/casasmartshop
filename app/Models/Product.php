<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_id',
        'name',
        'brand',
        'price',
        'image_url',
        'affiliate_link',
        'is_featured',
    ];

    public function post(): BelongsTo {
        return $this->belongsTo(Post::class);
    }
}
