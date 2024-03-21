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
        <UserContext.Provider value={{user,getUser}}>
            <FavouriteContext.Provider value={{additemsToFavourites,active,setActive,userActive,setUserActive}}>

            <BrowserRouter>
                <Routes>
                    <Route path="/register" element={<Register/>} />
                    <Route path="/login" element={<Login/>} />
                    <Route path="/indian" element={<IndianCusine/>} />
                    <Route path="/uyghur" element={<UyghurCuisine/>} />
                    <Route path="/favourites" element={<Favourites/>} />
                </Routes>   
            </BrowserRouter>
            </FavouriteContext.Provider>

        </UserContext.Provider>  

        </>
    );
}

export default App;
