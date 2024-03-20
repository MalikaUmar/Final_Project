<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function index() {
        $recipes = Recipe::all();
        return $recipes;
    }

    public function search(Request $request)
    {
        $search = $request->query('search');

        $recipes = Recipe::where('title', 'like', "%{$search}%")
            
            ->get();

        return $recipes;
    }
}

