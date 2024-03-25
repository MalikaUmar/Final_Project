<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Recipe;
use App\Models\Ingredient;

class IndianRecipeIngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $recipesWithIngredients = [
            [
                'title' => 'Tandoori Chicken',
                'ingredients' => [
                    'chicken' => '500 g',
                    'onion' => '1-2',
                    'black pepper' => '2 tablespoon',
                    'tomato' => '2',
                    'garlic' => '20 g',
                    'oil' => '3-4 tablespoons',
                    'ginger' => '20 g',
                    'garam masala' => '1 spoon',
                    'chilly powder' => '1 spoon',
                    'coriander powder' => '2 spoon',
                    'turmeric' => '1 half spoon',
                    'Salt' => '1 tablespoon ',
                ],
            ],
            
            [
                'title' => 'Indian Chicken Curry',
                'ingredients' => [
                    'chicken' => '500 g',
                    'onion' => '3-4',
                    'black pepper' => '2 tablespoon',
                    'tomato' => '3',
                    'garlic' => '20 g',
                    'oil' => '3-4 tablespoons',
                    'ginger' => '20 g',
                    'garam masala' => '1 spoon',
                    'chilly powder' => '1 spoon',
                    'coriander powder' => '2 spoon',
                    'turmeric' => '1 half spoon',
                    'Salt' => '1 tablespoon ',
                    
                ],
            ],
            [
                'title' => 'Indian Shrimp Curry',
                'ingredients' => [
                    'shrimp' => '400 g',
                    'onion' => '1 pcs',
                    'tomatoes' => '300 g',
                    'ginger' => '20 g',
                    'garlic' => '20 g',
                    'chilly powder' => '2 spoon',
                    'coriander powder' => '1 spoon',
                    'turmeric' => '1 half spoon',
                    'Salt' => '2 tablespoon ',
                    'fish masala' => '1 tablespoon',
                    'water' => '2 cup',   
                ],
            ],
            [
                'title' => 'Spicy Vegan Potato ',
                'ingredients' => [
                    'potato' => '800 g',
                    'onion' => '1-2 pcs',
                    'garlic' => '2 cloves',
                    'Salt' => '1 tablesppon ',
                    'black pepper' => 'a pinch',
                    'chilly powder' => '2 spoon',
                    'turmeric' => '1 half spoon',
                    
                ],
            ],
            [
                'title' => 'Chicken Vindaloo',
                'ingredients' => [
                    'chicken' => '500 g',
                    'onion' => '3-4',
                    'black pepper' => '2 tablespoon',
                    'tomato' => '3',
                    'garlic' => '20 g',
                    'oil' => '3-4 tablespoons',
                    'ginger' => '20 g',
                    'garam masala' => '1 spoon',
                    'chilly powder' => '1 spoon',
                    'coriander powder' => '2 spoon',
                    'turmeric' => '1 half spoon',
                    'Salt' => '1 tablespoon ',
                    'water' => '1 cup',
                ],
            ],
            [
                'title' => 'Indian Fish Curry',
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
                'title' => 'Chicken Biryani',
                'ingredients' => [
                    'chicken' => '500 g',
                    'rice' => '1 kg',
                    'water' => '2 cups',
                    'yoghurt' => '1 spoon',
                    'onion' => '3-4',
                    'black pepper' => '2 tablespoon',
                    'tomato' => '3',
                    'garlic' => '20 g',
                    'oil' => '3-4 tablespoons',
                    'ginger' => '20 g',
                    'garam masala' => '1 spoon',
                    'chilly powder' => '1 spoon',
                    'coriander powder' => '2 spoon',
                    'turmeric' => '1 half spoon',
                    'Salt' => '1 tablespoon ',
                ],
            ],
            [
                'title' => 'Pork Vindaloo',
                'ingredients' => [
                    'pork' => '500 g',
                    'onion' => '3-4',
                    'black pepper' => '2 tablespoon',
                    'tomato' => '2',
                    'garlic' => '20 g',
                    'oil' => '3-4 tablespoons',
                    'ginger' => '20 g',
                    'garam masala' => '1 spoon',
                    'meat masala' => '1 spoon',
                    'chilly powder' => '2 spoon',
                    'coriander powder' => '2 spoon',
                    'turmeric' => '1 half spoon',
                    'Salt' => '1 tablespoon ',
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
