<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Recipe;

class IndianRecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $recipes = [
            [
                'title' => 'Tandoori Chicken',
                'category_id' => 1,
                'description' => "Try this authentic tandoori chicken that's marinated in yogurt and spices, then cooked on the grill instead of a clay oven so you can make it at home. Serve with long-grain basmati rice, grilled veggies, roasted corn on the cob, and a cucumber salad",
                'cooking_time' => '20 mins',
                'preparation_time' => '25 mins',
                'instruction' => 'Gather all ingredients.Remove and discard skin from chicken pieces. Cut slits into meat and place into a shallow dish. Season chicken on both sides with lemon juice and salt. Let sit for 20 minutes.Mix yogurt, onion, garlic, garam masala, ginger, and cayenne pepper together in a medium bowl until smooth, then stir in food coloring.Spread yogurt mixture over chicken, cover, and refrigerate for 6 to 24 hours (the longer the better). When ready to cook, preheat an outdoor grill for medium-high heat and lightly oil the grate. Remove chicken from marinade. Discard remaining marinade.Cook chicken on the preheated grill until no longer pink and the juices run clear. An instant-read thermometer inserted near the bone should read 165 degrees F (74 degrees C).Garnish with cilantro and lemon wedges.',
                'image' =>  'https://marketplace.canva.com/YNpUg/MAEERqYNpUg/1/s2/canva-indian-tandoori-chicken-MAEERqYNpUg.jpg'               
            ],

            [
                'title' => 'Indian Chicken Curry',
                'category_id' => 1,
                'description' => "This Indian-inspired creamy chicken curry recipe is similar to a curry I had in India. The aromatic spices and flavors are a delight to the senses! Delicious with fresh naan and basmati rice.",
                'cooking_time' => '20 mins',
                'preparation_time' => '25 mins',
                'instruction' => 'Heat olive oil in a skillet over medium heat. Sauté onion until lightly browned.Stir in garlic, curry powder, cinnamon, paprika, bay leaf, ginger, sugar, and salt. Continue stirring for 2 minutes.Add chicken pieces, tomato paste, yogurt, and coconut milk. Bring to a boil, reduce heat, and simmer for 20 to 25 minutes.Remove bay leaf, and stir in lemon juice and cayenne pepper. Simmer 5 more minutes.Serve hot and enjoy.',
                'image' =>  'https://marketplace.canva.com/toYxo/MAEPsltoYxo/1/s2/canva-close-up-shot-of-delicious-chicken-curry-on-white-ceramic-plate--MAEPsltoYxo.jpg'               
            ],

            [
                'title' => 'Indian Shrimp Curry',
                'category_id' => 1,
                'description' => "This shrimp curry recipe is a subtle yet richly flavored curry that complements prawns perfectly. It tastes wonderful and is a very easy meal to prepare when you are in a hurry. Make sure to remove the shrimp tails before adding them to the skillet. Serve with rice.",
                'cooking_time' => '20 mins',
                'preparation_time' => '15 mins',
                'instruction' => 'Heat peanut oil in a large skillet over medium heat; cook and stir onion in hot oil until translucent, about 5 minutes. Remove the skillet from heat and allow to cool slightly, about 2 minutes.Add garlic, turmeric, ginger, cumin, paprika, and chile powder to onion in the skillet; stir over low heat to bloom spices, about 30 seconds. Stir in tomatoes, coconut milk, and salt. Bring to a boil for 1 minute, then reduce heat and simmer, stirring occasionally, for 10 minutes.Stir in shrimp and cilantro; simmer until shrimp turns opaque, about 1 minute.',
                'image' =>  'https://marketplace.canva.com/6PaP0/MAEsEZ6PaP0/1/s/canva-untitled-MAEsEZ6PaP0.jpg'               
            ],

            
            [
                'title' => 'Spicy Vegan Potato Curry',
                'category_id' => 1,
                'description' => "This vegan potato curry has abundant spices that make this better than any restaurant curry I've tasted.",
                'cooking_time' => '30 mins',
                'preparation_time' => '15 mins',
                'instruction' => 'Place potatoes into a large pot and cover with salted water. Bring to a boil, then reduce the heat to medium-low, cover, and simmer until just tender, about 15 minutes. Drain and allow to steam dry for 1 to 2 minutes.Meanwhile, heat oil in a large skillet over medium heat. Cook and stir onion and garlic in hot oil until onion has softened and turned translucent, about 5 minutes. Season with curry powder, garam masala, cumin, salt, ginger, and cayenne pepper; cook and stir for 2 minutes more.Add cooked potatoes, garbanzo beans, peas, and tomatoes, then pour in coconut milk. Bring to a simmer and continue cooking for 5 to 10 minutes.',
                'image' =>  'https://marketplace.canva.com/l9MjM/MAFlKAl9MjM/1/s2/canva-roasted-potato-wedges-with-herbs-and-sea-salt-on-plate%2C-top-view-%28turkish-name%3B-elma-dilim-patates%29-MAFlKAl9MjM.jpg'               
            ],

            [
                'title' => 'Chicken Vindaloo',
                'category_id' => 1,
                'description' => "Chicken vindaloo is a spicy curry dish. It was originally a Portuguese dish of spicy pork, but you can add any meat you wish.",
                'cooking_time' => '30 mins',
                'preparation_time' => '35 mins',
                'instruction' => 'Toast turmeric, cardamom, cinnamon, coriander, cloves, cumin, paprika, and cayenne pepper in a Dutch oven or large pot over medium-low heat until fragrant, about 2 minutes. Stir spices constantly as they toast to ensure they do not burn.Stir in onion, olive oil, garlic, and ginger. Increase heat to medium; cook and stir until onion is softened, about 5 minutes.Stir in tomato paste until no lumps of paste remain. Add chicken, potatoes, tomatoes, broth, wine vinegar, and bay leaf; bring to a boil, then reduce heat to medium-low. Cover and simmer until potatoes are tender and chicken is no longer pink in the center, about 15 minutes.Uncover and continue cooking until sauce thickens slightly, about 5 minutes more. Season with salt, black pepper, and additional cayenne pepper.',
                'image' =>  'https://marketplace.canva.com/IqyCU/MAEamWIqyCU/1/s2/canva-chicken-curry-on-a-bowl-MAEamWIqyCU.jpg'               
            ],

            [
                'title' => 'Indian Fish',
                'category_id' => 1,
                'description' => "This Indian fish curry is a very spicy dish. The recipe was inspired by a Bengali fish recipe my mother used to make in India.",
                'cooking_time' => '30 mins',
                'preparation_time' => '15 mins',
                'instruction' => 'Mix 2 tablespoons oil, mustard, black pepper, and 1/2 teaspoon salt together in a shallow glass bowl. Add fish and turn to coat. Cover and refrigerate for 30 minutes.While the fish is marinating, combine onion, garlic, ginger, and cashews in a blender or food processor; pulse until mixture forms a paste.Heat remaining 1 tablespoon oil in a skillet over medium-low heat. Add cashew paste; cook and stir until fragrant, 1 to 2 minutes. Add cayenne pepper, remaining 1 teaspoon salt, cumin, coriander, sugar, and turmeric; cook and stir for 5 minutes. Stir in tomato and broth.Remove fish from marinade and shake off excess; discard remaining marinade. Arrange fish in a baking dish and pour sauce over top.Bake, covered, in the preheated oven until fish flakes easily with a fork, about 30 minutes. Garnish with cilantro.',
                'image' =>  'https://marketplace.canva.com/WYwFs/MAFCFwWYwFs/1/s/canva-canned-fish-in-tomato-soup-MAFCFwWYwFs.jpg'               
            ],

            [
                'title' => 'Chicken Biryani',
                'category_id' => 1,
                'description' => "Chicken biryani is a delicious Pakistani/Indian rice dish that's typically reserved for special occasions such as weddings, parties, or holidays such as Ramadan. It has a lengthy preparation, but the work is definitely worth it. For biryani, basmati rice is the ideal variety to use.",
                'cooking_time' => '1 hr 20 mins',
                'preparation_time' => '25 mins',
                'instruction' => 'Gather all ingredients.Heat 2 tablespoons of oil in a large skillet. Fry potatoes in hot oil until lightly browned, about 3 to 5 minutes. Remove to a paper towel-lined plate to drain; set aside.Add remaining 2 tablespoons of oil to the skillet. Add onions, garlic, and fresh ginger; cook and stir until onion is soft and golden. Add tomatoes, salt, cumin, chili powder, pepper, and turmeric; cook, stirring constantly, for 5 minutes.Stir in yogurt, mint, ground cardamom, and cinnamon stick. Cover and cook over low heat, stirring occasionally, until tomatoes are cooked to a pulp. It may be necessary to add a little hot water if mixture becomes too dry and starts to stick to the pan.Add chicken and stir well to coat. Cover and cook over very low heat until chicken is tender, 35 to 45 minutes. There should only be a little very thick gravy left when chicken is finished cooking. If necessary cook uncovered for a few minutes to reduce the gravy.Meanwhile, make the rice: Wash rice well and drain in a colander for at least 30 minutes.Heat oil in a large skillet. Add onion; cook and stir until golden. Add cardamom pods, cloves, cinnamon stick, ground ginger, and saffron; stir in rice until coated with spices.Reduce heat to very low, cover with a tight-fitting lid, and steam for 20 minutes without lifting the lid or stirring.Spoon biryani onto a warm serving dish.',
                'image' =>  'https://marketplace.canva.com/rbLd8/MAFWhsrbLd8/1/s2/canva-homemade-goat-fry-biryani-%7C-mutton-dum-biryani-served-with-yogurt-raita%2C-selective-focus-MAFWhsrbLd8.jpg'               
            ],

            [
                'title' => 'Pork Vindaloo',
                'category_id' => 1,
                'description' => "Chicken vindaloo is a spicy curry dish. It was originally a Portuguese dish of spicy pork, but you can add any meat you wish.",
                'cooking_time' => '30 mins',
                'preparation_time' => '35 mins',
                'instruction' => 'Toast turmeric, cardamom, cinnamon, coriander, cloves, cumin, paprika, and cayenne pepper in a Dutch oven or large pot over medium-low heat until fragrant, about 2 minutes. Stir spices constantly as they toast to ensure they do not burn.Stir in onion, olive oil, garlic, and ginger. Increase heat to medium; cook and stir until onion is softened, about 5 minutes.Stir in tomato paste until no lumps of paste remain. Add chicken, potatoes, tomatoes, broth, wine vinegar, and bay leaf; bring to a boil, then reduce heat to medium-low. Cover and simmer until potatoes are tender and chicken is no longer pink in the center, about 15 minutes.Uncover and continue cooking until sauce thickens slightly, about 5 minutes more. Season with salt, black pepper, and additional cayenne pepper.',
                'image' =>  'https://marketplace.canva.com/N5MDE/MAFk7YN5MDE/1/s2/canva-deep-fried-pork-knuckle%2Csliced-crispy-pork-MAFk7YN5MDE.jpg'               
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
