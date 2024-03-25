import React, { useState, useEffect } from "react";
import { BrowserRouter, Route, Routes } from "react-router-dom";
import Homepage from "./Homepage";
import Register from "./Register";
import Login from "./Login";
import IndianCusine from "./IndianCusine";
import UyghurCuisine from "./UyghurCuisine";
import SerbianCusine from "./SerbianCusine"; // Note: There's a typo in your component name - should it be "SerbianCuisine"?
import Favourites from "./Favourites";
import SearchFromIgredinents from "./SearchFromIngredients"; // Note: There's a typo - should it be "SearchFromIngredients"?
import RecipeDetail from "./RecipeDetail";
import ScrollToTop from "./ScrollToTop";
import UserContext from "./UserContext";
import FavouriteContext from "./FavouriteContext";
import { useState } from "react";
import { useEffect } from "react";
import Favourites from "./Favourites";
import Homepage from "./Homepage";
import InsertNewRecipe from "./InsertNewRecipe";
import SerbianCusine from "./SebianCusine";
import SearchFromIgredinents from "./SearchFromIgredinents";

function App() {
    const [user, setUser] = useState(null);
    const [active, setActive] = useState(false);
    const [userActive, setUserActive] = useState(true);

    const getUser = async () => {
        const response = await fetch("/api/user", {
            headers: {
                Accept: "application/json",
            },
        });

        if (response.status === 200) {
            const data = await response.json();
            setUser(data);
        }
    };

    const additemsToFavourites = async (recipe_id) => {
        const response = await fetch(`/api/addToFavourites/${recipe_id}/${user.id}`);
        const data = await response.json();
        console.log(data);
    };

    useEffect(() => {
        getUser();
    }, []);

    return (
        <>
            <UserContext.Provider value={{user,getUser}}>
            <FavouriteContext.Provider value={{additemsToFavourites,active,setActive,userActive,setUserActive}}>

            <BrowserRouter>
                <Routes>
                    <Route path="/" element={<Homepage/>} />
                    <Route path="/register" element={<Register/>} />
                    <Route path="/login" element={<Login/>} />
                    <Route path="/indian" element={<IndianCusine/>} />
                    <Route path="/uyghur" element={<UyghurCuisine/>} />
                    <Route path="/favourites" element={<Favourites/>} />
                    <Route path="/search" element={<SearchFromIgredinents />} />
                </Routes>   
            </BrowserRouter>
            </FavouriteContext.Provider>

        </UserContext.Provider>  
            <UserContext.Provider value={{ user, getUser }}>
                <FavouriteContext.Provider
                    value={{
                        additemsToFavourites,
                        active,
                        setActive,
                        userActive,
                        setUserActive,
                    }}
                >
                    <BrowserRouter>
                        <ScrollToTop />
                        <Routes>
                            <Route path="/" element={<Homepage />} />
                            <Route path="/register" element={<Register />} />
                            <Route path="/login" element={<Login />} />
                            <Route path="/indian" element={<IndianCusine />} />
                            <Route
                                path="/uyghur-cuisine"
                                element={<UyghurCuisine />}
                            />
                            <Route
                                path="/cuisine/:id"
                                element={<RecipeDetail />}
                            />
                            <Route
                                path="/favourites"
                                element={<Favourites />}
                                
                            />
                              <Route
                                path="/add-recipe"
                                element={<InsertNewRecipe />}
                            />
                            <Route path="/serbian" element={<SerbianCusine />} /> 
                        </Routes>
                    </BrowserRouter>
                </FavouriteContext.Provider>
            </UserContext.Provider>
        </>
    );
}

export default App;