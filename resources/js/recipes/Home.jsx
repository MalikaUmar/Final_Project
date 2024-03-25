import Header from "./Header"
import "./Home.scss";
import "./UyghurCuisine.scss";
// import "./IndianCusine.scss";
import { useState } from "react";
import { useEffect } from "react";
import UserContext from "./UserContext";
import FavouriteContext from "./FavouriteContext";
import { useContext } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faMagnifyingGlass } from "@fortawesome/free-solid-svg-icons";
import { faHeart } from "@fortawesome/free-solid-svg-icons";
import { Link } from "react-router-dom";
import Popupwindow from "./Popupwindow";
import UserStatusPoppupWindow from "./UserStatusPoppupWindow";


function Home() {

    const { user } = useContext(UserContext);
    const {additemsToFavourites,active,setActive,userActive,setUserActive, setBurgericon,burgericon} = useContext(FavouriteContext);
    const[trendingCusine,setTrendingCusine] = useState([])

    const displayTrendingCusines = async () => {
        const response = await fetch("/api/trending-cusine");
        const data = await response.json();
        setTrendingCusine(data);
        console.log(data);
    };

    useEffect(() => {
        displayTrendingCusines();
        setUserActive(true)
        setActive(false)
    }, []);

  return (
    <>
    <Header/>

    {active == true ? <Popupwindow /> : ""}

   {userActive == false ? <UserStatusPoppupWindow /> : ""}  

    <div className="home-container" style={{opacity: active== true || userActive == false || burgericon== true ? 0.3 : '',backgroundColor: active== true || userActive == false ? "darkgrey" : ''}}>

        <div className="home-container_head">
            <h1 className="home-container_head-title">What's Your Favourite Cusine</h1>
            <div className="home-container_cusins-list">

                <Link to={"/indian"}>
                <div className="home-container_cusins">
                   <img className="home-container_cusins-img" src="https://marketplace.canva.com/MADQ5c-RCws/1/screen_2x/canva-indian-buffet-of-spiced-dish-MADQ5c-RCws.jpg" alt="" />
                   <p className="home-container_cusins-name">INDIAN</p>
                </div>
                </Link>

                <Link to={"/serbian"}>
                <div className="home-container_cusins">
                   <img className="home-container_cusins-img" src="https://marketplace.canva.com/xGduU/MADyRBxGduU/1/s/canva-food-in-a-bowl-MADyRBxGduU.jpg" alt="" />
                   <p className="home-container_cusins-name">SERBIAN</p>
                </div>
                </Link>

                <Link to={"/uyghur-cuisine"}>
                <div className="home-container_cusins">
                   <img className="home-container_cusins-img" src="https://marketplace.canva.com/IKfVw/MADyQyIKfVw/1/s2/canva-person-cooking-noodles-MADyQyIKfVw.jpg" alt="" />
                   <p className="home-container_cusins-name">UYGHUR</p>
                </div>
                </Link>
            </div>
        </div>
        
       
       <div className="home-container-content">

             <div className="home-container_searchForMeal">
                <h3 className="home-container_searchForMeal_head">Make some meal from the ingredients you have</h3>
               <div className="navbar-mealSearch_container">
                 <input type="text" className='navbar_search' placeholder='search for meals with ingredients you have'/>
                  <FontAwesomeIcon icon={faMagnifyingGlass} className="search-icon"/>
               </div>
            
            </div>
          <h1 className="home-container-content-head">Trending Recipes</h1>

          <div className="ugmenu_container">

         {  
         trendingCusine.map(item=>{
            return(
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
                                              <img
                                                  src={item.image}
                                                  alt=""
                                                  className="ugmenu_img"
                                              />
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
            )
         })
        
         }
         </div>


         </div>
        
        

    </div>
    </>
  )
}

export default Home