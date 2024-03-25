import "./IndianCusine.scss";
import "./UyghurCuisine.scss";
import { useEffect, useState } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faHeart } from "@fortawesome/free-solid-svg-icons";
import { Link } from "react-router-dom";
import FavouriteContext from "./FavouriteContext";
import { useContext } from "react";
import Popupwindow from "./Popupwindow";
import UserContext from "./UserContext";
import UserStatusPoppupWindow from "./UserStatusPoppupWindow";
import Header from "./Header";

function IndianCusine() {
    const [cusine, setCusine] = useState([]);

    const { user } = useContext(UserContext);
    const {additemsToFavourites,active,setActive,userActive,setUserActive, setBurgericon,burgericon} = useContext(FavouriteContext);

    const loadmissions = async () => {

        const response = await fetch('/api/uyghur-cuisine');
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
                        src="https://marketplace.canva.com/NqqlA/MAFmARNqqlA/1/s2/canva-indian-food-MAFmARNqqlA.jpg"
                        alt=""
                    />
                </div>
                <div className="title_box">
                    <h1 className="uyghur_title">Explore Indian Recipes</h1>
                </div>
                <div className="ugmenu_container">
                    {cusine
                        ? cusine.map((item) => {
                            if(item.category_id == 1){
                              return (
                                  <>
                            
                                      <div className="ugmenu_item">
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
                                              <Link to={`/cuisine/${item.id}`}>
                                                  <img
                                                      src={item.image}
                                                      alt=""
                                                      className="ugmenu_img"
                                                  />
                                              </Link>
                                          </div>
                                          <div className="ugmenu_content">
                                              <p>{item.title}</p>
                                              <h2 className="ugmenu_title">
                                                  {item.title}
                                              </h2>
                                              <p>{item.preparation_time}</p>
                                          </div>
                                      </div>
                                  </>
                              );
                        }
                          })
                        : ""}
                </div>
            </div>
        </>
    );
}

export default IndianCusine;
