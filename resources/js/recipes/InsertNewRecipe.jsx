import { useEffect, useState } from "react";
import "./InsertNewRecipe.scss";
import "./IndianCusine";
import Select from 'react-select';
import React from 'react';
import Header from "./Header";

export default function InsertNewRecipe() {
    const [data, setData] = useState([]);
    // add categories state
    const [categories, setCategories] = useState([]);
    const [images, setImages] = useState([]);
    const [ingredients, setIngredients] = useState([]);
    const [selectedIngredients, setSelectedIngredients] = useState({
        data: [
            {
                ingredient_id: 0,
                ingredient_measure: '',
            }
        ]
    })

    const [recipe, setRecipe] = useState({
        title: '',
        description: '',
        cooking_time: '',
        preparation_time: '',
        instruction: '',
        difficulty_level: '',
        category_id: '',
        ingredients: [],
        image: null
    });

    const handleImageInput = async (event) => {
        let images = event.target.files
        setRecipe(previous_recipe => {
            return ({
                ...previous_recipe,
                image: images
            });
        });
    };


    useEffect(() => {
        setImages();
    }, []);


    //get ingridient table 
    const handleRecipeChange = (event) => {

        setRecipe(previous_recipe => {
            return ({
                ...previous_recipe,
                [event.target.name]: event.target.value
            });
        });
    }

    // const handleIngredientChange = (event) => {

    //     setIngredient(previous_ingredient => {
    //         return ({
    //             ...previous_ingredient,
    //             [event.target.name]: event.target.value
    //         });
    //     });
    // }

    // const handleSelectChange = (value, { action, option }) => {
    //     if (action === 'select-option') {
    //         setRecipe(previous_ingredient => {
    //             return ({
    //                 ...previous_ingredient,
    //                 ingredients: value
    //             });
    //         });
    //     }
    // }
    const handleSelectedIngredientChange = (event, index) => {
        let previouslySelected = selectedIngredients.data;
        if (previouslySelected.hasOwnProperty(index)) {
            previouslySelected[index][event.target.name] = event.target.value
        } else {
            let newIngredient = {
                id: index,
                measure: ''
            }

            previouslySelected = [
                ...previouslySelected,
                newIngredient
            ]
        }

        setSelectedIngredients({ data: previouslySelected });
    }


    const handleSubmit = async (e) => {
        e.preventDefault();
        try {
            const config = {
                headers: {
                    'content-type': 'multipart/form-data'
                }
            }
            let response = await axios.post('/api/recipe/add', recipe, config)

            alert('A recipe was submitted');
        } catch (error) {
            console.log(error)
        }
    };
    // fetch categories function
    const getCategories = async () => {
        const response = await fetch("/api/recipe/categories");
        const data = await response.json();
        console.log(data);
        setCategories(data);
    };

    const getIngredients = async () => {
        const response = await fetch("/api/recipe/ingredients");
        const data = await response.json();
        console.log(data);
        setIngredients(data);

    };

    useEffect(() => {
        getCategories();
        getIngredients();
    }, []);

    useEffect(() => {
        setRecipe(previous_recipe => {
            return ({
                ...previous_recipe,
                ingredients: selectedIngredients.data
            });
        });
    }, [selectedIngredients]);

    // this function added to use effect


    return (
        <>
        <Header/>
        <div className="Insert-container">
            {console.log(recipe)}
            <div className="main-heading">
                <h1>Add a Recipe</h1> 
            </div>
            {/* <div className="image-container">
                <img
                    className="category-image"
                    src="https://marketplace.canva.com/NqqlA/MAFmARNqqlA/1/s2/canva-indian-food-MAFmARNqqlA.jpg"
                    alt=""
                />
            </div> */}
            <h2 className="container-fieldsList_heading">We are so exited to have your recipe on our website</h2>
            <p> Here is the form that you can use to add your favorite meal. Please fill out all the fields.</p>


            <div className="container-form">
                <form action='' method='post' onSubmit={handleSubmit} className="formAdd-Recipes">
                    <label className="fields">
                        Title:
                        <input className="fields-to-fill" type="text" name="title" value={recipe.title} onChange={handleRecipeChange} />

                    </label>

                    {/* Select input with options from fetched categories */}

                    <label className="fields">
                        Select a cuisine:
                        <select className="fields-to-fill" name="category_id" value={recipe.category_id} onChange={handleRecipeChange}>
                            <option value="">Select</option>
                            {
                                categories.map(category => {
                                    return <option value={category.id}>{category.name}</option>
                                })
                            }
                        </select>
                    </label>


                    <div className="addIngredientContainer">

                    <label className="fields">
                        Add an ingredient:
                        {
                            selectedIngredients.data.map((selectedIngredient, key) => {

                                return < div key={key}>
                                    <select className="fields-to-fill_select" name="ingredient_id" value={selectedIngredient.ingredient_id} onChange={(e) => handleSelectedIngredientChange(e, key)}>
                                        <option value="">Select</option>
                                        {
                                            ingredients.map((ingredient, ingredient_key) => {
                                                return <option key={ingredient_key} value={ingredient.id}>{ingredient.name}</option>
                                            })
                                        }
                                    </select>
                                    <input className="fields-to-fill_select" type="text" name="ingredient_measure" value={selectedIngredient.ingredient_measure} onChange={(e) => handleSelectedIngredientChange(e, key)} placeholder="measure" />
                                </div>

                            })
                        }
                        <button className="AddRecipes-button" onClick={(event) => {
                            event.preventDefault()
                            setSelectedIngredients({
                                data: [...selectedIngredients.data, {
                                    ingredient_id: 0,
                                    ingredient_measure: ''
                                }]
                            })
                        }}>Add another</button>
                    </label>
                    </div>


                    <label className="fields">
                        Description:
                        <textarea rows="5" cols="50" className="fields-to-fill" type="text" name="description" value={recipe.description} onChange={handleRecipeChange} />
                    </label>

                    <label className="fields">
                        Cooking time:
                        <input className="fields-to-fill" type="text" name="cooking_time" value={recipe.cooking_time} onChange={handleRecipeChange} />
                    </label>
                    <label className="fields">
                        Preparation time:
                        <input className="fields-to-fill" type="text" name="preparation_time" value={recipe.preparation_time} onChange={handleRecipeChange} />
                    </label>

                    <label className="fields">
                        Instruction:
                        <textarea rows="5" cols="50" className="fields-to-fill" type="text" name="instruction" value={recipe.instruction} onChange={handleRecipeChange} />
                    </label>
                    <label className="fields">
                        Difficulty level:
                        <input className="fields-to-fill" type="text" name="difficulty_level" value={recipe.difficulty_level} onChange={handleRecipeChange} />
                    </label>
                    <label className="fields">
                        Image:
                        <input className="fields-to-fill" type="file" name="image" onChange={handleImageInput} />
                    </label>
                    <input className="submit-button" type="submit" value="Submit" />
                </form>
            </div>
        </div>
        </>
    );
}