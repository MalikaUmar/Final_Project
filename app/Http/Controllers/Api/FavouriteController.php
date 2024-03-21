<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Favorite;
use App\Models\Recipe;

class FavouriteController extends Controller
{
    public function index($recipe_id,$user_id)
    {
        if(Favorite::where('user_id',$user_id)->where('recipe_id',$recipe_id)->first()){
            return response()->json('item already saved to favourites');
        }

      $favourites = new Favorite;

      $favourites->recipe_id = $recipe_id;
      $favourites->user_id = $user_id;
      $favourites->save();

      return response()->json('item saved to favourites');

       
    }




    public function show($user_id)
    {
        $recipeIds = Favorite::where('user_id',$user_id)->get('recipe_id')->toArray();
        $values = collect($recipeIds)->flatten()->toArray();  
        $items=[];

        foreach($values as $value){
            
            $items = Recipe::whereIn('id',$values)->get();  
        }
    
       
        return response()->json($items);
        
    }

    public function remove($user_id,$recipe_id)
    {
        $remove = Favorite::where('user_id',$user_id)->where('recipe_id',$recipe_id)->first();
        $remove->delete();
        return response()->json('deleted');
        
    }
}
