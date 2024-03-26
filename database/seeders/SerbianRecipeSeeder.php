<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Recipe;

class SerbianRecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $recipes = [
            [
                'title' => 'Prebranac',
                'category_id' => 2,
                'description' => "Prebranac is one of the staple dishes of Serbian, Bosnian and Macedonian cuisine. It is one of the classic comfort foods of Balkans – a casserole of caramelized onions and white beans, in a sauce flavored with bay leaves and sweet Hungarian paprika. Originally made by farmers during long winters – it’s nutritious, wholesome and by far one of the cheapest dishes ever made. Prebranac is typically served at room temperature with warm crusty bread. In the Balkans, every family has their own way of making Prebranac, it’s the kind of recipe passed down through generations. Here is the one I “inherited” from my mom. She never wrote it down, always guided by her inner sense of perfection. Although Prebranac has an amazing quality that no matter what you do to it, it can never go wrong, it took me many years of experimentation, until I finally nailed the taste of my mom’s dish.",
                'cooking_time' => '2h-2,5h',
                'preparation_time' => '2h-2,5h',
                'instruction' => "Wash beans, put in a pot, pour water and let it cook. Add bay leaves. 
                                    When the beans are soft, if there's extra water or larger amount of water, it is necessary to pour off the water, because the beans shouldn't be neither dry nor sparsely.
                                    Pour beans into baking pan. 
                                    On a pre heated and pre oiled frying pan fry chopped onions until they get the golden brown color. Add cayeene pepper to the onions. Stir well and add it to the beans.
                                    Mix it and add salt. Add pepper. Bake at 180°C for about 15-20 minutes until you get nice, golden crust. ",
                'image' =>  'recipes-final-project\public\img\prebranac.jpg'               
            ],
            [
                'title' => 'Balkan-Style Stuffed Peppers',
                'category_id' => 2,
                'description' => "We like to stuff our vegetables in the Balkans. Not only do we stuff cabbage and grape leaves, but we stuff a variety of peppers as well. There are a variety of stuffed pepper dishes in the Balkans. My favorite is the sweet bell pepper variety and also the pickled pepper variety. Yes, you can (and totally should!) stuff kisele paprike!",
                'cooking_time' => '55 minutes',
                'preparation_time' => '30 minutes',
                'instruction' => "In a deep skillet or pan, add the oil, onion, celery, and water, and cook on medium heat until the water has evaporated and the vegetables are very soft, stirring occasionally.
                Add the ground meat and saute until the meat is completely cooked, breaking it up into very small pieces with a wooden spoon while it cooks.
                When the meat has cooked completely, remove from heat. Add in the rice, Vegeta, black pepper, paprika, grated potato, grated carrot, and salt to taste. Mix very well to combine all ingredients. Do not drain the fat from the meat.
                Preheat oven to 375 F (200 C).
                Once you have combined all the ingredients, tasted, and adjusted for seasoning, stuff each pepper almost all the way. Leave just a little bit of room at the opening. Insert a potato slice in each pepper to “close” the opening.
                
                (I leave a little room at the top for the potato slice but also because the rice will expand in the pepper and I don’t want the filling to leak out.)
                Place your stuffed peppers into a baking dish and pour in just enough water to cover the bottom. This prevents the peppers from sticking before they get a chance to release their juice.
                Cover your baking dish with aluminum foil and transfer to the oven. Bake for 45 minutes, then uncover and bake for an additional 10 minutes or until the tops are nicely charred.
                Serve hot.",
                'image' =>  'recipes-final-project/public/img/punjenaPaprika.jpg' 
            ],
            [
                'title' => 'Muckalica',
                'category_id' => 2,
                'description' => "Serbian dish, a stew made of barbecued meat and vegetables. Its name is derived from mućkati, meaning 'to shake, stir, mix'. Meat from various cuts are used to make a muckalica!",
                'cooking_time' => '90 minutes',
                'preparation_time' => '90 minutes',
                'instruction' => "Place the peppers in a preheated oven and bake for 30-35 minutes at 200 degrees. When roasted, remove the peppers, peel the skin and chop into larger pieces.
                Heat the oil and fry the onions briefly until golden. Add the roasted and chopped peppers, garlic and tomato peel. Simmer all together for twenty minutes, occasionally adding water.
                During this time, grill the meat on the grill or grill pan. You can make skewers, so the meat can be removed from the sticks after baking. If you have not made skewers, cut the meat into larger cubes or strips.
                Dice bacon into larger cubes and bake separately.
                The mućkalica should not be stirred, but only occasionally shaken. Add spices to taste - it should be spicy.
                Peppers, hot and sweet smoked, are added at the end. Before serving, sprinkle with parsley.",
                'image' =>  'recipes-final-project\public\img\s2.jpg' 
            ],
            [
                'title' => 'Gulash',
                'category_id' => 2,
                'description' => "Tracing its origins back to the 9th century, Goulash is a thick stew-like dish made of vegetables, meat, and various spices such as paprika. The original recipe hails from Hungary, a small country located in Central Europe, right next to Serbia. It has since then been adopted by many cultures, and today it is a popular meal throughout Central and Eastern Europe. While similar in texture, the Serbian version of this hearty meal is quite different.
                                  Serbian goulash ingredients are somewhat simpler, yet when prepared right, they yield a dish with complex aromas and flavor notes. You just need a few things perfectly paired with each other to create this comfort food delight. If you are already familiar with traditional Serbian food, you’ll probably be able to guess that this version of Goulash incorporates more meat than any other version. Yes, Serbian people love their meals full of meat, and Goulash is no different. Forget about using an excessive amount of vegetables; it’s all about meat, onions, and spices, served over creamy mashed potatoes. 
                                  Here is the recipe together with the instructions for making genuine Serbian goulash.",
                'cooking_time' => '120 minutes',
                'preparation_time' => '120 minutes',
                'instruction' => "Tracing its origins back to the 9th century, Goulash is a thick stew-like dish made of vegetables, meat, and various spices such as paprika. The original recipe hails from Hungary, a small country located in Central Europe, right next to Serbia. It has since then been adopted by many cultures, and today it is a popular meal throughout Central and Eastern Europe. While similar in texture, the Serbian version of this hearty meal is quite different.
                                  Serbian goulash ingredients are somewhat simpler, yet when prepared right, they yield a dish with complex aromas and flavor notes. You just need a few things perfectly paired with each other to create this comfort food delight. If you are already familiar with traditional Serbian food, you’ll probably be able to guess that this version of Goulash incorporates more meat than any other version. Yes, Serbian people love their meals full of meat, and Goulash is no different. Forget about using an excessive amount of vegetables; it’s all about meat, onions, and spices, served over creamy mashed potatoes.               
                                  Here is the recipe together with the instructions for making genuine Serbian goulash.",
                                  'image' => "recipes-final-project\public\img\gulash.jpg",
            ],
            [
                'title' => 'Musaka',
                'category_id' => 2,
                'description' => "I bet when you hear moussaka it takes you to Greece. However, this amazing casserole is made all over the Balkans also (and Egypt, Lebanon, and Turkey too!). 
                                    Think of today’s recipe as a slimming version of the Greek moussaka. For example, Balkan moussaka usually skips eggplant and almost never uses bechamel as a topping. (I told you this moussaka is easy peasy!)                                     
                                    Instead, potato rounds and seasoned ground beef are layered, baked, and finished off with an egg plus sour cream topping. (Milk, yogurt, and heavy cream work too!)                                      
                                    However, this isn’t to say you’ll never find a Balkan moussaka with eggplant along with potatoes and minced beef. However, this is usually the exception more than the rule.                                     
                                    If you were wondering what moussaka looks like, think of it like lasagna, if you exchanged lasagna sheets with potatoes. While they taste differently, the preparation process is similar. Except this moussaka is much quicker to make.                           
                                    Ground beef and potato moussaka holds a special place in my heart. It was one of the very first meals I learned how to make.  Nailing this dish made me feel I was finally grasping this cooking thing.",
                'cooking_time' => '80 minutes',
                'preparation_time' => '80 minutes',
                'instruction' => "Brown your ground meat in a skillet, breaking up the meat with a wooden spoon as it browns. If using a very lean meat like turkey, add in about 1 tbsp of oil. When it browns completely, add in the yellow onion and continue to brown until any liquid is evaporated and the meat begins to saute/fry in the pan. See note below.
                                    Season the meat with garlic powder, 1 tbsp of Vegeta, black pepper, and paprika. Salt to taste. Stir well and make sure all meat is covered. Taste and adjust for seasoning and remove from heat. Set aside.
                                    In a large bowl, combine about 3 tbsp (15 ml) of oil, 2 tbsp of Vegeta, and 1 tsp (6 g) of salt. Set aside.
                                    Peel potatoes. Using a sharp knife or mandolin, slice each potato into thin slices (see photo in slideshow above). Transfer potato slices to the bowl with oil and seasoning. Stir and ensure all potato slices are covered in oil. Continue to do this with the addition of each sliced potato.
                                    Preheat oven to 375F (200 C). Prepare a 9 x 13 casserole dish by spray with cooking spray or brushing oil on the bottom and sides.
                                    Layer the ingredients into the baking dish, first covering the bottom with a layer of seasoned potatoes, then meat, potatoes, and so on until you have used up all of your ingredients.
                                    Prepare the egg custard. In a medium bowl, combine the eggs, sour cream, milk, and a pinch of salt and pepper. Whisk until all ingredients are combined. Pour this mixture over the Musaka making sure it is distributed evenly.
                                    Cover baking dish with aluminum foil and bake 30 minutes. At the 30 minute mark, remove the aluminum foil and bake for another 20-25 minutes or until the potatoes on top turn a golden brown. Test for doneness by using a fork and ensure potatoes in the Musaka are soft.
                                    When fully cooked, let the Musaka rest for 15-20 minutes before serving.",
                'image' => "recipes-final-project\public\img\musaka.jpg"
            ],
            [
                'title' => 'Lovacke snicle',
                'category_id' => 2,
                'description' => "",
                'cooking_time' => '80 minutes',
                'preparation_time' => '80 minutes',
                'instruction' => "Wash the steaks, cut the membrane from the sides so that they do not bend during frying, dry them, beat them with a kitchen hammer, add salt, and then roll them in a mixture of flour and paprika. Fry the steaks on hot oil for a minute on both sides, take them out, coat them with mustard, sprinkle with ground pepper and set aside.
                                    In the same pan, fry finely chopped garlic, then as soon as it smells, pour in water or broth, return the steaks, lower the temperature, then simmer half-covered on low heat. During cooking, shake the pan several times. After about an hour of stewing, pour in the white wine and cook for another 15 to 20 minutes, stirring often.
                                    You can serve boiled potatoes, mashed potatoes or stewed mixed vegetables as a side dish.",
                'image' => "recipes-final-project\public\img\lovacke-snicle-1-670x447.jpg"
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
    