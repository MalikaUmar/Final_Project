import "./IndianCusine.scss";
import { useEffect, useState } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faHeart } from "@fortawesome/free-solid-svg-icons";
import { Link } from "react-router-dom";
import FavouriteContext from "./FavouriteContext";
import { useContext } from "react";
import Popupwindow from "./Popupwindow";
import UserContext from "./UserContext";
import UserStatusPoppupWindow from "./UserStatusPoppupWindow";

function IndianCusine() {
    const [cusine, setCusine] = useState([]);

    const { user } = useContext(UserContext);
    const {
        additemsToFavourites,
        active,
        setActive,
        userActive,
        setUserActive,
    } = useContext(FavouriteContext);

    const loadmissions = async () => {

        const response = await fetch('/api/indian-cusine');
        const data = await response.json();
        setCusine(data);
        console.log(data);
    };

    useEffect(() => {
        loadmissions();
    }, []);

    return (
        <>
            {active == true ? <Popupwindow /> : ""}

            {userActive == false ? <UserStatusPoppupWindow /> : ""}

            <div className="IndianRecepie-container">
                <div className="container-heading">
                    <h1>Explore Indian Recipes</h1>
                </div>
                <div className="category-image-container">
                    <img
                        className="category-image"
                        src="https://marketplace.canva.com/NqqlA/MAFmARNqqlA/1/s2/canva-indian-food-MAFmARNqqlA.jpg"
                        alt=""
                    />
                </div>
                <h1 className="container-cardsList_heading">
                    Explore Indian Recipes
                </h1>
                <div className="container-cardsList">
                    {cusine
                        ? cusine.map((item) => {
                            return (
                                <>
                                    <div className="cards">
                                        <div
                                            className="heart-iconDiv"
                                            onClick={() => {
                                                additemsToFavourites(item.id),
                                                    user
                                                        ? setActive(true)
                                                        : setUserActive(
                                                            false
                                                        );
                                            }}
                                        >
                                            <FontAwesomeIcon
                                                icon={faHeart}
                                                className="heart-icon"
                                            />
                                        </div>

                                        <div className="cards_imageContainer">
                                            <img src={item.image} alt="" />
                                        </div>
                                        <div className="cards_content">
                                            <p>{item.title}</p>
                                            <h2>{item.title}</h2>
                                            <p>{item.preparation_time}</p>
                                        </div>
                                    </div>
                                </>
                            );
                        })
                        : ""}
                </div>
            </div>
        </>
    );
}

export default IndianCusine;
