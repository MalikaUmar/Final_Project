<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Recipe;

class SerbianRecipeSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $recipes = [
           
            [
                'title' => 'Djuvec',
                'category_id' => 2,
                'description' => "This djuvec rice recipe is bursting with flavor! Delicious and colorful bell
                 peppers cooked until tender while soaked into the sweet and sour tomato juices, this will be your
                  favorite side dish or vegetarian-friendly meal. Djuvec might not be well known in the US, but it’s
                   widely popular in the Balkan area.",
                'cooking_time' => '80 minutes',
                'preparation_time' => '80 minutes',
                'instruction' => "Cut the meat into cubes, bacon into strips, sausage into slices.Chop onions. Peel and cut potatoes into small cubes.
                Heat the oil and fry onions, bacon and sausage. Add meat, pour 1.5 dl of water and add seasoning of dried vegetables. Simmer all together for a little while. Add potatoes and rice.Continue simmering. Add vegetables, finely cut parsley, salt and pepper. Pour water to cover the ingredients.
                Put casserole in the preheated oven with lid on and bake for 30 minutes.Remove the lid and bake for another 20 minutes. Total time of 50 minutes. Serve warm.",
                'image' => "\img\traditional-ratatouille.webp.jpg"
            ],
            [
                'title' => 'Slatki kupus',
                'category_id' => 2,
                'description' => "I’ll start off by saying that people either love or hate this dish. I grew up eating it, and don’t mind it if it’s made correctly. 
                By correctly, I mean with fresh flavorful meat and adequate spices. Otherwise, the cabbage flavor becomes overwhelming and not pleasant. 
                This is a very traditonal dish eaten all over the Balkans during the Spring and Summer months.",
                'cooking_time' => '80 minutes',
                'preparation_time' => '80 minutes',
                'instruction' => "In a large soup pot, add half of your chopped cabbage. On top of the cabbage, lay down the chicken thighs. Sprinkle the meat with half of the Vegeta, 1 tsp of salt, and a pinch of black pepper.
                Add carrots, green onions, bay leaves, tomatoes, and tomato paste on top of the meat. Cover with the remaining chopped cabbage and sprinkle everything with the remaining Vegeta.
                Pour enough water to fill your pot halfway to the top. Don’t fill all the way to the top as the cabbage will release its juices.
                Cover and cook the cabbage on medium heat for 30 minutes, periodically using a wooden spoon to press down the cabbage. Carefully check that nothing has stuck to the pot by running your wooden spoon against the bottom. Do not stir it yet.
                After 30 minutes, check on your water level. Ensure the cabbage has released enough juice. Your pot should be at least 3/4 full. If not, add water. Reduce the heat to low, but maintain a slow simmer.
                In a saucepan or skillet, heat the oil until glistening. Add in the flour and stir to slightly cook the flour. Add in the paprika and turn off the heat. Stir well to combine the ingredients and very carefully pour into the cabbage. Stir carefully to combine.
                Note: When the hot oil hits the water, it will sizzle. This is normal, so be careful and slowly pour in the oil.
                Taste and adjust for seasoning according to taste.",
                'image' => "\img\Slatki-kupus-s-dimljenom-ribom.jpg"
            ]
            ];
        
   
            foreach($recipes as $recipe){
                Recipe::create([
                    'title' => $recipe['title'],
                    'category_id' => $recipe['category_id'],
                    'description' => $recipe['description'],
                    'cooking_time' => $recipe['cooking_time'],
                    'preparation_time' => $recipe['preparation_time'],
                    'instruction' => $recipe['instruction'],
                    'image' => $recipe['image']
                    
                ]);
          }
        }
    
        
        
    }