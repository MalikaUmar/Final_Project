<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Recipe;

class RecipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $recipes = [
            [
                'category_id' => 3 ,
                'title' => 'Uyghur Pilaf',
                'description' => 'Polo is a traditional Uyghur rice dish, it’s one of the   most famous street foods in Central Asia, which we consider to be “King of the Uyghur Table.”',
                'cooking_time' => '1 hr',
                'preparation_time' => '20 min',
                'instruction' => "Cut the lamb roughly in 5-6 big sections. Cut the onion in half and slice them into half rings. We are going to Julienne the carrots: slice the length wise, so you're creating planks about 1/3 inch (0.8 cm) thick, stack up the carrots and then cut them length wise again, creating Julianne's, try to cut them as uniformly as possible. This makes the dish look very pretty :)

Rinse the rice to remove the surface starch that otherwise causes the rice to clump together. Let the rice soak in clear water for a bit. Set aside.

To cook: Add the oil to the pan, let it heat up over high heat, when you see light smoke, add the meat and brown them up on all sides. It would be best if you had a heavy-bottomed deep pan with a lid for braising. Use the lid to reduce the splatter of oil.

Add in the onions, cumin, salt, carrots, and sugar. Mix all the ingredients carefully and gently. Let it cook (about 8-10 min.)
You want them to be soft and nice. Add the water. Be sure to scrape the bottom, that's where all the flavour lives. Bring it to a boil, then immediately lower to a simmer.

Throw away the rice water. Bring the rice into the pan and spread the rice evenly out with a spoon on top of the flavourful liquid. Please DON’T mix it with the rest of the ingredients. Add as many raisins as you like on top of the rice. Now use a chopstick to make holes in the layer of rice, so it simmered well. Cover and keep it at a low simmer for about 35 min. Check on it occasionally by listening to the simmering sound. The sound should be soft and slow.

Open the lid, watch out for the steam, it will burn. Mix all the ingredients gently from the bottom of the pan. Tear the meat apart into bite sizes and put them on the top of the Polo.

Serve: hot, served on a big shared plate, 3-4 people per plate, a vinegary salad would be a perfect side dish. Traditionally, in my family we combine it with Eggplant Salad. Enjoy!",
                   
               'difficulty_level' => 'Challenging' ,
               'image'=>'https://images.squarespace-cdn.com/content/v1/5dbed7c49598ba519f1f8ae0/1596472762252-24SJND9QODEJ49E119VT/uyghur+food+polo+8.jpg?format=1500w'
            
            ],

            [
                'category_id' => 3 ,
                'title' =>'Chicken Stew',
                'description' => "Speaking of the Uyghur braised chicken stew, in Uyghur it’s called 'Tohoo-Qordiqi,' توخۇ قوردىقى, which means Chicken Stew.",
                'cooking_time' => "1 hr. 10 min",
                'preparation_time' => '25 min',
                'instruction' =>"To make the dough: Add flour and salt to a mixing bowl, then add the water NOT at once but little by little to the flour, and whisk to combine. Knead it until it becomes smooth from inside out. Cover with a damp towel or plastic wrap and set it in room temperature for 15 min. 

In the meanwhile, remove the chicken’s neck, chop the chicken into small bite-sized pieces (with bone), without chicken's head and feet and the skin still intact. Wash them to remove the blood and bone fragments. Add them to boiling water for 2-3 minutes, strain out all excess water.   

Prep the rest of the ingredients and display them on a plate, so it's easier while you put them in the pan. 

To fry and braise:  Warm up the pan (make sure the pan is dry), add the oil, heat it up over medium-high. Add sugar, whisk it, until the sugar is melted in the oil (you’ll see some bubbles in the melted sugar in the oil). Add the chicken, brown them.

Add hot red chilies, the hard/white section of the scallion (keep the green pieces for at the end), ginger and potato. Mix. Add the water. Add star anise, paprika powder, chili flakes, soy sauce, salt and the Sichuan pepper powder. Mix. Bring it to boil, turn the fire down to medium-low heat to a simmer and let it braise for 15 min.  

Prepare boiling water (2L) for the noodle in a separate (sauce)pan. 

To make the noodle: cover lightly your palms, the working surface and the rested dough with a layer of oil. Use a rolling pin and roll out the dough in a rectangle form, (the dough should be slightly oily) turn it around and continue with the other side, put oil on it, if it feels dry. Roll it out until you reach the thickness of 2-3mm, make the surface even and smooth. Cut it into 3cm wide, long strips. (see the video tutorial) Press the cut strips with top of your three fingers to make your own finger prints on the noodle :) this makes the noodle very characteristic and give personality to it! If you want it to be thinner, you can bounce the fingerprint noodle at the table by holding the ends between your hands while you stretch them. Repeat this with the rest of the strips. 

To boil: Put the noodle into the boiling water, move the noodles around immediately so they won’t stick to each other. Cook 2 to 3 minutes. Take the noodles out with a strainer, shortly wash it in cold water, so they stop cooking. Strain out all excess water. 

To serve: hot served on a big shared plate, 3-4 people per plate, the stew is plated on top of the noodles, so the noodle soak up all the aromatic sauce. Enjoy!!",
                'difficulty_level' =>'Chanllenging',
                'image'=>'https://images.squarespace-cdn.com/content/v1/5dbed7c49598ba519f1f8ae0/1596636997998-6NM9IEZ1VAJC5QEJMX4J/Uyghur+food+dapanji+big+plate+chicken-11.jpg?format=1500w',
            ],
            [
                'category_id' => 3 ,
                'title' =>'Hand-pulled Laghman',
                'description' => "Laghmen, also spelled as Lagman, is the most famous Uyghur traditional hand-pulled noodle dish.",
                'cooking_time' => "20min",
                'preparation_time' => '1 hr',
                'instruction' =>"Mix the dough ingredients in a mixing bowl, knead them to make a smooth dough cover with a damp towel or plastic wrap and set aside in room temperature, for 15- 20 min.

Meanwhile, cut the vegetables for cooking, display them on a plate, so it's easier to put them in the frying pan later. 

When the dough is rested, roll it into a dough coil (if you don't know what that is, check out my blog post about that.) Cover it with kitchen foil, so it doesn't dry out, set aside, for 15-20 min.

Cooking the topping: Use the biggest fire to heat up the oil over high heat, when you see light smoke, add the lamb and brown them. Then put the ginger, garlic, hot red chili, dried tomato, onion and fresh tomato into the pan, mix all, cook for 2-3 min. Then add the yard long bean, peppers, scallion and spices, mix all the ingredients, cook for 3-4 min. 

Add water, bring it to a boil then move it to the smallest fire and let it simmer. 

Get boiling water ready for boiling the noodle. 

Stretch the dough coil:  Start with the dough coil on top. Hold the end of the coil between your thumb and index finger of your right hand. loosen up 30 cm of the coil from the plate, bring it above the working surface. 

Now place your left index finger and thumb right next to the index finger and thumb of the right hand. Hold the noodle lightly.

To stretch the noodle thin (5mm). Move your arms to the sides, while the noodle slides between your left thumb and index. Repeat until you stretched the whole rope. 

To make the noodle cords:  Put the end of the stretched rope, between your index and middle finger (right hand.)

Now with your left hand Lift the noodle onto the palm edge to make a 'first cord' (keep your palms open, faced each other in a body width distance.)

Move the right hand clockwise and keep the left palm facing the right (as if you're holding a beach ball between your hands) to touch the hanging noodle so you'll create the ''second cord.''

Turn the right hand from the wrist, 360 degrees around the noodle. Now the palms are facing each other again. Now catching the noodle on your right palm edge, rotate your arms counterclockwise and slip your left hand under the hanging noodle to catch it on your left palm edge. This is the “third cord ”. You should keep the same distance between your arms during the whole process. Making sure not to stretch the noodle. 

Repeat this ''cord making'' process until you reach the end of the rope. 

Pick up the end carefully with your fingers, while you still keep the cords whole, put the end between your index and middle fingers. 

To make the noodle dance: At this point, you wrapped up your hands with lots of ''cords'', WHAT MAGIC!! Now keep your palms facing each other, and move your arms vertically up to hit the cords shortly on the table. 
When hitting the table carefully stretch the noodle by moving your arms out. Let the cords “dance” elegantly. Repeat this 3-4 times. (Some cords may break, it’s fine, just enjoy hitting the cords and dance with them )

To boil: Put the noodle into the boiling water, move the noodles around immediately so they won’t stick to each other. Cook 2 to 3 minutes. 

Take the noodles out with a strainer, shortly wash it in cold water, so they stop cooking. Strain out all excess water.

Serve it warm in a deep diner plate and place the topping on top of the noodles. Use Laghman chili sauce as a dressing. Mix them all. 

It's our tradition to drink boiled noodle water along with Laghman, try that and hope you ENJOY!!",
                'difficulty_level' =>'Medium',
                'image'=>'https://images.squarespace-cdn.com/content/v1/5dbed7c49598ba519f1f8ae0/1597782374876-MGZHBYP0AF6U8L0W8R1H/uyghur+food+lagman+chili+sauce-11.jpg?format=1500w',
            ],
            [
                'category_id' => 3 ,
                'title' =>'Meat Pie: Samsa',
                'description' => "Samsa is a Tandoor (Tannur/Tannour) cooked dish which is usually made of a slightly salty dough that contains a filling of lamb and onion, sometimes a mixture of lamb and beef.",
                'cooking_time' => "15min",
                'preparation_time' => '25min',
                'instruction' =>"To make the dough Knead the dough thoroughly for about 10 min, until there are no dry spots from inside and out. Cover with a damp towel or plastic wrap and set it at room temperature for 10-15 min.

To prepare the filling: In the meanwhile, cut the lamb into corn size small pieces. Chop the onion smaller than the lamb pieces. Add cumin, white pepper, black pepper, salt and oil to the mixing bowl and grab them with your hand to mix all the ingredients evenly. Add a small hand of water to the filling at the end. This prevents the meat from drying out. Set aside for 5 minutes.

Lubricate the oven tray with oil, preheat the oven at a low grill setting for 10 min.

To make the wrapper: Divide the rested dough into 7 slightly bigger than walnut-size pieces. Roll each piece into a round ball. Cover them with a bowl or with a dry clean towel. Roll out each piece with a rolling pin. The edges should be thinner than the center. Roll it until it's just thin enough (not too thin) so it wraps the filling firmly. If it's too thin, it'll tear during the wrapping.

Use a tablespoon of filling, put it at the center of the wrapper. Wet the edges with drops of water, so the dough sticks to each other during the wrapping.

To wrap: flatten the filling, then cover the right side of the filling with the wrapper (see image A-B) Then cover the left (see image C) let the edges overlap a little while you press the overlapping dough lightly. Cover the top like in image D, while you press it to stick and cover the filling to make a flat rectangular Samsa. Place the wrapped sides face down on the oil-lubricated surface like in image E. Cover it with a dry clean dish towel. Repeat this with the rest of the wrappers and the filling.
When the oven is ready, place the Samsa on the heated baking tray at the low grill setting for 15 minutes.

  Serve warm/hot with a cup of hot tea and enjoy!!",
                'difficulty_level' =>'Challenging',
                'image'=>'https://images.squarespace-cdn.com/content/v1/5dbed7c49598ba519f1f8ae0/1597827474074-ZSQ8WQQ0ZC3WJQOYU83T/uyghur+food+Samsa-11.jpg?format=1500w',
            ],

            [
                'category_id' => 3 ,
                'title' =>'Pasta Soup: Narin',
                'description' => "Narin is a traditional Uyghur pasta soup. There are many kinds of Narin. No matter what kind of Narin is made, the pasta (chöp -چۆپ) is always cooked in a nourishing meat soup until it becomes silky smooth and served with the soup.",
                'cooking_time' => "2-3 hr",
                'preparation_time' => '1 hr',
                'instruction' =>"To make soup: add 2L water to the cooking pot. Cut the lamb (with some bone on it) into big pieces, add the meat and the salt to the pan. Let it boil for 2-3 hours on low heat. Put the sliced ginger in the last half hour.

To make the dough: Add flour, egg and a pinch of salt to a mixing bowl. Add a little water during the kneading, knead to make a smooth dough, cover with a damp towel or plastic wrap and set aside at room temperature for 15- 20 min.

Sprinkle enough flour for on the working surface and on the rested dough, then roll it out with a rollingpin. Roll it until the dough becomes thin and even. (If the dough tears, no worries, we'll tear it up again later anyway ;)) you need to roll out the dough as thin and even as possible. Then tear it into pieces. Each piece is slightly smaller than half your palm. Let them rest. (see picture below)

Cut the onion and the carrots in half, put them in the soup. Add black pepper, cumin and salt. Cook them for about 15 min in the soup until they become soft.

When the carrots and onion are soft, along with the meat and ginger, take them out of the soup. Pour the soup through the strainer to filter out the little bone fragments. Bring the soup to a boil again. Shake all the dough pieces gently to remove the dry flour, then add the dough pieces into the soup. Mix, so they don’t stick to each other. Add salt to your own liking. Let it boil on low heat for 8-10 min.

Dice the cooked carrots into small pieces. Cut the onion and tender meat into the size of carrot dices as well. Add them into a bowl. Add a hand of salty water (a mixture of 1 tbsp salt to a 150ml tap water). This brings out the taste of all the ingredients and makes the topping moist. Mix all the ingredients very gently by hand.

Serve: the hot pasta soup in a big shared plate, place the topping evenly on top of the soup. Lightly sprinkle black pepper to your own liking. Use a tablespoon and enjoy (2-4 person per plate)!!",
                'difficulty_level' =>'Difficult',
                'image'=>'https://images.squarespace-cdn.com/content/v1/5dbed7c49598ba519f1f8ae0/1597783889990-JYWAUBU429IYCCYOF66I/uyghur+food+Narin+soep-6.jpg?format=1500w',
            ],
            [
                'category_id' => 3 ,
                'title' =>'Lamb Ribs',
                'description' => "In Uyghur cuisine, Lamb is one of the main ingredients. Lots of traditional foods are made with lamb, we make Lamb Kabaps, Lamb stew, Lamb bread, Lamb soup etc. Lamb ribs are made in lots of different ways such as, frying and in the Tandoor (Tannur) that is a traditional way of making lamb ribs.",
                'cooking_time' => "1 hr ",
                'preparation_time' => '50 min',
                'instruction' =>"1. Cut the lamb into pieces. wash them to remove the bone fragments. Dry them well with a towel.

2. Add the oil into the deep, flat pan. Use the smallest burner on high heat. Put the meat side on the bottom of the pan. Close the lid and turn the fire down to medium-low heat. When the first side is brown, turn the ribs over to brown all the sides.  

3. When the meat is well browned, season them with a thick layer of salt, paprika powder, and cumin, until the meat is covered. Gently turn the ribs over and cover the other side in the same way. 

4. Add the sliced onion, then add 2/3 of the cut paprika. Pour water along the pan edges. Let it come to a boil.

5. Close the lid, turn the fire down to medium-low heat. Braise the ribs for about 1.5 hours. 

6. In the meanwhile, make a round Uyghur Bazaar Naan ore take one out of the freezer. (yes they are perfect to store in the freezer for later :)) Cut the naan into pizza like pieces. (if you don’t want a naan, skip this step)

7. When the ribs are ready, put the naan pieces around the pan edges and partly under the ribs, in the sauce. Let it warm up for 2-3 min. (if you don’t want a naan, skip this step)

8. Take out the lamb and the naan. Display the naan on the bottom of a big plate. Put the rest of the cut paprika into the pan, those fresh and colorful vegetables make the sauce look and taste more delicious.

9. Now add the sauce on the top of the naan. Add the ribs to the top of the sauce.

10. Serve hot/warm and enjoy!

",
                'difficulty_level' =>'Difficult',
                'image'=>'https://images.squarespace-cdn.com/content/v1/5dbed7c49598ba519f1f8ae0/1608215382946-14CONYMCRH03DK30DTYF/lamb+ribs+recipe+with+paprika.jpg?format=1500w',
            ],

            [
                'category_id' => 3 ,
                'title' =>"Empanada: Sambusa",
                'description' =>"Sambusa is an Uyghur empanada, which is made from rice and carrots. The hot steam from the freshly fried empanada is so beautiful and smells so delightful.",
                'cooking_time' =>"20min",
                'preparation_time' =>"40min",
                'instruction' =>"To make the dough: prepare the yeast water by mixing the yeast, sugar and warm water and let it sit for 10 minutes. You will see some bubbles in the water(this helps the dough rise faster). Then make the dough by mixing the yeast water, flour and a pinch of salt. Cover it with a damp towel or plastic wrap and set it aside at room temperature to rise for 10 min. or until it has doubled in size.

2. Dice the onion and carrot in small pieces, little cubes work well.

3. Cover the bottom of the pan with a tablespoon of oil. Add the minced beef, mix until it becomes slightly brown. Add salt, cumin, onion and white pepper.  Add carrots and mix until it becomes softer, then add about 3 tablespoons of water (this makes the filling moist and nice.) Add sugar and white cooked rice, mix. 

4. Meanwhile, heat the oil for frying the Sambusa.

5. Prepare a tablespoon of flour in case of the dough sticks to the table. Halve the dough. Roll a piece into a thick, long strip. Cut it into smaller balls (each ball is slightly smaller than a walnut). Press each ball into a flat, round piece. Sprinkle flour over the table and little pieces. Use the rolling pin to roll out each piece (the edges are thinner than the center of the piece, so when you seal it, the edges will not become too thick) 

6. To wrap: Place a tablespoon of filling on the dough. Fold it from the middle, let the edges stick to each other by firmly press the edges with your index finger and thumb. Pick the beginning of the edge, fold it over to make a triangle form, seal it. Pick the next section right next to the first one, fold it over and seal it. Continue to do this all the way around the edge of the empanada crust. See the pictures down below and the video here.

7. To fry the Samborsa: Heat the oil thoroughly in a deep pan over medium-high heat (the oil is hot when you see light smoke from the surface of the oil.

Another way to check this is by sticking wooden sticks in the oil. It bubbles hard, it’s too hot.) Turn off the fire and let the oil cool down. Approximately 2-3 min. Otherwise, the Sambusa will burn in the hot oil. (To check the right temperature for frying them: put in the wooden chopsticks again and if it has even, light and small bubbles, like this the oil is ready for frying.) Now turn on the smallest fire to keep the oil hot. Gently insert 3-4 empanadas into the pan. Fry evenly on each side for about 2min, a total  3-4min. until you get golden brown beautiful cute Sambusa! Repeat with the rest. Cover up the fried pieces with a lid so they don't become cold. 

8. Serve: Hot/warm on a big plate. Everyone can use their own small plate, eat with hand or chopsticks (you can use a fork and knife.) Bon appétit!",
                'difficulty_level' =>"Chanllenging",
                'image'=>"https://images.squarespace-cdn.com/content/v1/5dbed7c49598ba519f1f8ae0/1612450900201-O7IAD25SNT5VFQ4G7NH6/uyghur+food+Uyghur+Samborsa-6.jpg?format=1500w",
            ],
            
            [
                'category_id' => 3 ,
                'title' =>"Vermicelli Beef Meatball Soup",
                'description' =>"Like the title says , this soup is made from meatballs, vermicelli, and combined with fresh vegetables such as oyster mushroom, tomatoes, fresh baby spinach, tofu, herbs and spices. ",
                'cooking_time' =>"30 min",
                'preparation_time' =>"15",
                'instruction' =>"To make the meatball: Add the meatball ingredients to a mixing bowl. With clean hands, mix everything up well. Let it marinate for 15 minutes. (For better flavour, let it marinate for 3-8 hours) Then, pick one walnut size piece of meat, press the meat between your palms firmly, roll it into meatballs. 

Meanwhile, boil the vermicelli in water for 5 minutes. Then wash it in cold water for a second, drain.

Frying the meatballs: Heat up the oil thoroughly in a deep pan over medium-high heat (the oil is hot when you see light smoke from the surface of oil and when you put wooden sticks in the oil, it bubbles hard.) Turn off the fire and let the oil cool down a bit. Approximately 2-3 min, otherwise the meatballs will burn in the hot oil. To check the right temperature for frying the meatballs: put in the wooden chopsticks again and if it has even, light and small bubbles, the oil is ready for frying. Now, turn on the small fire to keep the oil hot. Gently insert the meatballs into the pan. Fry them evenly, for about 3-5 min. until the outsides are browned. Repeat with the rest. When you’re done, halve each one as desired. (It’s fine if the inside is not thoroughly fried, it will cook in the soup) 

Prepare boiling water for the soup. Add the meatballs and chopped tomato into the pan, stir, let it boil for 5 minutes at small-medium heat. Then add the rest of the ingredients, mix all the ingredients carefully. Place the hot soup in a deep bowl, tear some fresh baby spinach on the top of the soup. Yummmmmmmmm, it’s ready!!!",
                'difficulty_level' =>"Easy",
                'image'=>"https://images.squarespace-cdn.com/content/v1/5dbed7c49598ba519f1f8ae0/1597790306251-V37TAUAE7CJUX5Y0S126/uyghur+food+vermicelli+beef+meatball+soup?format=2500w",
            ],

            [
                'category_id' => 3 ,
                'title' =>"Tortellini: Chöchure",
                'description' =>"It's a sort of filled Pasta or Tortellini in lamb broth.",
                'cooking_time' =>"30 min",
                'preparation_time' =>"40 min",
                'instruction' =>"1. Mix the dough ingredients in a mixing bowl, knead them to make a smooth dough (I made a blogpost about How to Make Dough) cover with a damp towel or plastic wrap and set aside in room temperature, for 15- 20 min.

2. To make the filling: add the cut lamb, finely chopped onion, cumin, black pepper and salt to a new mixing bowl. Mix all the ingredients by grabbing them with your hand. 

3. To make the wrappers: When the dough is rested, sprinkle enough extra flour on the working surface and on the dough so the dough doesn’t stick to the rollingpin. Use a rolling pin to roll out the dough and make an even, smooth and thin dough. (the thickness should be about 2-3 millimeter thick) Sprinkle more flour if you notice the dough starts to stick again. 

4.Roll the dough onto the rollingpin, lift it about 10cm from the working surface and losen the beginning to fold the dough, about 5cm wide. (see the image, left below)  

5. Cut the folded dough into square pieces. Unfolding the square pieces into strips, (begin with the middle one, that is the longest one) to aline the front ends of the strips from long to short. Cut the alined strips into squares. (Collect the pieces that are not square and repeat square making process from the beginning or cut them into thin strips) Stacking all square pieces together, cover it with dry clean dish towel.(see the image, above middle and right) 

6. To wrap: Put a tea spoon of filing on the middle of each dough square (see the image A), fold it over from the middle to make rectangle form and press the edges together with your thumb and index fingers to seal (wet the edges with few drops of water if the wrappers are too dry) 

7. Fold up the long sealed edge, fold it around like image B. and pinch the inner sides together to seal like image C and form your Chochure like image D. Put them on a floured workingsurface so they don’t stick to the table. Repeat these steps with all dough pieces.

8. To cook: Use about 2 liter water (add salt if it’s needed). Add any left over filling in the pan, let it boil. Add Chochure and Cook for about five to six minutes, or until all are floating at the top.

9. Serve the Chochure in the soup bowl with the soup and topped with a sprinkle of finely chopped Coriander (Cilantro)." ,
                'difficulty_level' =>"Challenging",
                'image'=>"https://images.squarespace-cdn.com/content/v1/5dbed7c49598ba519f1f8ae0/1597777248027-WN7QGATA2L0U5Z5I9T9H/uyghur+food+chopped+chuchure-9.jpg?format=1500w",
            ],

            [
                'category_id' => 3 ,
                'title' =>"Meat Bread:Gosh-naan",
                'description' =>"This hot, flavourful, incredibly delicious, hand-made gosh-naan is the best meat bread!",
                'cooking_time' =>"1 hr",
                'preparation_time' =>"1 hr",
                'instruction' =>"Mix the dough ingredients in a mixing bowl, knead them to make a smooth dough. Cover it with a damp towel or plastic wrap and set it aside in room temperature to rise for 2 to 4 hours, or until it has doubled in size. 

Once the dough has risen, remove it from the bowl, adding additional flour if sticky. Lay it onto a floured surface. Divide into four even pieces. Lightly roll each piece into a round ball. Cover them with a dry towel and let them rest, for 15 min.

To make the filling: Cut the lamb into small pieces. Finely chop up the onion. Add them to a bowl together with, the salt, cumin, black pepper, and oil. Mix them very gently by hand. Set aside. 

Take two pieces of dough (one is for the bottom and the other one is for the top), Lay them onto a floured surface, and roll each piece out into a circle, about 2-3 millimeters thick. Roll the edges slightly thinner, a thin edge prevents the dough from being thick when you close the open edges. 

Meanwhile, heat up the oil over medium-high heat.

To make the Gosh-naan: spread the filling carefully and evenly on the bottom piece of dough, keep the edges free. Cover the bottom part with the top part and line up the edges and press them together with your fingers
to seal the dough. Just before you close the circle make sure to press out all the air. We are going to make a braided Edge: start at any point on the edge, use your thumb and the first finger to pinch, fold and press to seal a small piece of the dough along the entire circle. Repeat right next to the previous fold. Continuing all the way around the edge. Don't worry if this step doesn’t go exactly as you want. The good news is that even weird looking Gosh-naan taste amazing :) 

To fry the Gosh-naan: Gently place it in the hot pan. When it begins to bubble, reduce the heat to low, or else the Gosh-naan can burn. After about 8 min on one side carefully flip the naan over with a spatula. Cook the other side for about the same time until it gets golden brown.

When it's well fried, put the finished Gosh-naan on a plate, cover it with a lid, so it stays warm, continue frying the next Gosh-naan.

Serve: served on a plate and sliced in pointy pizza like slices, best if enjoyed immediately.

",
                'difficulty_level' =>"Medium",
                'image'=>"https://images.squarespace-cdn.com/content/v1/5dbed7c49598ba519f1f8ae0/1596453493821-OMZGS9RCHJZTQUGPLX5X/uyghur+food+goshnaan.jpg?format=1500w",
            ],


            [
                'category_id' => 3 ,
                'title' =>"Bazaar-Naan",
                'description' =>"Uyghur bread, Naan, also spelled as Nunn or Nane, is the ultimate important daily food in Uyghur people's lives, and it’s one of the most famous street foods as well. ",
                'cooking_time' =>"25 min.",
                'preparation_time' =>"25 min",
                'instruction' =>"Add the flour, yogurt, baking soda, salt and yeast to a mixing bowl. knead them to make the dough. If the dough is too sticky, you could add more flour. Cover with a damp towel or plastic wrap and set it in room temperature for 10 min. 

To prepare the topping: Press the finely chopped onion to make it juicy, plate it on a flat plate, diameter of 25cm. (we will use this in a second) Now heat the skillet over medium heat and grill the white sesame. They are done when brown. Add them to the onion on the plate, then add just enough water to make a moist topping and mix the sesame and onion. Spread the topping flat and even on the plate, so when you dip the top of the naan dough later, it sticks evenly to the naan. 

 When the dough is rested, divide it into 5 pieces. (this depending of the size of your oven, my oven is not too big, so I divided it into 5 pieces, you could made 3 bigger one’s of course)

Roll them into balls. (see picture above, left)

Press the dough to make it flat, About 3 cm thick. Press the middle 2-3cm from the side to make the middle thinner than the edges. Leave the edges round and thicker than the middle and stretch it to make a bigger naan. Make the desired thickness. 

Use an Uyghur naan stamp, چەككۈچ Check-kush for on the middle of naan to make a beautiful signature pattern. (If you don't have a Check-kush, you can make one for yourself:  use a bunch of toothpick’s and tie them together.This you can use as a stamp )

Apply the moist topping on the stamp side of the naan (the top).

Bake them in the preheated oven at 200 degrees for 11-15 min. Bake them light/golden brown.   

When the nice smelling naan are ready, coat the top of the naan with a light layer of oil as desire.

Serve: best if enjoyed immediately because they are still warm. Serve it with tea, Melk Tea, Soup, stew or nuts, etc.

Preheat the oven at 200 degrees for 5 min. (Leave the oven tray in the oven, preheat it too.)",

                'difficulty_level' =>"Mediun",
                'image'=>"https://images.squarespace-cdn.com/content/v1/5dbed7c49598ba519f1f8ae0/1597329150092-0KA6HZIUFA5V8EJMA10N/uyghur+food+bazaarnaan-6.jpg?format=1500w",
            ],


        ];

        foreach($recipes as $recipe) {
            Recipe::create([
                'category_id'=>$recipe['category_id'],
                'title'=>$recipe['title'],
                'description'=>$recipe['description'],
                'cooking_time'=>$recipe['cooking_time'],
                'preparation_time'=>$recipe['preparation_time'],
                'instruction'=>$recipe['instruction'],
                'difficulty_level'=>$recipe['difficulty_level'],
                'image'=>$recipe['image'],
            ]);
        }
    }
}
