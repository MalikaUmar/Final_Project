<?php

namespace Database\Seeders;

use App\Models\RecipeIngredients;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeIngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $recipe_ingre = [

            [
                'recipe_id'=> 1 ,
                'ingredient_id'=>48,
                'measure'=>'1400ml',
                
            ],

            [
                'recipe_id'=> 1 ,
                'ingredient_id'=>5,
                'measure'=>'321gr',
                
            ],
            [
                'recipe_id'=> 1 ,
                'ingredient_id'=>6,
                'measure'=>'160ml',

            ],
            [
                'recipe_id'=> 1 ,
                'ingredient_id'=>7,
                'measure'=>'1x 187gr',

            ],
            [
                'recipe_id'=> 1 ,
                'ingredient_id'=>8,
                'measure'=>'8x 1207gr',
            ],
            [
                'recipe_id'=> 1 ,
                'ingredient_id'=>9,
                'measure'=>'68gr (optional)',

            ],
            [
                'recipe_id'=> 1 ,
                'ingredient_id'=>10,
                'measure'=>'531gr',

            ],
            [
                'recipe_id'=> 1 ,
                'ingredient_id'=>11,
                'measure'=>'8-10gr',

            ],
            [
                'recipe_id'=> 1 ,
                'ingredient_id'=>12,
                'measure'=>'3-4gr',

            ],
            [
                'recipe_id'=> 1 ,
                'ingredient_id'=>13,
                'measure'=>'7gr',

            ],
            [
                'recipe_id'=> 2 ,
                'ingredient_id'=>17,
                'measure'=>'800gr',

            ],
            [
                'recipe_id'=> 2 ,
                'ingredient_id'=>58,
                'measure'=>'2x',

            ],
            [
                'recipe_id'=> 2 ,
                'ingredient_id'=>40,
                'measure'=>'42gr',

            ],
            [
                'recipe_id'=> 2 ,
                'ingredient_id'=>34,
                'measure'=>'2 bulbs',

            ],
            [
                'recipe_id'=> 2 ,
                'ingredient_id'=>6,
                'measure'=>'275ml',

            ],
            [
                'recipe_id'=> 2 ,
                'ingredient_id'=>62,
                'measure'=>'3x',

            ],
            [
                'recipe_id'=> 2 ,
                'ingredient_id'=>64,
                'measure'=>'4gr',

            ],
            [
                'recipe_id'=> 2 ,
                'ingredient_id'=>57,
                'measure'=>'1/2 tsp',

            ],
            [
                'recipe_id'=> 2 ,
                'ingredient_id'=>26,
                'measure'=>'1x',

            ],
            [
                'recipe_id'=> 2 ,
                'ingredient_id'=>55,
                'measure'=>'2x',

            ],
            [
                'recipe_id'=> 2 ,
                'ingredient_id'=>2,
                'measure'=>'357gr',

            ],
            [
                'recipe_id'=> 2 ,
                'ingredient_id'=>63,
                'measure'=>'1.5 tsp',

            ],
            [
                'recipe_id'=> 2 ,
                'ingredient_id'=>25,
                'measure'=>'2 tsp',

            ],
            [
                'recipe_id'=> 2 ,
                'ingredient_id'=>13,
                'measure'=>'2 tsp',

            ],
            [
                'recipe_id'=> 2 ,
                'ingredient_id'=>48,
                'measure'=>'400ml',
            ],
            [
                'recipe_id'=> 3 ,
                'ingredient_id'=>15,
                'measure'=>'250gr',
            ],
            [
                'recipe_id'=> 3 ,
                'ingredient_id'=>5,
                'measure'=>'110gr',
            ],
            [
                'recipe_id'=> 3 ,
                'ingredient_id'=>58,
                'measure'=>'1x',
            ],
            [
                'recipe_id'=> 3 ,
                'ingredient_id'=>22,
                'measure'=>'3x',
            ],
            [
                'recipe_id'=> 3 ,
                'ingredient_id'=>26,
                'measure'=>'1x',
            ],
            [
                'recipe_id'=> 3 ,
                'ingredient_id'=>55,
                'measure'=>'2x',
            ],
            [
                'recipe_id'=> 3 ,
                'ingredient_id'=>54,
                'measure'=>'1x',
            ],
            [
                'recipe_id'=> 3 ,
                'ingredient_id'=>60,
                'measure'=>'1x',
            ],
            [
                'recipe_id'=> 3 ,
                'ingredient_id'=>61,
                'measure'=>'13-15',
            ],
            [
                'recipe_id'=> 3 ,
                'ingredient_id'=>34,
                'measure'=>'1x',
            ],
            [
                'recipe_id'=> 3 ,
                'ingredient_id'=>40,
                'measure'=>'15gr',
            ],
            [
                'recipe_id'=> 3 ,
                'ingredient_id'=>6,
                'measure'=>'100ml',
            ],
            [
                'recipe_id'=> 3 ,
                'ingredient_id'=>11,
                'measure'=>'7gr',
            ],
            [
                'recipe_id'=> 3 ,
                'ingredient_id'=>12,
                'measure'=>'3-4gr',
            ],
            [
                'recipe_id'=> 4 ,
                'ingredient_id'=>41,
                'measure'=>'200gr',
            ],
            [
                'recipe_id'=> 4 ,
                'ingredient_id'=>48,
                'measure'=>'80ml',
            ],
            [
                'recipe_id'=> 4 ,
                'ingredient_id'=>11,
                'measure'=>'1/2 tsp',
            ],
            [
                'recipe_id'=> 4 ,
                'ingredient_id'=>47,
                'measure'=>'1/2tsp',
            ],
            [
                'recipe_id'=> 4 ,
                'ingredient_id'=>14,
                'measure'=>'1/3tsp',
            ],
            [
                'recipe_id'=> 4 ,
                'ingredient_id'=>12,
                'measure'=>'1tsp',
            ],
            [
                'recipe_id'=> 4 ,
                'ingredient_id'=>3,
                'measure'=>'1x',
            ],
            [
                'recipe_id'=> 4 ,
                'ingredient_id'=>5,
                'measure'=>'176gr',
            ],
            [
                'recipe_id'=> 4 ,
                'ingredient_id'=>6,
                'measure'=>'2 tbsp',
            ],
            [
                'recipe_id'=> 5 ,
                'ingredient_id'=>16,
                'measure'=>'1x',
            ],
            [
                'recipe_id'=> 5 ,
                'ingredient_id'=>15,
                'measure'=>'130gr',
            ],
            [
                'recipe_id'=> 5 ,
                'ingredient_id'=>11,
                'measure'=>'1gr',
            ],
            [
                'recipe_id'=> 5 ,
                'ingredient_id'=>8,
                'measure'=>'2x',
            ],
            [
                'recipe_id'=> 5 ,
                'ingredient_id'=>3,
                'measure'=>'1x',
            ],
            [
                'recipe_id'=> 5 ,
                'ingredient_id'=>14,
                'measure'=>'1/2tsp',
            ],
            [
                'recipe_id'=> 5 ,
                'ingredient_id'=>48,
                'measure'=>'2L',
            ],
            [
                'recipe_id'=> 5 ,
                'ingredient_id'=>5,
                'measure'=>'200gr',
            ],
            [
                'recipe_id'=> 5 ,
                'ingredient_id'=>40,
                'measure'=>'25gr',
            ],
            [
                'recipe_id'=> 5 ,
                'ingredient_id'=>12,
                'measure'=>'1/2 tsp',
            ],
            [
                'recipe_id'=> 6 ,
                'ingredient_id'=>70,
                'measure'=>'5 pieces',
            ],
            [
                'recipe_id'=> 6 ,
                'ingredient_id'=>26,
                'measure'=>'1tsp',
            ],
            [
                'recipe_id'=> 6 ,
                'ingredient_id'=>55,
                'measure'=>'1x',
            ],
            [
                'recipe_id'=> 6 ,
                'ingredient_id'=>57,
                'measure'=>'1tsp',
            ],
            [
                'recipe_id'=> 6 ,
                'ingredient_id'=>3,
                'measure'=>'1x',
            ],
            [
                'recipe_id'=> 6 ,
                'ingredient_id'=>12,
                'measure'=>'2 tsp',
            ],
            [
                'recipe_id'=> 6 ,
                'ingredient_id'=>47,
                'measure'=>'1tsp',
            ],
            [
                'recipe_id'=> 6 ,
                'ingredient_id'=>25,
                'measure'=>'2gr',
            ],
            [
                'recipe_id'=> 6 ,
                'ingredient_id'=>48,
                'measure'=>'200ml',
            ],
            [
                'recipe_id'=> 6 ,
                'ingredient_id'=>6,
                'measure'=>'100ml',
            ],
            [
                'recipe_id'=> 7 ,
                'ingredient_id'=>15,
                'measure'=>'200gr',
            ],
            [
                'recipe_id'=> 7 ,
                'ingredient_id'=>65,
                'measure'=>'2gr',
            ],
            [
                'recipe_id'=> 7 ,
                'ingredient_id'=>66,
                'measure'=>'2gr',
            ],
            [
                'recipe_id'=> 7 ,
                'ingredient_id'=>71,
                'measure'=>'1tsp',
            ],
            [
                'recipe_id'=> 7 ,
                'ingredient_id'=>48,
                'measure'=>'95 ml',
            ],
            [
                'recipe_id'=> 7 ,
                'ingredient_id'=>52,
                'measure'=>'1tbsp',
            ],
            [
                'recipe_id'=> 7 ,
                'ingredient_id'=>53,
                'measure'=>'75gr',
            ],
            [
                'recipe_id'=> 7 ,
                'ingredient_id'=>1,
                'measure'=>'150gr',
            ],
            [
                'recipe_id'=> 7 ,
                'ingredient_id'=>8,
                'measure'=>'2x',
            ],
            [
                'recipe_id'=> 7 ,
                'ingredient_id'=>3,
                'measure'=>'1x',
            ],
            [
                'recipe_id'=> 7 ,
                'ingredient_id'=>11,
                'measure'=>'1tsp',
            ],
            [
                'recipe_id'=> 7 ,
                'ingredient_id'=>12,
                'measure'=>'2tsp',
            ],
            [
                'recipe_id'=> 7 ,
                'ingredient_id'=>4,
                'measure'=>'1x',
            ],
            [
                'recipe_id'=> 8 ,
                'ingredient_id'=>1,
                'measure'=>'522g',
            ],
            [
                'recipe_id'=> 8 ,
                'ingredient_id'=>11,
                'measure'=>'1 ½ tsp',
            ],
            [
                'recipe_id'=> 8 ,
                'ingredient_id'=>4,
                'measure'=>'1x',
            ],
            [
                'recipe_id'=> 8 ,
                'ingredient_id'=>40,
                'measure'=>'15gr',
            ],
            [
                'recipe_id'=> 8 ,
                'ingredient_id'=>16,
                'measure'=>'1x',
            ],
            [
                'recipe_id'=> 8 ,
                'ingredient_id'=>3,
                'measure'=>'2x',
            ],
            [
                'recipe_id'=> 8 ,
                'ingredient_id'=>42,
                'measure'=>'5g',
            ],
            [
                'recipe_id'=> 8 ,
                'ingredient_id'=>22,
                'measure'=>'2x',
            ],
            [
                'recipe_id'=> 8 ,
                'ingredient_id'=>48,
                'measure'=>'1 L',
            ],
            [
                'recipe_id'=> 8 ,
                'ingredient_id'=>26,
                'measure'=>'1tsp',
            ],
            [
                'recipe_id'=> 8 ,
                'ingredient_id'=>2,
                'measure'=>'63g',
            ],
            [
                'recipe_id'=> 8 ,
                'ingredient_id'=>34,
                'measure'=>'1x',
            ],
            [
                'recipe_id'=> 9 ,
                'ingredient_id'=>15,
                'measure'=>'160gr',
            ],
            [
                'recipe_id'=> 9 ,
                'ingredient_id'=>48,
                'measure'=>'800ml',
            ],
            [
                'recipe_id'=> 9 ,
                'ingredient_id'=>5,
                'measure'=>'170gr',
            ],
            [
                'recipe_id'=> 9 ,
                'ingredient_id'=>3,
                'measure'=>'2x',
            ],
            [
                'recipe_id'=> 9 ,
                'ingredient_id'=>14,
                'measure'=>'6gr',
            ],
            [
                'recipe_id'=> 9 ,
                'ingredient_id'=>11,
                'measure'=>'4gr',
            ],
            [
                'recipe_id'=> 10 ,
                'ingredient_id'=>15,
                'measure'=>'150gr',
            ],
            [
                'recipe_id'=> 10 ,
                'ingredient_id'=>48,
                'measure'=>'70ml',
            ],
            [
                'recipe_id'=> 10 ,
                'ingredient_id'=>25,
                'measure'=>'2tsp ',
            ],
            [
                'recipe_id'=> 10 ,
                'ingredient_id'=>5,
                'measure'=>'210gr',
            ],
            [
                'recipe_id'=> 10 ,
                'ingredient_id'=>3,
                'measure'=>'1x',
            ],
            [
                'recipe_id'=> 10 ,
                'ingredient_id'=>12,
                'measure'=>'1tsp',
            ],
            [
                'recipe_id'=> 10 ,
                'ingredient_id'=>14,
                'measure'=>'1tsp',
            ],
            [
                'recipe_id'=> 10 ,
                'ingredient_id'=>6,
                'measure'=>'4tsp',
            ],
            [
                'recipe_id'=> 11 ,
                'ingredient_id'=>15,
                'measure'=>'400gr',
            ],
            [
                'recipe_id'=> 11 ,
                'ingredient_id'=>28,
                'measure'=>'280gr',
            ],
            [
                'recipe_id'=> 11 ,
                'ingredient_id'=>65,
                'measure'=>'4gr',
            ],
            [
                'recipe_id'=> 11 ,
                'ingredient_id'=>66,
                'measure'=>'3gr',
            ],
            [
                'recipe_id'=> 11 ,
                'ingredient_id'=>25,
                'measure'=>'1tsp',
            ],
            [
                'recipe_id'=> 11 ,
                'ingredient_id'=>69,
                'measure'=>'3 tsp',
            ],
            [
                'recipe_id'=> 11 ,
                'ingredient_id'=>3,
                'measure'=>'1x',
            ],
        ];

        foreach($recipe_ingre as $ingre) {
            RecipeIngredients::create([
                'recipe_id'=>$ingre['recipe_id'],
                'ingredient_id'=>$ingre['ingredient_id'],
                'measure'=>$ingre['measure'],
            ]);
        }
    }
}
