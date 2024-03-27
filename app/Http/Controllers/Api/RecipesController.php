<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use App\Models\RecipeIngredients;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class RecipesController extends Controller
{
    public function index() {
        $recipes = Recipe::where('category_id', 3)
                         ->get();
        return $recipes;
    }

    public function show($recipe_id) {
        $recipe = Recipe::with('ingredients')
            ->findOrFail($recipe_id);

        return [
            'recipe' => $recipe,
            // 'ingredients' => $ingre->pluck('ingredient')
        ];
    }

    public function search(Request $request) {
        $search = $request->query('search');

        $recipes = Recipe::where('instruction', 'like', "%{$search}%")
                         ->get();

        return $recipes;
    }

    public function display()
    {
        $trending = Recipe::limit(10)->get();
        return ($trending);
    }



    public function findByIngredients(Request $request) {
        try {
            $ingredientIdsString = $request->query('ingredients');

            if ($ingredientIdsString) {
                $ingredientIds = explode(',', $ingredientIdsString);

                $recipes = Recipe::whereHas('ingredients', function($q) use($ingredientIds) {
                    $q->whereIn('ingredients.id', $ingredientIds);
                })->get();

                $maxIngredientsCount = 0;
                $recipeWithMostIngredients = null;

                foreach ($recipes as $recipe) {
                    $matchingIngredientsCount = $recipe->ingredients()->whereIn('ingredients.id', $ingredientIds)->count();

                    if ($matchingIngredientsCount > $maxIngredientsCount) {
                        $maxIngredientsCount = $matchingIngredientsCount;
                        $recipeWithMostIngredients = $recipe->id;
                    }
                }

                if ($recipeWithMostIngredients !== null) {
                    $recipe = Recipe::with('ingredients')->find($recipeWithMostIngredients);

                    return response()->json($recipe);
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
    public function store(Request $request)
    {
        $image_name = $request->file('image')[0]->move(
            public_path('uploads/uploaded_files'), 
            $request->file('image')[0]->getClientOriginalName()
        ); 

        $recipe = new Recipe();
        $recipe->title = $request->input('title');
        $recipe->description = $request->input('description');
        $recipe->instruction = $request->input('instruction');
        $recipe->category_id = $request->input('category_id');
        $recipe->cooking_time = $request->input('cooking_time');
        $recipe->preparation_time= $request->input('preparation_time');
        $recipe->difficulty_level = $request->input('difficulty_level');
        $recipe->image = '/uploads/uploaded_files/' . $request->file('image')[0]->getClientOriginalName();
        $recipe->save();

       $ingredients = $request->input('ingredients');
       foreach ($ingredients as $ingredient) {
        $recipe->ingredients()->attach([$ingredient['ingredient_id'] => ['measure' => $ingredient['ingredient_measure']]]);
       }

       // handling image storage
       

        return [
            'status' => 'success',
            'recipe' => $recipe,
            'ingredient'=>$ingredient
        ];
    }
}

