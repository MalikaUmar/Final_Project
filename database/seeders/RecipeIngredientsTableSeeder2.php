<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Recipe;
use App\Models\Ingredient;

class RecipeIngredientsTableSeeder2 extends Seeder
{
    public function run()
    {
        $recipesWithIngredients = [
            [
                'title' => 'Slatki kupus',
                'ingredients' => [
                    'cabbage' => '1 medium head',
                    'carrots' => '2 medium',
                    'fresh tomatoes' => '2-3 small',
                    'tomato paste' => '1 tablespoon',
                    'Vegeta' => '3 tablespoons',
                    'oil' => '3 tablespoons',
                    'flour' => '1 tablespoon',
                    'tomato paste' => '2',
                    'salt' => 'some',
                    'black pepper'=> 'some',
                ],
            ],
            
            [
                'title' => 'Djuvec',
                'ingredients' => [
                    'meat' => '600 g',
                    'dried bacon' => '100 g',
                    'onions' => '2',
                    'rice' => 'a handful',
                    'potatoes' => '4 medium sized',
                    'parsley' => 'a bunch of',
                    'vegeta' => '1 tbsp',
                    'oil' => '3 tablespoons',
                    'flour' => '2 tablespoons',
                    'salt' => 'some',
                    'black pepper'=> 'some',
                    
                ],
            ],
            
        ];

        foreach ($recipesWithIngredients as $recipeData) {
            $recipe = Recipe::where('title', $recipeData['title'])->first();

            if ($recipe) {
                foreach ($recipeData['ingredients'] as $ingredientName => $measure) {
                    $ingredient = Ingredient::where('name', $ingredientName)->first();
                    if ($ingredient) {
                        $recipe->ingredients()->attach($ingredient->id, ['measure' => $measure]);
                    }
                }
            }
        }
    }
}
