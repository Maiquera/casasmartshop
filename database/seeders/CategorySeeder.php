<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Iluminação Inteligente',
            'Segurança Inteligente',
            'Assistentes Virtuais',
            'Casa Inteligente',
            'Robôs Limpadores',
            'Tutoriais e Dicas',
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
                'slug' => Str::slug($category),
                'description' => "Dispositivos e reviews sobre {$category} para sua Smart Home.",
            ]);
        }
    }
}
