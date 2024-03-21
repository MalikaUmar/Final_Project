import React from "react";
import IndianCusine from "./IndianCusine";
import UyghurCuisine from "./UyghurCuisine";
import ScrollToTop from "./ScrollToTop";
import RecipeDetail from "./RecipeDetail";
import Register from "./Register";
import { BrowserRouter, Route, Routes } from "react-router-dom";
import Login from "./Login.Jsx";
import UserContext from "./UserContext";
import FavouriteContext from "./FavouriteContext";
import { useState } from "react";
import { useEffect } from "react";
import Favourites from "./Favourites";
import Homepage from "./Homepage";

function App() {
    const [user, setUser] = useState(null);
    const [active, setActive] = useState(false); // state to display popwindow when adding recipes to favourites
    const [userActive, setUserActive] = useState(true);

    const getUser = async () => {
        const response = await fetch("/api/user", {
            headers: {
                Accept: "application/json",
            },
        });

        if (response.status == 200) {
            const data = await response.json();
            setUser(data)   
        } 
    }


const additemsToFavourites= async(recipe_id)=>{
    const response = await fetch(`/api/addToFavourites/${recipe_id}/${user.id}`);
    const data = await response.json();
    console.log(data); 
}


    useEffect(() => {
        getUser();
    }, []);

    return (
        <>
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
                        </Routes>
                    </BrowserRouter>
                </FavouriteContext.Provider>
            </UserContext.Provider>
        </>
    );
}

export default App;
