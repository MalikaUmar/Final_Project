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
         <h2 className="userStatus-popup_window-heading">Delicious</h2>

         <div className="userStatus-popup_window-section-2">
          <h3>Login or Signup to comment or Save Recipes</h3>
          <div className="userStatus-popup_window-links">
          <p><Link className="userStatus-popup_window-link" to={'/login'}>Login</Link> </p>
          <p><Link className="userStatus-popup_window-link" to={'/register'}>Signup</Link> </p>
          </div>
        </div>

    </div>
  )
}

export default UserStatusPoppupWindow