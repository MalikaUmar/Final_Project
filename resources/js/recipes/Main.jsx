import React from "react";
import { BrowserRouter, Routes, Route } from "react-router-dom";

import App from "./App";
import InsertNewRecipe from "./InsertNewRecipe";

function Main() {
    return (
        <div>
            <App />

            <BrowserRouter>
                Main

                <Routes>
                    <Route path="/add-recipe" element={<InsertNewRecipe />} />
                </Routes>
            </BrowserRouter>
        </div>


    )
}

export default Main;
