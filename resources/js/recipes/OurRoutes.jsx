import { Routes, Route } from "react-router";
import UyghurCuisine from "./UyghurCuisine";
import RecipeDetail from "./RecipeDetail";

export default function OurRoutes() {
    return (
        <div className="routes">
            <Routes>
                <Route path="/" element={<UyghurCuisine />} />
                <Route path="/uyghur-cuisine" element={<UyghurCuisine />} />
                <Route path="/cuisine/:id" element={<RecipeDetail />} />
            </Routes>
        </div>
    );
}
