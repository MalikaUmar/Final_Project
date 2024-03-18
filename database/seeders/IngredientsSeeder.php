<?php

namespace Database\Seeders;
use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 

       $ingredients = [
        ['name' => 'beef meat'],
        ['name' => 'potato'],
        ['name' => 'onion'],
        ['name' => 'paprika'], 
        ['name' => 'lamb'], 
        ['name' => 'olive oil'], 
        ['name' => 'red onion'], 
        ['name' => 'carrot'], 
        ['name' => 'raisins'], 
        ['name' => 'rice'], 
        ['name' => 'salt'], 
        ['name' => 'cumin'],
        ['name' => 'sugar'],
        ['name' => 'black pepper'],
        ['name' => 'white flour'],
        ['name' => 'egg'],
        ['name' => 'chicken'],
        ['name' => 'smoked bacon'],
        [ 'name' => 'shrimp'],
        ['name' => 'lemon'],
        ['name' => 'sour cream'],
        ['name' => 'tomato'],
        ['name' => 'fish masala'],
        ['name' => 'milk'],
        ['name' => 'salt'],
        ['name' => 'red peppers'],
        ['name' => 'veal'],
        ['name' => 'yoghurt'],
        ['name' => 'parsley'],
        ['name' => 'chilly powder'],
        ['name' => 'turmeric'],
        ['name' => 'pork'],
        ['name' => 'mustard'],
        ['name' => 'garlic'],
        ['name' => 'all spices'],
        ['name' => 'wine'],
        ['name' => 'beer'],
        ['name' => 'meat masala'],
        ['name' => 'garam masala'],
        ['name' => 'ginger'],
        ['name' => 'flour'],
        ['name' => 'pepper flour'],
        ['name' => 'white beans'],
        ['name' => 'curry powder'],
        ['name' => 'bay leaves'],
        ['name' => 'coriander powder'],
        ['name' => 'cayenne pepper'],
        ['name' => 'water'],
        ['name' => 'ground meat'],
        ['name' => 'cooked white rice'],
        ['name' => 'vegeta'],
        ['name' => 'olive oil'],
        ['name' => 'rice'],
        ['name' => 'red pointed paprika'],
        ['name' => 'green pointed paprika '],
        ['name' => 'ground cumin seeds'],
        ['name' => 'sweet red paprika powder'], 
        ['name' => 'Scallion'],
        ['name' => 'Mild green pepper'],
        ['name' => 'white onion'],
        ['name' => 'yardlong bean '],
        ['name' => 'Star anise'],
        ['name' => 'Soy sauce'],
        ['name' => 'Red Sichuan pepper powder'],
        ['name' => 'yeast'],
        ['name' => 'baking soda'],
        ['name' => 'cumin'],
        ['name' => 'minced meat beef'],
        ['name' => 'white sasemy'],
        ['name' => 'lamb rib'],
        ['name' => 'sugar'],
        ['name' => 'bazaar naan'],
        ['name' => 'celery']
        
       ];

       foreach ($ingredients as $ingredient) {
   
            Ingredient::create([
                'name' => $ingredient['name']
            ]);
        }
    }
       }

