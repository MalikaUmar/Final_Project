<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [   'id' => '1',
                'name' => 'Indian cuisine',
                'description' => "Indian cuisine consists of a variety of regional and traditional cuisines native to the Indian subcontinent. Given the diversity in soil, climate, culture, ethnic groups, and occupations, these cuisines vary substantially and use locally available spices, herbs, vegetables, and fruits.",
                'image' =>  'https://marketplace.canva.com/YNpUg/MAEERqYNpUg/1/s2/canva-indian-tandoori-chicken-MAEERqYNpUg.jpg'               
            ],
            [
                'id' => '2',
                'name' => 'Serbian cuisine',
                'description' => "Serbian cuisine (Serbian: српска кухиња / srpska kuhinja) is a Balkan cuisine that consists of the culinary methods and traditions of Serbia.",
                'image' =>  'recipes-final-project\public\img\prebranac.jpg'                 
            ],
            [
                'id' => '3',
                'name' => 'Uyghur cuisine',
                'description' => "The Uyghur ethnic community is predominately Muslim and so its cuisine is halal, with lamb as the base of many dishes. Hand-pulled noodles, steamed buns, dumplings, spiced skewers and homemade bread are all in high demand.",
                'image'=>'https://images.squarespace-cdn.com/content/v1/5dbed7c49598ba519f1f8ae0/1596472762252-24SJND9QODEJ49E119VT/uyghur+food+polo+8.jpg?format=1500w'
            ]
        ];

        foreach($categories as $category){
            // $category = new Category;
            Category::create([
                'name' => $category['name'],
                'description' => $category['description'],
                'image' => $category['image'],
                'id'=>$category ['id']
            ]);
        }
    }
}

