import "./Homepage.scss";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faHeart } from "@fortawesome/free-solid-svg-icons";
import { useState } from "react";
import { useEffect } from "react";

export default function Homepage() {
    const [dish, setDish] = useState([]);

    // const [dish, setDish] = useState([]);

    // const loadDishes = async () => {
    //     const response = await fetch("");
    //     const data = await response.json();
    //     setDish(data);
    // };

    // useEffect(() => {
    //     loadDishes();
    // }, []);

    return (
        <>
            <div className="upper_navigation">
                <label forHtml="name">Username</label>
                &nbsp;
                <input type="text" id="name" name="name" />
                &emsp;
                <label forHtml="name">Password</label>
                &nbsp;
                <input type="text" id="name" name="name" />
            </div>
            <div className="upper_heading">
                Dive in the world's greatest cuisines{" "}
            </div>
            <div className="main_heading">
                <h1> Deliciousss</h1>
            </div>
            <div className="main">
                <div className="navigation_column">
                    <nav>
                        <a href="#">Who we are</a> <br></br>
                        <a href="#">Uyghur Cuisine</a> <br></br>
                        <a href="#">Serbian cuisine</a>
                        <br></br>
                        <a href="#">Indian cuisine</a>
                        <br></br>
                        <a href="#">
                            Create a meal with what you have in a fridge
                        </a>{" "}
                        <br></br>
                        <a href="#">Shops that can help</a>
                        <br></br>
                    </nav>
                </div>

                <div className="cuisines_wrapper">
                    <div className="navigation_cuisine">
                        <a href="#">Uyghur Cuisine</a>
                        <img
                            className="icons_navigation"
                            src="/public/images/asparagus-2169305_640.jpg"
                            alt=""
                        />
                    </div>

                    <div className="navigation_cuisine">
                        <a href="#">Balkan cuisine</a>
                        <img
                            className="icons_navigation"
                            src="public/images/pancakes-2291908_640.jpg"
                            alt=""
                        />
                    </div>

                    <div className="navigation_cuisine">
                        <a href="#">Indian cuisine </a>
                        <img
                            className="icons_navigation"
                            src="public/images/pasta-1181189_640.jpg"
                        />
                    </div>
                </div>
            </div>
            <div className="trending_recipes">
                <h2>Trending Recipes</h2>
                <div className="trending_photos">
                    <img src="/images/lime-2481358_640.jpg" alt="" />
                    <img src="/images/lime-2481358_640.jpg" alt="" />
                    <img src="/images/lime-2481358_640.jpg" alt="" />
                </div>
            </div>
            <br></br> <br></br> <br></br>
            <footer>
                <li> About Us</li>
                <li> Contact</li>
            </footer>
        </>
    );
}
