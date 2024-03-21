import { useEffect, useState } from "react";
import React from 'react'
import Select from 'react-select';

export default function(){
    const [ingredients, setIngredients] = useState();
    const [selected, setSelected] = useState([])
    
    const fetchdata = async() =>
    {
        const response = await fetch('http://www.laravel.final/api/search-meal');
        const data = await response.json();
        
        setIngredients(data.map(ingredient=>({ value: ingredient.id, label: ingredient.name })));
        // console.log(data);
    }
    useEffect(() => {
        fetchdata()
    }, []);
    
    const handleSelectChange = (value, { action, option }) => {
        // console.log(value);
        // console.log(option);
        if (action === 'select-option') {
                    
                    setSelected(value);
                    console.log(value)
                }


    }

    const handleSubmit = async () => {
        const selectedIds = selected.map(option => option.value).join(',');
        // console.log(selectedIds);
        
        // s
        const response = await fetch(`http://www.laravel.final/api/recipes/by-ingredients?ingredients=${selectedIds}`);
        const data = await response.json();
        console.log(data)
        
        // console.log('hello')
      };

    // useEffect(() => {
    //     handleSubmit();
    // }, [selected])

    return(
        <>
        <Select 
            options = {ingredients} 
            isMulti 
            onChange={ handleSelectChange }
        />
       <button onClick={handleSubmit}>Submit</button>
        </>
    )

}