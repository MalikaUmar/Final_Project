import React from "react";
import IndianCusine from "./IndianCusine";
import UyghurCuisine from "./UyghurCuisine";
import SerbianCusine from "./SerbianCusine"; // Note: There's a typo in your component name - should it be "SerbianCuisine"?
import Favourites from "./Favourites";
import SearchFromIngredients from "./SearchFromIngredients"; // Note: There's a typo - should it be "SearchFromIngredients"?
import ScrollToTop from "./ScrollToTop";
import RecipeDetail from "./RecipeDetail";
import Register from "./Register";
import { BrowserRouter, Route, Routes } from "react-router-dom";
import Login from "./Login.Jsx";
import UserContext from "./UserContext";
import FavouriteContext from "./FavouriteContext";
import { useState } from "react";
import { useEffect } from "react";

import Home from "./Home";
import Footer from "./Footer";
import InsertNewRecipe from "./InsertNewRecipe";
import Search from "./Search";







// import SearchFromIgredinents from "./SearchFromIgredinents";

function App() {
    const [user, setUser] = useState(null);
    const [active, setActive] = useState(false); // state to display popwindow when adding recipes to favourites
    const [userActive, setUserActive] = useState(true);
    const [burgericon, setBurgericon] = useState(false);

    const getUser = async () => {
        const response = await fetch("/api/user", {
            headers: {
                Accept: "application/json",
            },
        });

        if (response.status == 200) {
            const data = await response.json();
            setUser(data)
        } else {
            setUser(null)
        }
    }


    const additemsToFavourites = async (recipe_id) => {
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
                        setBurgericon,
                        burgericon
                    }}
                >
                    <BrowserRouter>
                        <ScrollToTop />
                        <Routes>

                            {/* <Route path="/" element={<Homepage />} /> */}
                            <Route path="/" element={<Home />} />
                            <Route path="/register" element={<Register />} />
                            <Route path="/login" element={<Login />} />
                            <Route path="/indian" element={<IndianCusine />} />
                            <Route path="/uyghur-cuisine" element={<UyghurCuisine />} />
                            <Route path="/cuisine/:id" element={<RecipeDetail />} />
                            <Route path="/favourites" element={<Favourites />} />
                            <Route path="/search" element={<SearchFromIngredients />} />
                            <Route path="/serbian" element={<SerbianCusine />} />
                            <Route path="/add-recipe" element={<InsertNewRecipe />} />
                            <Route path="/simpleSearch/:id" element={<Search />} />
                            {/* <Route
                                path="/search"
                                element={<SearchFromIngredients />}
                            /> */}

                        </Routes>
                    </BrowserRouter>
                </FavouriteContext.Provider>
            </UserContext.Provider>
            <Footer />



        </>
    );
}

export default App;
