import { useEffect, useState } from "react";

export default function InsertNewRecipe() {

    const [recipe, setRecipe] = useState({
        title: '',
        description: '',
        cooking_time: '',
        preparation_time: '',
        instruction: '',
        difficulty_level: '',
        image: ''
    });

    const handleRecipeChange = (event) => {

        setRecipe(previous_recipe => {
            return ({
                ...previous_recipe,
                [event.target.name]: event.target.value
            });
        });
    }

    const handleSubmit = (e) => {
        e.preventDefault();
        alert('A recipe was submitted');
    }

    return (
        <form onSubmit={handleSubmit}>
            <label>
                Title:
                <input type="text" name="title" value={recipe.title} onChange={handleRecipeChange} />
            </label>
            <label>
                Description:
                <input type="text" name="description" value={recipe.description} onChange={handleRecipeChange} />
            </label>
            <label>
                Cooking time:
                <input type="number" name="cooking_time" value={recipe.cooking_time} onChange={handleRecipeChange} />
            </label>
            <label>
                Preparation time:
                <input type="number" name="preparation_time" value={recipe.preparation_time} onChange={handleRecipeChange} />
            </label>
            <label>
                Instruction:
                <input type="text" name="instruction" value={recipe.instruction} onChange={handleRecipeChange} />
            </label>
            <label>
                Difficulty level:
                <input type="number" name="difficulty_level" value={recipe.difficulty_level} onChange={handleRecipeChange} />
            </label>
            <label>
                Image:
                <input type="file" name="image" onChange={handleRecipeChange} />
            </label>
            <input type="submit" value="Submit" />
        </form>
    );
}
