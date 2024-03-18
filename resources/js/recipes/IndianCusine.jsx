import "./IndianCusine.scss";
import { useEffect, useState } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faHeart } from "@fortawesome/free-solid-svg-icons";

function IndianCusine() {
    const [cusine, setCusine] = useState([]);

    const loadmissions = async () => {
<<<<<<< HEAD
    
        const response = await fetch('http://www.laravel.final/api/indian-cusine');
        const data = await response.json();
        setCusine(data)   
        console.log(data)
    }
=======
        const response = await fetch("/api/indian-cusine");
        const data = await response.json();
        setCusine(data);
    };
>>>>>>> e0f4e72c783f4650c2cd9b3547fc446a1da8ae7c

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

                {/* <div className="cards">
            <div className='heart-iconDiv'>
                     <FontAwesomeIcon icon={faHeart} className='heart-icon'/>
                    </div>
                <div className="cards_imageContainer">
                    <img src="https://paattiskitchen.com/wp-content/uploads/2023/03/kmc_20230323_230721-800x530.jpg?crop=1" alt="" />
                </div>
                <div className="cards_content">
                    <p>Vegeterian</p>
                    <h2>Chicken Tikka Masala</h2>
                    <p>Rating</p>
                </div>
            </div>
            <div className="cards">
            <div className='heart-iconDiv'>
                     <FontAwesomeIcon icon={faHeart} className='heart-icon'/>
                    </div>
            <div className="cards_imageContainer">
                    <img src="https://paattiskitchen.com/wp-content/uploads/2023/03/kmc_20230323_230721-800x530.jpg?crop=1" alt="" />
                </div>
                <div className="cards_content">
                    <p>Vegeterian</p>
                    <h2>Chicken Tikka Masala</h2>
                    <p>Rating</p>
                </div>
            </div>
            <div className="cards">
            <div className='heart-iconDiv'>
                     <FontAwesomeIcon icon={faHeart} className='heart-icon'/>
                    </div>
            <div className="cards_imageContainer">
                    <img src="https://paattiskitchen.com/wp-content/uploads/2023/03/kmc_20230323_230721-800x530.jpg?crop=1" alt="" />
                </div>
                <div className="cards_content">
                    <p>Vegeterian</p>
                    <h2>Chicken Tikka Masala</h2>
                    <p>Rating</p>
                </div>
            </div>
            <div className="cards">
            <div className='heart-iconDiv'>
                     <FontAwesomeIcon icon={faHeart} className='heart-icon'/>
                    </div>
            <div className="cards_imageContainer">
                    <img src="https://paattiskitchen.com/wp-content/uploads/2023/03/kmc_20230323_230721-800x530.jpg?crop=1" alt="" />
                </div>
                <div className="cards_content">
                    <p>Vegeterian</p>
                    <h2>Chicken Tikka Masala</h2>
                    <p>Rating</p>
                </div>
            </div>
            <div className="cards">
            <div className='heart-iconDiv'>
                     <FontAwesomeIcon icon={faHeart} className='heart-icon'/>
                    </div>
            <div className="cards_imageContainer">
                    <img src="https://paattiskitchen.com/wp-content/uploads/2023/03/kmc_20230323_230721-800x530.jpg?crop=1" alt="" />
                </div>
                <div className="cards_content">
                    <p>Vegeterian</p>
                    <h2>Chicken Tikka Masala</h2>
                    <p>Rating</p>
                </div>
            </div>
            <div className="cards">
            <div className='heart-iconDiv'>
                     <FontAwesomeIcon icon={faHeart} className='heart-icon'/>
                    </div>
            <div className="cards_imageContainer">
                    <img src="https://paattiskitchen.com/wp-content/uploads/2023/03/kmc_20230323_230721-800x530.jpg?crop=1" alt="" />
                </div>
                <div className="cards_content">
                    <p>Vegeterian</p>
                    <h2>Chicken Tikka Masala</h2>
                    <p>Rating</p>
                </div>
            </div>
            <div className="cards">
            <div className='heart-iconDiv'>
                     <FontAwesomeIcon icon={faHeart} className='heart-icon'/>
                    </div>
            <div className="cards_imageContainer">
                    <img src="https://paattiskitchen.com/wp-content/uploads/2023/03/kmc_20230323_230721-800x530.jpg?crop=1" alt="" />
                </div>
                <div className="cards_content">
                    <p>Vegeterian</p>
                    <h2>Chicken Tikka Masala</h2>
                    <p>Rating</p>
                </div>
            </div>
            <div className="cards">
            <div className='heart-iconDiv'>
                     <FontAwesomeIcon icon={faHeart} className='heart-icon'/>
                    </div>
            <div className="cards_imageContainer">
                    <img src="https://paattiskitchen.com/wp-content/uploads/2023/03/kmc_20230323_230721-800x530.jpg?crop=1" alt="" />
                </div>
                <div className="cards_content">
                    <p>Vegeterian</p>
                    <h2>Chicken Tikka Masala</h2>
                    <p>Rating</p>
                </div>
            </div> */}
            </div>
        </div>
    );
}

export default IndianCusine;
