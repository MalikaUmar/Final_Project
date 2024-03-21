import "./IndianCusine.scss";
import { useEffect, useState } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faHeart } from "@fortawesome/free-solid-svg-icons";

function IndianCusine() {
    const [cusine, setCusine] = useState([]);

    const loadmissions = async () => {
    
        const response = await fetch('http://www.laravel.final/api/indian-cusine');
        const data = await response.json();
        setCusine(data)   
        console.log(data)
    }

    useEffect(() => {
        loadmissions();
    }, []);

    return (
        <div className="IndianRecepie-container">
            <div className="container-heading">
                <h1>Explore Indian Recipes</h1>
            </div>
            <div className="container-cardsList">
                {cusine
                    ? cusine.map((item) => {
                          return (
                              <>
                                  <div className="cards">
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
    );
}

export default IndianCusine;
