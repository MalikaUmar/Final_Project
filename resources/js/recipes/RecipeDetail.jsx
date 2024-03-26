import { useEffect, useState } from "react";
import { useParams } from "react-router";
import "./RecipeDetail.scss";
import Comment from "./Comment";
import Rating from "./Rating";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faHeart } from "@fortawesome/free-solid-svg-icons";
import { useContext } from "react";
import UserContext from "./UserContext";
import FavouriteContext from "./FavouriteContext";
import Popupwindow from "./Popupwindow";
import UserStatusPoppupWindow from "./UserStatusPoppupWindow";
import Header from "./Header";

export default function RecipeDetail() {
    const [detailPage, setDetailPage] = useState([]);
    const [rating, setRating] = useState(null);

    const { id } = useParams();

    const { user } = useContext(UserContext);
    const {
        additemsToFavourites,
        active,
        setActive,
        userActive,
        setUserActive,
    } = useContext(FavouriteContext);

    const detailData = async () => {
        const response = await fetch(`/api/uyghur-cuisine/${id}`);
        const data = await response.json();
        console.log(data);

        setDetailPage(data);
    };

    useEffect(() => {
        detailData();
        // console.log(detailPage);
    }, []);

    return (
        <>
            {active == true ? <Popupwindow /> : ""}

            {userActive == false ? <UserStatusPoppupWindow /> : ""}
            <Header />
            <div className="detail_container">
                <div className="detail_page">
                    <h1 className="title">{detailPage.recipe?.title}</h1>
                    <div
                        className="ugheart-iconDiv"
                        onClick={() => {
                            additemsToFavourites(detailPage.recipe.id),
                                user ? setActive(true) : setUserActive(false);
                        }}
                    >
                        <FontAwesomeIcon
                            icon={faHeart}
                            className="ugheart-icon"
                        />
                    </div>

                    <p className="description">
                        {detailPage.recipe?.description}
                    </p>
                    <img
                        src={detailPage.recipe?.image}
                        alt="polo"
                        className="polo"
                    ></img>

                    <div className="info">
                        <div className="left">
                            <h3 className="difficulty_level">
                                Difficulty level:
                            </h3>
                            <p>🌟 {detailPage.recipe?.difficulty_level}</p>
                            <h3 className="cooking_time"> Cooking time:</h3>
                            <p className="time">
                                ⌛️ {detailPage.recipe?.cooking_time}
                            </p>
                            <h3 className="preparation_time">
                                Preparation time:
                            </h3>
                            <p className="time">
                                ⏰ {detailPage.recipe?.preparation_time}
                            </p>
                        </div>
                        <div className="right">
                            <h3>Ingredients 🌶</h3>
                            {detailPage.recipe?.ingredients.map(
                                (ingredient) => {
                                    return (
                                        <p key={ingredient.id}>
                                            {ingredient.name}: &nbsp;&nbsp;
                                            {ingredient.pivot.measure}
                                        </p>
                                    );
                                }
                            )}
                        </div>
                    </div>
                    <hr />
                    <h3>Instruction</h3>
                    <p className="instruction">
                        {detailPage.recipe?.instruction}
                    </p>
                    <div className="servings">
                        <p>Servings: 3-4</p>
                    </div>
                    <div className="side_dish">
                        <p>
                            Recommended Side Dish: Vinegary Salad or Eggplant
                            Salad
                        </p>
                    </div>
                </div>

                <Rating setRating={setRating} />

                <Comment recipe_id={id} rating={rating} />
            </div>
        </>
    );
}
