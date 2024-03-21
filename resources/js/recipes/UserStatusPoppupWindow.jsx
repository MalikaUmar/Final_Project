import FavouriteContext from "./FavouriteContext";
import { useContext } from "react";
import { Link } from "react-router-dom";
import "./UserStatusPopupWindow.scss";


function UserStatusPoppupWindow() {
    const { setUserActive } = useContext(FavouriteContext)
  return (
    <div className="userStatus-popup_window">
        <div className="close-window_icon" onClick={()=>{setUserActive(true)}}> 
          &times;
         </div>
         <h2 className="userStatus-popup_window-heading">FAVOURITES</h2>
        <h3>Login Or Signup to Save Recipes</h3>
        <div className="userStatus-popup_window-links">
        <p><Link className="userStatus-popup_window-link" to={'/login'}>Login</Link> </p>
        <p><Link className="userStatus-popup_window-link" to={'/register'}>Signup</Link> </p>
        </div>

    </div>
  )
}

export default UserStatusPoppupWindow