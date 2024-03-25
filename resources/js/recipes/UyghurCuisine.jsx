import { useEffect, useState } from "react";
import "./UyghurCuisine.scss";
import { Link } from "react-router-dom";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faHeart } from "@fortawesome/free-solid-svg-icons";
import { useContext } from "react";
import UserContext from "./UserContext";
import FavouriteContext from "./FavouriteContext";
import Popupwindow from "./Popupwindow";
import UserStatusPoppupWindow from "./UserStatusPoppupWindow";

export default function UyghurCuisine() {
    const [uyRecipes, setUyRecipes] = useState([]);
    const { user } = useContext(UserContext);
    const {
        additemsToFavourites,
        active,
        setActive,
        userActive,
        setUserActive,
    } = useContext(FavouriteContext);

    const loadRecipes = async () => {
        const response = await fetch("/api/uyghur-cuisine");
        const data = await response.json();

        setUyRecipes(data);
    };

    useEffect(() => {
        loadRecipes();
    }, []);

    return (
        <>
            {active == true ? <Popupwindow /> : ""}

            {userActive == false ? <UserStatusPoppupWindow /> : ""}

            <div className="ugcontainer">
                <div className="ugimg_box">
                    <img
                        src="/img/uyghurcuisine-bg.jpeg"
                        alt="uybg"
                        className="uyghur_img"
                    />
                </div>
                <div className="title_box">
                    <h1 className="uyghur_title">Uyghur Cuisine</h1>
                </div>
                <div className="ugmenu_container">
                    {uyRecipes.map((uyRecipe) => {
                        return (
                            <>
                                <div className="ugmenu_item">
                                    <div
                                        className="ugheart-iconDiv"
                                        onClick={() => {
                                            additemsToFavourites(uyRecipe.id),
                                                user
                                                    ? setActive(true)
                                                    : setUserActive(false);
                                        }}
                                    >
                                        <FontAwesomeIcon
                                            icon={faHeart}
                                            className="ugheart-icon"
                                        />
                                    </div>
                                    <Link to={`/cuisine/${uyRecipe.id}`}>
                                        <img
                                            src={uyRecipe.image}
                                            className="ugmenu_img"
                                        />
                                    </Link>
                                    <div className="ugmenu_content">
                                        <p className="category">
                                            {uyRecipe.difficulty_level}
                                        </p>
                                        <h2 className="ugmenu_title">
                                            {uyRecipe.title}
                                        </h2>
                                        <p className="ugcooking_time">
                                            {uyRecipe.cooking_time}
                                        </p>
                                    </div>
                                </div>
                            </>
                        );
                    })}
                </div>
            </div>
        </>
    );
}
