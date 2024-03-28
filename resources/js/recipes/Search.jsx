import { useEffect, useState } from "react";
import { useParams } from "react-router";
import "./UyghurCuisine.scss";
import "./Search.scss";
import FavouriteContext from "./FavouriteContext";
import { faHeart } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { useContext } from "react";
import UserContext from "./UserContext";
import { Link } from "react-router-dom";
import Header from "./Header";
import UserStatusPoppupWindow from "./UserStatusPoppupWindow";
import Popupwindow from "./Popupwindow";





export default function Search() {
    const [recipes, setRecipes] = useState([]);
    const { user } = useContext(UserContext);
    const {
        additemsToFavourites,
        active,
        setActive,
        userActive,
        setUserActive,
        setBurgericon,
        burgericon,
    } = useContext(FavouriteContext);

    const { id } = useParams();
    console.log(id);
    
    
    const fetchResults = async () => {
        
            const response = await fetch('/api/recipes/search?search=' +id)
            const data = await response.json();
            console.log(data)
            setRecipes(data)

        
    }

    useEffect(()=>{
        if(id){
            fetchResults(); 
        }

    },[id])

    return (
        <>
        <Header/>
        {active == true ? <Popupwindow /> : ""}

      {userActive == false ? <UserStatusPoppupWindow /> : ""}
    
        <div className="search-container" style={{opacity: active== true || userActive == false || burgericon== true ? 0.3 : '',backgroundColor: active== true || userActive == false ? "black" : ''}}>
            {/* <input
                type="text"
                name="search"
                placeholder="Search"
                value={searchItem}
                onChange={handleChange}
            />
            <button onClick={fetchResults}>Search</button> */}
      

      <div className="ugmenu_container">
                    {recipes.map((uyRecipe) => {
                        
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
                        
                    })}
                </div>

        </div>
        </>
      
        
    )

}
