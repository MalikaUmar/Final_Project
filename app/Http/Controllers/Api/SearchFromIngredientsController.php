<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ingredient;

class SearchFromIngredientsController extends Controller
{
    public function index(){
        $ingredients = Ingredient::all();
        return response()->json($ingredients);
    }
}
