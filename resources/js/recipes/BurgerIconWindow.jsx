import React from 'react'
import "./BurgerIconWindow.scss"
import UserContext from './UserContext';
import { useContext } from 'react';
import { Link } from 'react-router-dom';

function BurgerIconWindow({logout,setBurgericon}) {
    const { user } = useContext(UserContext);
  return (
   
        <div className="burgerIcon-container">
             <div className="close-burger-icon" onClick={()=>{setBurgericon(false)}}> 
             &times;
             </div>
            
            <div className="burgerIcon-link" onClick={()=>{setBurgericon(false)}}><Link className="burgerIcon-link-link" to={"/"}>Home</Link></div>
            <div className="burgerIcon-link" onClick={()=>{setBurgericon(false)}}>My Profile</div>
            <div className="burgerIcon-link" onClick={()=>{setBurgericon(false)}}><Link className="burgerIcon-link-link" to={"/favourites"}>your Favourites</Link></div>
            <div className="burgerIcon-link" onClick={()=>{setBurgericon(false)}}><Link className="burgerIcon-link-link" to={"/add-recipe"}>Add a Recipe</Link></div>
            <div className="burgerIcon-link" onClick={()=>{setBurgericon(false)}}><Link className="burgerIcon-link-link" to={"/search"}>search By ingredients</Link></div>
            <div className="burgerIcon-link" onClick={()=>{setBurgericon(false)}}>Help</div>
            {
                user ?
                <div className="burgerIcon-link" onClick={(event)=>{logout(event);setBurgericon(false)}}>Logout</div>  
                :
                <div className="burgerIcon-link" onClick={()=>{setBurgericon(false)}}><Link className="burgerIcon-link-link" to={"/login"}>Login</Link></div>
            }
             
        </div>
  )
}

export default BurgerIconWindow