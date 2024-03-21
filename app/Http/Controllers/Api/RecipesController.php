<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function findByIngredients(Request $request) {
        try {
            $ingredientIdsString = $request->query('ingredients');
    
            if ($ingredientIdsString) {
                $ingredientIds = explode(',', $ingredientIdsString);
    
                $recipes = \DB::table('recipes')
                    ->select('recipes.id', 'recipes.title', \DB::raw("GROUP_CONCAT(ingredients.name SEPARATOR ', ') AS ingredients_list"))
                    ->join('recipe_ingredients', 'recipes.id', '=', 'recipe_ingredients.recipe_id')
                    ->join('ingredients', 'recipe_ingredients.ingredient_id', '=', 'ingredients.id')
                    ->whereIn('recipe_ingredients.ingredient_id', $ingredientIds)
                    ->groupBy('recipes.id', 'recipes.title')
                    ->get();
    
                $maxIngredientsCount = 0;
                $recipesWithMostIngredients = [];
    
                foreach ($recipes as $recipe) {
                    $ingredientsArray = explode(', ', $recipe->ingredients_list);
                    $numberOfIngredients = count($ingredientsArray);
    
                    if ($numberOfIngredients > $maxIngredientsCount) {
                        $maxIngredientsCount = $numberOfIngredients;
                        $recipesWithMostIngredients = [$recipe]; // Start a new array with this recipe as the only element
                    } elseif ($numberOfIngredients === $maxIngredientsCount) {
                        $recipesWithMostIngredients[] = $recipe; // Add this recipe to the array
                    }
                }
    
                // Convert ingredients_list for all recipes in the result to arrays
                foreach ($recipesWithMostIngredients as &$recipe) {
                    $recipe->ingredients_list = explode(', ', $recipe->ingredients_list);
                }
                unset($recipe); // Break the reference with the last element
    
                // Return the recipes with the most ingredients
                if (!empty($recipesWithMostIngredients)) {
                    return response()->json($recipesWithMostIngredients);
                } else {
                    return response()->json(['message' => 'No recipes found with the given ingredients'], 404);
                }
    
            } else {
                return response()->json(['message' => 'No ingredient IDs provided'], 400);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}