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

    public function search(Request $request)
    {
        $search = $request->query('search');

        $recipes = Recipe::where('instruction', 'like', "%{$search}%")
            ->with('ingredients')
            ->get();

        return $recipes;
    }

    public function store(Request $request)
    {
        $recipe = new Recipe();
        //I have an ingridient. I need to assign it to recipe
        $recipe->title = $request->input('title');
        $recipe->description = $request->input('description');
        $recipe->instruction = $request->input('instruction');
        $recipe->category_id = $request->input('category_id');
        $recipe->cooking_time = $request->input('cooking time');
        $recipe->preparation_time= $request->input('preparation time');
        // $recipe->ingredients = $request->input('ingridients');
        $recipe->difficulty_level = $request->input('difficulty level');
        $recipe->image = $request->input('image');
        $recipe->save();

        return [
            'status' => 'success',
            'recipe' => $recipe
        ];
    }
}