import React from "react";
import IndianCusine from "./IndianCusine";
import UyghurCuisine from "./UyghurCuisine";
import Register from "./Register";
import { BrowserRouter,Route,Routes } from "react-router-dom";
import Login from "./Login.Jsx";
import UserContext from "./UserContext";
import FavouriteContext from "./FavouriteContext";
import { useState } from "react";
import { useEffect } from "react";
import Favourites from "./Favourites";
import Homepage from "./Homepage";


import SerbianCusine from "./SebianCusine";
import SearchFromIgredinents from "./SearchFromIgredinents";

function App() {
    const [user, setUser] = useState(null)
    const[active,setActive] = useState(false) // state to display popwindow when adding recipes to favourites
    const[userActive,setUserActive] = useState(true)
    
    const getUser = async () => {
        const response = await fetch('/api/user', {
            headers: {
                'Accept': 'application/json'
            }
        });

        if(response.status == 200) {
            const data = await response.json();
            setUser(data)   
        } 
    }


const additemsToFavourites= async(recipe_id)=>{
    const response = await fetch(`http://www.recipes.test/api/addToFavourites/${recipe_id}/${user.id}`);
    const data = await response.json();
    console.log(data); 
}


    useEffect(() => {
        getUser();
    }, [])


    return (
        <>
            <IndianCusine />
            <UyghurCuisine />
        </>
    );
}

export default App;
