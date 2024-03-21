<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Recipe;
use App\Models\Ingredient;

class RecipeIngredientsTableSeeder extends Seeder
{
    public function run()
    {
        $recipesWithIngredients = [
            [
                'title' => 'Prebranac',
                'ingredients' => [
                    'white beans' => '500 g',
                    'onion' => '2-3',
                    'cayenne pepper' => '1 tablespoon',
                    'bay leaves' => '3-5',
                ],
            ],
            
            [
                'title' => 'Balkan-Style Stuffed Peppers',
                'ingredients' => [
                    'onion' => '1 large, diced',
                    'celery' => '1 stalk, diced',
                    'oil' => 'tablespoons',
                    'carrot' => '1 medium, grated',
                    'water' => '1/2 cup (120 ml)',
                    'ground meat' => '1/2 lb (250 g)',
                    'paprika' => '2-3 tablespoons (14-21 g)',
                    'vegeta' => '1-2 tablespoons (17-34 g)',
                    
                ],
            ],
            [
                'title' => 'Muckalica',
                'ingredients' => [
                    'pork' => '800 g',
                    'smoked bacon' => '200g',
                    'onion' => '4-5 pcs',
                    'tomatoes' => '300 g',
                    'red peppers' => '5-6 pcs',
                    'garlic' => '3-4 pcs',
                    'chilly powder' => '1-2 teaspoons',
                    'olive oil' => '4-5 tablespoons',
                    'parsley' => 'few stems',
                    'Salt' => '1 tablesppon ',
                    'black pepper' => 'a pinch',
                ],
            ],
            [
                'title' => 'Gulash',
                'ingredients' => [
                    'pork' => '800 g',
                    
                    'onion' => '4-5 pcs',
                    'tomatoes' => '300 g',
                    'red peppers' => '2 pcs',
                    'garlic' => '2 cloves',
                    'all spices' => '1 teaspoon ',
                    'flour' => '1-2 tablespoons',
                    'tomato' => '4 dl',
                    'Salt' => '1 tablesppon ',
                    'black pepper' => 'a pinch',
                    'bay leaf' => 'as desired',
                    'cayenne pepper'=>'as desired',
                ],
            ],
            [
                'title' => 'Musaka',
                'ingredients' => [
                    'ground meat' => '800 g',
                    
                    'onion' => '1 pcs',
                    'potato' => '5-8 pcs',
                    'vegeta' => '3 tbsp (30 g)',
                    'garlic' => '2 cloves',
                    'paprika' => '1 tbsp (10 g)',
                    'Oil ' => '100 ml ',
                    'egg' => '4 ',
                    'Salt' => '1 tablesppon ',
                    'black pepper' => '1/2 tsp (5 g)',
                    'sour cream' => '1/2 cup (120 g)',
                    'milk'=>'1 cup ',
                ],
            ],
            [
                'title' => 'Musaka',
                'ingredients' => [
                    'veal' => '400-500g',
                    
                    'paprika' => '1 teaspoon',
                    'flour' => '4 teaspoons',
                    'water' => '600 ml',
                    'garlic' => '3 cloves',
                    'paprika' => '1 tbsp (10 g)',
                    'Oil ' => '100 ml ',
                    'mustard' => '5 level teaspoon',
                    'Salt' => '1 tablesppon ',
                    'black pepper' => '1/2 tsp (5 g)',
                    'wine' => '100 ml',
                    'parsley'=>'1 tablespoon',
                ],
            ],
            [
                'title' => 'Lovacke snicle',
                'ingredients' => [
                    'veal' => '400-500g',
                    
                    'paprika' => '1 teaspoon',
                    'flour' => '4 teaspoons',
                    'water' => '600 ml',
                    'garlic' => '3 cloves',
                    'paprika' => '1 tbsp (10 g)',
                    'Oil ' => '100 ml ',
                    'mustard' => '5 level teaspoon',
                    'Salt' => '1 tablesppon ',
                    'black pepper' => '1/2 tsp (5 g)',
                    'wine' => '100 ml',
                    'parsley'=>'1 tablespoon',
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
