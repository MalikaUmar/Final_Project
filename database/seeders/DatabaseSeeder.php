<?php

namespace Database\Seeders;
use App\Models\Ingredient;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            RecipesSeeder::class,
            IndianRecipeSeeder::class,
            IngredientsSeeder::class,
            RecipeIngredientsSeeder::class,
            CategoriesSeeder::class,
        ]);
    }
}
