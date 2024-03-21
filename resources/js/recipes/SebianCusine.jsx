import "./IndianCusine.scss";
import { useEffect, useState } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faHeart } from "@fortawesome/free-solid-svg-icons";

function SerbianCusine() {
    const [cusine, setCusine] = useState([]);

    const loadmissions = async () => {
    
        const response = await fetch('http://www.laravel.final/api/serbian-cusine');
        const data = await response.json();
        setCusine(data)   
        console.log(data)
    }

    useEffect(() => {
        loadmissions();
    }, []);

    return (
        <>
        <img className="homepic" src="/img/serbianFoodMain.jpg" alt="Table with served serbian food" />
        <div className="IndianRecepie-container">
            <div className="container-heading">
                <h1>Explore Indian Recipes</h1>
            </div>
            
            
            <div className="container-cardsList">
                {cusine
                    ? cusine.map((item ) => {
                          return (
                              <>
                                  <div className="cards" key={item.id}>
                                      <div className="heart-iconDiv">
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

export default SerbianCusine;