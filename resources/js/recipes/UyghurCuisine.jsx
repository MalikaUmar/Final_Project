import { useEffect, useState } from "react";
import "./UyghurCuisine.scss";

export default function UyghurCuisine() {
    const [uyRecipes, setUyRecipes] = useState([]);

    const loadRecipes = async () => {
        const response = await fetch("http://www.recipes.test/api/uyghur-cuisine");
        const data = await response.json();

        setUyRecipes(data);
    };

    useEffect(() => {
        loadRecipes();
    }, []);

    return (
        <div className="container">
            <div className="img_box">
                <img
                    src="/img/uyghurcuisine-bg.jpeg"
                    alt="uybg"
                    className="uyghur_img"
                />
            </div>
            <h1 className="uyghur_title">Uyghur Cuisine</h1>
            <div className="menu_container">
                {uyRecipes.map((uyRecipe, i) => {
                    return (
                        <div className="menu_item" key={i}>
                            <img src={uyRecipe.image} className="menu_img" />
                            <div className="menu_content">
                                <p className="category">
                                    {uyRecipe.difficulty_level}
                                </p>
                                <h2 className="menu_title">{uyRecipe.title}</h2>
                                <p className="rating">
                                    {uyRecipe.cooking_time}
                                </p>
                            </div>
                        </div>
                    );
                })}
                <div className="menu_item"></div>
            </div>
        </div>
    );
}
