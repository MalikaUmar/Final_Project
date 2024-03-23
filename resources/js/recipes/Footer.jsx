import { Link } from "react-router-dom"
import "./Footer.scss"
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome"



function Footer() {
  return (
    <div className="footer-container">
        <h3>DELICIOUS</h3>
        <div className="footer-content">
            <p>HOME</p>
            <p>FAVOURITES</p>
            <p>ADD RECIPE</p>
            <p>PROFILE</p>
        </div>
        <div className="footer-foot">
            <div className="foot-left">
               <h6>@2024 delicious.com</h6>
            </div>
            <div className="foot-right">
                <p>Follow us</p>
                <div className="foot-social_links">
                    {/* <FontAwesomeIcon icon={faInstagram} />
                    <FontAwesomeIcon icon={faFacebook} /> */}
                </div>

            </div>
        </div>
    </div>
  )
}

export default Footer