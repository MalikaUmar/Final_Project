<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecipeIngredients extends Model
{
    use HasFactory;

    protected $table='recipe_ingredients';

    public function ingredient()
    {
        return $this->belongsTo(Ingredient::class);
    }

    public function recipe()
        {
            return $this->belongsTo(Recipe::class);
        }

        
    
}
