import { useEffect, useState } from "react";
import "./InsertNewRecipe.scss";
import "./IndianCusine";


export default function Search() {
    const [recipes, setRecipes] = useState([]);
    // const [ingredient, setIngredient] = useState([]);
    const [searchItem, setSearchItem] = useState('');

    const handleChange = async (event) => {
        setSearchItem(event.target.value);
    }

    const fetchResults = async () => {
        if (searchItem && searchItem != '') {
            const response = await fetch('/api/recipes/search?search=' + searchItem)
            const data = await response.json();
            console.log(data)
            setRecipes(data)

        }
    }

    return (
        <div className="search">
            <input
                type="text"
                name="search"
                placeholder="Search"
                value={searchItem}
                onChange={handleChange}
            />
            <button onClick={fetchResults}>Search</button>


            <div className="searchResults">
                {
                    recipes.map((recipe) => {
                        return recipes ?
                            <>
                                <br></br><p><strong />{recipe.title}</p>
                                <p> <img src={recipe.image} />  </p>
                                <p> {recipe.description}</p> <p>{recipe.instruction}</p>
                            </>
                            : 'Sorry, we could not find anything'
                    })
                }

            </div>

        </div>
    )

}
