import "./SerbianCusine.scss";
import { useEffect, useState } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faHeart } from "@fortawesome/free-solid-svg-icons";
import FavouriteContext from "./FavouriteContext";
import { useContext } from "react";
import Popupwindow from "./Popupwindow";
import UserContext from "./UserContext";
import UserStatusPoppupWindow from "./UserStatusPoppupWindow";

function SerbianCusine() {
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
        const response = await fetch("/api/serbian-cusine");
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
            <div className="serbianCusine_home">
                <div className="serbianCusine_headings">
                    <h1 className="serbianCusine_h1">Serbian National Food</h1>
                    <h2 className="serbianCusine_h2">
                        Enjoy the best food in this part of the world
                    </h2>
                </div>
                <img
                    className="homepic"
                    src="/img/serbianFoodMain.jpg"
                    alt="Table with served serbian food"
                />
            </div>

            <div className="SerbianRecepie-container">
                <div className="container-cardsList">
                    {cusine
                        ? cusine.map((item) => {
                              if (item.category_id === 2) {
                                  return (
                                      <>
                                          <div className="cards">
                                              <div
                                                  className="heart-iconDiv"
                                                  onClick={() => {
                                                      additemsToFavourites(
                                                          item.id
                                                      ),
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
                                                  <img
                                                      src={item.image}
                                                      alt=""
                                                  />
                                              </div>
                                              <div className="cards_content">
                                                  {/* <p>{item.title}</p> */}
                                                  <h2>{item.title}</h2>
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

export default SerbianCusine;
