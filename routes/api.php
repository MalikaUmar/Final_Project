<?php

use App\Http\Controllers\Api\RecipesController;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\IndianCusineController;
use App\Http\Controllers\Api\SerbianCusineController;
use App\Http\Controllers\Api\SearchFromIngredientsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/uyghur-cuisine',[RecipesController::class,'index'])->name('api.uyghur');
Route::get('/indian-cusine',[IndianCusineController::class,'Index']);
Route::get('/serbian-cusine',[SerbianCusineController::class,'index']);
Route::get('/search-meal',[SearchFromIngredientsController::class,'index']);
Route::get('/recipes/by-ingredients', [RecipesController::class, 'findByIngredients']);
Route::get('/recipe/search', [RecipesController::class, 'search']);