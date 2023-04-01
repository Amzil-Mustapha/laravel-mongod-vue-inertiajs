<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Article_categorie;
use App\Models\Categorie;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends Factory<Article_categorie>
 */
class Article_categorieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
  
    public function definition()
    {
        return [
            
            'article_id' => Article::raw(function ($collection) {
                return $collection->aggregate([
                    ['$sample' => ['size' => 1]]
                ]);
            })->first()->_id,
            'categorie_id' => Categorie::raw(function ($collection) {
                return $collection->aggregate([
                    ['$sample' => ['size' => 1]]
                ]);
            })->first()->_id,
        ];
    }
}