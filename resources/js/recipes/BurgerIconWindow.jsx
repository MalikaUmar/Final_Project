import React from "react";
import "./BurgerIconWindow.scss";
import UserContext from "./UserContext";
import { useContext } from "react";
import { Link } from "react-router-dom";

function BurgerIconWindow({ logout, setBurgericon }) {
    const { user } = useContext(UserContext);
    return (
        <div className="burgerIcon-container">
            <div
                className="close-burger-icon"
                onClick={() => {
                    setBurgericon(false);
                }}
            >
                &times;
            </div>
            <Link className="burgerIcon-link-link" to={"/"}>
                <div
                    className="burgerIcon-link"
                    onClick={() => {
                        setBurgericon(false);
                    }}
                >
                    Home
                </div>
            </Link>
            <div
                className="burgerIcon-link"
                onClick={() => {
                    setBurgericon(false);
                }}
            >
                My Profile
            </div>

            <Link className="burgerIcon-link-link" to={"/favourites"}>
                <div
                    className="burgerIcon-link"
                    onClick={() => {
                        setBurgericon(false);
                    }}
                >
                    your Favourites
                </div>
            </Link>

            <Link className="burgerIcon-link-link" to={"/add-recipe"}>
                <div
                    className="burgerIcon-link"
                    onClick={() => {
                        setBurgericon(false);
                    }}
                >
                    Add a Recipe
                </div>
            </Link>

            <Link className="burgerIcon-link-link" to={"/search"}>
                <div
                    className="burgerIcon-link"
                    onClick={() => {
                        setBurgericon(false);
                    }}
                >
                    search By ingredients
                </div>
            </Link>

            <div
                className="burgerIcon-link"
                onClick={() => {
                    setBurgericon(false);
                }}
            >
                Help
            </div>
            {user ? (
                <div
                    className="burgerIcon-link"
                    onClick={(event) => {
                        logout(event);
                        setBurgericon(false);
                    }}
                >
                    Logout
                </div>
            ) : (
                <Link className="burgerIcon-link-link" to={"/login"}>
                    <div
                        className="burgerIcon-link"
                        onClick={() => {
                            setBurgericon(false);
                        }}
                    >
                        Login
                    </div>
                </Link>
            )}
        </div>
    );
}

export default BurgerIconWindow;
