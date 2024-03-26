import "./SerbianCusine.scss";
import "./UyghurCuisine.scss";
import { useEffect, useState } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faHeart } from "@fortawesome/free-solid-svg-icons";
import FavouriteContext from "./FavouriteContext";
import { useContext } from "react";
import Popupwindow from "./Popupwindow";
import UserContext from "./UserContext";
import UserStatusPoppupWindow from "./UserStatusPoppupWindow";
import { Link } from "react-router-dom";
import Header from "./Header";

function SerbianCusine() {
    const [cusine, setCusine] = useState([]);
    const {additemsToFavourites,active,setActive,userActive,setUserActive, setBurgericon,burgericon} = useContext(FavouriteContext);

    const { user } = useContext(UserContext);
 

    const loadmissions = async () => {
        const response = await fetch("/api/uyghur-cuisine");
        const data = await response.json();

        setCusine(data);
        console.log(data);
    };

    useEffect(() => {
        loadmissions();
    }, []);

    return (
        <>
        <Header/>
            {active == true ? <Popupwindow /> : ""}
            {userActive == false ? <UserStatusPoppupWindow /> : ""}
            <div className="ugcontainer" style={{opacity: active== true || userActive == false || burgericon== true ? 0.3 : '',backgroundColor: active== true || userActive == false ? "darkgrey" : ''}}>
                <div className="ugimg_box">
                    <img
                        className="uyghur_img"
                        src="/img/serbianFoodMain.jpg"
                        alt="Table with served serbian food"
                    />
                </div>

                <div className="title_box">
                    <h1 className="uyghur_title">Serbian National Food</h1>
                </div>

                <div className="ugmenu_container">
                    {cusine.map((uyRecipe) => {
                        if (uyRecipe.category_id === 2) {
                            return (
                                <>
                                    <div className="ugmenu_item">
                                        <div
                                            className="ugheart-iconDiv"
                                            onClick={() => {
                                                additemsToFavourites(
                                                    uyRecipe.id
                                                ),
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
                        }
                    })}
                </div>
            </div>
        </>
    );
}

export default SerbianCusine;
