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
        setRecipe(previous_values => {
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
                <input type="text" value={recipe.title} onChange={handleRecipeChange} />
            </label>
            <label>
                Description:
                <input type="text" value={recipe.description} onChange={handleRecipeChange} />
            </label>
            <label>
                Cooking time:
                <input type="number" value={recipe.title} onChange={handleRecipeChange} />
            </label>
            <label>
                Preparation time:
                <input type="number" value={recipe.preparation_time} onChange={handleRecipeChange} />
            </label>
            <label>
                Instruction:
                <input type="text" value={recipe.instruction} onChange={handleRecipeChange} />
            </label>
            <label>
                Difficulty_level:
                <input type="number" value={recipe.difficulty_level} onChange={handleRecipeChange} />
            </label>
            <label>
                Image:
                <input type="file" onChange={handleRecipeChange} />
            </label>
            <input type="submit" value="Submit" />
        </form>
    );
}


//     <p>
//                 <button onClick={ recipe }>Submit</button>
//             </p>

// </form>

// }