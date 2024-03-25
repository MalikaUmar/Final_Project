<?php

namespace Database\Seeders;
use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientsSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 

       $ingredients = [
        ['name' => 'cabbage'],
        ['name' => 'fresh tomatoes'],
        ['name' => 'tomato paste'],
        ['name' => 'dried sausages'],
        
       ];

       foreach ($ingredients as $ingredient) {
   
            Ingredient::create([
                'name' => $ingredient['name']
            ]);
        }
    }
       }

