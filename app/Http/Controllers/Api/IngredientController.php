<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{ 
    public function index()
    {
        $ingredients = Ingredient::get();

        return $ingredients;
    }
}