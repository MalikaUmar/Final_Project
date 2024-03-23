import Header from "./Header"
import "./Home.scss";
import "./IndianCusine.scss";
import { useState } from "react";
import { useEffect } from "react";
import UserContext from "./UserContext";
import FavouriteContext from "./FavouriteContext";
import { useContext } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faHeart } from "@fortawesome/free-solid-svg-icons";
import { Link } from "react-router-dom";
import Popupwindow from "./Popupwindow";


function Home() {

    const { user } = useContext(UserContext);
    const {additemsToFavourites,active,setActive,userActive,setUserActive,} = useContext(FavouriteContext);
    const[trendingCusine,setTrendingCusine] = useState([])

    const displayTrendingCusines = async () => {
        const response = await fetch("/api/trending-cusine");
        const data = await response.json();
        setTrendingCusine(data);
        console.log(data);
    };

    useEffect(() => {
        displayTrendingCusines();
    }, []);

  return (
    <>
    <Header/>

    {active == true ? <Popupwindow /> : ""}

   {userActive == false ? <UserStatusPoppupWindow /> : ""}  

    <div className="home-container">

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
          <h1>Trending Recipes</h1>

          <div className="container-cardsList">

         {  
         trendingCusine.map(item=>{
            return(
            <>
              <div className="cards">                            
                    <div className="heart-iconDiv" onClick={() => {additemsToFavourites(item.id), user ? setActive(true) : setUserActive(false)}}>
                        
                        <FontAwesomeIcon icon={faHeart} className="heart-icon"/>
        
                    </div>

                    <div className="cards_imageContainer">
                        <img src={item.image} alt="" />
                    </div>
                    <div className="cards_content">
                        <p>{item.title}</p>
                        <h3>{item.title}</h3>
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