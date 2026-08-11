<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CategorySeeder::class);

        $iluminacao = Category::where('slug', 'iluminacao-inteligente','','')->first();

        $post = Post::create([
            'category_id' => $iluminacao->id,
            'title' => 'As 5 Melhores Lâmpadas Inteligentes para Automatizar sua Casa em 2026',
            'slug' => 'melhores-lampadas-inteligentes-2026',
            'excerpt' => 'Guia completo comparando iluminação inteligente, facilidade de instalação e integração com Alexa e Google Home.',
            'content' => 'A iluminação inteligente é a porta de entrada para qualquer projeto de automação residencial. Neste artigo, testamos e analisamos as lâmpadas Wi-Fi com melhor custo-benefício...',
            'status' => 'published',
            'published_at' => now(),
        ]);

       
        Product::create([
            'post_id' => $post->id,
            'name' => 'Lâmpada Inteligente Wi-Fi Smart Color 10W',
            'brand' => 'Positivo Casa Inteligente',
            'price' => 59.90,
            'affiliate_link' => 'https://www.amazon.com.br/dp/B088K42M3P?tag=casasmartshop-20',
            'is_featured' => true,
        ]);
    }
}
