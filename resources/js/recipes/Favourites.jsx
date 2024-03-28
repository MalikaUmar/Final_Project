import "./Favourites.scss";
import UserContext from "./UserContext";
import { useContext, useEffect, useState } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faUser } from "@fortawesome/free-solid-svg-icons";
import { faMinus } from "@fortawesome/free-solid-svg-icons";
import { Link } from "react-router-dom";
import Header from "./Header";
import "./UyghurCuisine.scss";

function Favourites() {
    const [favourites, setFavourites] = useState([]);
    const { user } = useContext(UserContext);

    console.log(favourites);

    const displayFavourites = async () => {
        const response = await fetch(`/api/showFavourites/${user.id}`);
        const data = await response.json();
        setFavourites(data);
    };

    const removeRecipe = async (recipe_id) => {
        const response = await fetch(
            `/api/removeFavourites/${user.id}/${recipe_id}`
        );
        const data = await response.json();
        displayFavourites();
    };

    useEffect(() => {
        if (user) {
            displayFavourites();
        }
    }, [user]);

    return (
        <>
            <Header />
            {user ? (
                <div className="favourites-container">
                    <div className="favourites-container_heading">
                        <div className="favourites-container_heading-title">
                            <h1>All Saved Items</h1>
                            <p className="favourites-container_heading-tailor">
                                All your Favourite Content In One Place
                            </p>
                        </div>
                    </div>

                    <div className="favourites-container_list">
                        {favourites.length > 0 ? (
                            favourites.map((item) => {
                                return (
                                    <>
                                        <div className="card-favorites">
                                            <div
                                                className="card-remove"
                                                onClick={() => {
                                                    if (
                                                        window.confirm(
                                                            "Do you want to delete?"
                                                        )
                                                    ) {
                                                        removeRecipe(item.id);
                                                    }
                                                }}
                                            >
                                                <FontAwesomeIcon
                                                    className="card-remove_minusIcon"
                                                    icon={faMinus}
                                                />
                                            </div>
                                            <div className="favouritesContainer-imageContainer">
                                                <img
                                                    className="ugmenu_img"
                                                    src={item.image}
                                                    alt=""
                                                />
                                            </div>

                                            <div className="ugmenu_content">
                                                <p className="category">
                                                    {item.title}
                                                </p>
                                                <h2 className="ugmenu_title">
                                                    {item.title}
                                                </h2>
                                                <p className="ugcooking_time">
                                                    {item.cooking_time}
                                                </p>
                                            </div>
                                        </div>
                                    </>
                                );
                            })
                        ) : (
                            <div className="ifthereIs-noRecipes">
                                <h1>
                                    There is no saved Recipes in your Favourites{" "}
                                </h1>
                                <Link
                                    className="ifthereIs-noRecipes_links"
                                    to={"/"}
                                >
                                    Add your favourites
                                </Link>
                            </div>
                        )}
                    </div>
                </div>
            ) : (
                <div className="favouritsSecond-container">
                    <div className="favouritsSecond-container_image">
                        <img
                            className="favouritsSecond-container_image_image"
                            src="https://marketplace.canva.com/NqqlA/MAFmARNqqlA/1/s2/canva-indian-food-MAFmARNqqlA.jpg"
                            alt=""
                        />
                    </div>
                    <div className="favouritsSecond-container_content">
                        <h3>Login or Signup to see your Favourites Recipes</h3>
                        <Link
                            to={"/login"}
                            className="favouritsSecond-container_link"
                        >
                            Login
                        </Link>
                        <Link
                            to={"/register"}
                            className="favouritsSecond-container_link"
                        >
                            Signup
                        </Link>
                    </div>
                </div>
            )}
        </>
    );
}

export default Favourites;
