<?php

use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\RecipesController;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\IndianCusineController;
use App\Http\Controllers\Api\RatingController;
use App\Http\Controllers\Api\FavouriteController;

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

Route::get('/uyghur-cuisine/{recipe_id}',[RecipesController::class,'show']);

Route::get('/comments/{recipe_id}', [CommentController::class, 'commentsForRecipe']);
Route::post('/comments/{recipe_id}',[CommentController::class, 'storeForRecipe']);

// Route::get('/ratings/{recipe_id}', [RatingController::class, 'ratingsForRecipe']);

Route::get('/addToFavourites/{recipe_id}/{user_id}',[FavouriteController::class,'index']);
Route::get('/showFavourites/{user_id}',[FavouriteController::class,'show']);
Route::get('/removeFavourites/{user_id}/{recipe_id}',[FavouriteController::class,'remove']);


Route::get('/recipe/search', [RecipesController::class, 'search']);