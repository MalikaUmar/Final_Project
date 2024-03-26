import { Link } from "react-router-dom"
import "./Footer.scss"




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
                <p>follow us</p>
                <div className="foot-social_links">
                   <img className="foot-social_links-link" src="/img/instagram (1).svg" alt="" />
                   <img className="foot-social_links-link" src="/img/twitter.svg" alt="" />
                   <img className="foot-social_links-link" src="/img/square-facebook.svg" alt="" />
                   <img className="foot-social_links-link" src="/img/youtube.svg" alt="" />
                 
                </div>

            </div>
        </div>
    </div>
  )
}

export default Footer