import React from "react";
import IndianCusine from "./IndianCusine";
import UyghurCuisine from "./UyghurCuisine";
import { BrowserRouter, ScrollRestoration } from "react-router-dom";
import OurRoutes from "./OurRoutes";
import ScrollToTop from "./ScrollToTop";

function App() {
    return (
        <div className="app">
            <BrowserRouter>
                <ScrollToTop />
                <OurRoutes />
            </BrowserRouter>
        </div>
    );
}

export default App;
