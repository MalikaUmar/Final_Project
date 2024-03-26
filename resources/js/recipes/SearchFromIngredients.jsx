import { useEffect, useState } from "react";
import React from "react";
import Select from "react-select";
import "./SearchFromIngredients.scss";
// import chroma from 'chroma.js';

export default function SearchFromIngredients() {
    const [ingredients, setIngredients] = useState();
    const [selected, setSelected] = useState([]);
    const [meal, setMeal] = useState(null);
    

    const fetchdata = async () => {
        const response = await fetch("/api/search-meal");
        const data = await response.json();

        setIngredients(
            data.map((ingredient) => ({
                value: ingredient.id,
                label: ingredient.name,
            }))
        );
        console.log(data);
    };
    useEffect(() => {
        fetchdata();
    }, []);

    const handleSelectChange = (value, { action, option }) => {
        // console.log(value);
        // console.log(option);
        if (action === "select-option") {
            setSelected(value);
            
            console.log(value);
        }
    };

    const handleSubmit = async () => {
        if (selected.length === 0) {
            
            console.log("No ingredients selected. Please select at least one ingredient.");
            
            return; 
        }
    
        const selectedIds = selected.map((option) => option.value).join(",");
        console.log(selectedIds);
    
        
            const response = await fetch(`/api/recipes/by-ingredients?ingredients=${selectedIds}`);
            const data = await response.json();
            console.log(data);
            setMeal(data);
       
    }
    // useEffect(() => {
    //     handleSubmit();
    // }, [selected])

  

    // const missing items = selectd

    return (
        <main className="search_main">
            <Select
                className="search_select"
                options={ingredients}
                isMulti
                onChange={handleSelectChange}
            />
            <button className="search_button" onClick={handleSubmit}>
                Submit
            </button>

            {meal ? (
                <>
                    {" "}
                    <div className="search_meal">
                        <div>
                            <h1 className="search_headings">{meal.title}</h1>
                            <img
                                className="search_img"
                                src={meal.image}
                                alt="the photo of the meal you choused"
                            />
                            <h3>{meal.preparation_time}</h3>
                        </div>
                        <div>
                            <ul>
                                {meal.ingredients.map((ingredient, i) => (
                                    <li key={i}>
                                        {ingredient.name}:
                                        {ingredient.pivot.measure}
                                    </li>
                                ))}
                            </ul>
                        </div>
                    </div>
                    <div className="search_description">
                        <>
                            <h2 className="search_headings">Description</h2>
                            <p>{meal.description}</p>
                        </>

                        <>
                            <h2 className="search_headings">Instructions</h2>
                            <p>{meal.instruction}</p>{" "}
                        </>
                    </div>
                </>
            ) : (
                ""
            )}
        </main>
    );
}
