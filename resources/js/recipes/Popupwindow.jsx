import "./Popupwindow.scss";
import FavouriteContext from "./FavouriteContext";
import { useContext } from "react";
import { Link } from "react-router-dom";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faCheck } from "@fortawesome/free-solid-svg-icons";





function Popupwindow() {
    const { active,setActive } = useContext(FavouriteContext)
  return (
  
    <div className="popup-window">
         <div className="close-icon" onClick={()=>{setActive(false)}}> 
         &times;
        
         </div>
         <div className="circle">
          <FontAwesomeIcon icon={faCheck} />
         </div>
        <h3>Saved!</h3>
        <p><Link to={'/favourites'}>View All Saved Items</Link> </p>
    </div>
   
   
  )
}

export default Popupwindow