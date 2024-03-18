<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recipe;

class IndianCusineController extends Controller
{
    //
    public function Index()
    {
        $recipes = Recipe::all();
        return $recipes;

    }
}
