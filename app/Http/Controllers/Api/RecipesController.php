<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use App\Models\RecipeIngredients;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function index() {
        $recipes = Recipe::where('category_id',3)
                                ->get();
        return $recipes;
    }

    public function show($recipe_id) {

        $ingre = RecipeIngredients::with('ingredient')
            ->where('recipe_id', $recipe_id)
            ->get();

        $recipe= Recipe::findOrFail($recipe_id);

        return [
            'recipe' => $recipe,
            'ingredients'=> $ingre->pluck('ingredient')
        ];
    }
}
