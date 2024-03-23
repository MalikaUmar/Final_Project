import { Link } from "react-router-dom"
import "./ProfileDropdown.scss"

function ProfileDropdown({setDropdown,logout}) {
  return (
    <div className="profileDropdown-container" onMouseEnter={()=>{setDropdown(true)}} onMouseLeave={()=>{setDropdown(false)}}>
        <div className="dropdown-link">My Profile</div>
        <div className="dropdown-link"><Link className="dropdown-link-link" to={"/favourites"}>your Favourites</Link></div>
        <div className="dropdown-link">Add a Recipe</div>
        <div className="dropdown-link">Help</div>
        <div onClick={logout} className="dropdown-link">Logout</div>
        

    </div>
  )
}

export default ProfileDropdown