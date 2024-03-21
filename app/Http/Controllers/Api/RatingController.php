<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function ratingsForRecipe($recipe_id)
    {
        $ratings = Rating::where('recipe_id', $recipe_id)
            ->with([
                'user'
            ])
            ->orderBy('created_at', 'desc')
            ->get();

        return $ratings;
    }
}
