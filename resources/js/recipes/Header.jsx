import "./Header.scss";
import { Link, useNavigate } from "react-router-dom";
import UserContext from "./UserContext";
import { useContext, useEffect, useState } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faUser } from "@fortawesome/free-solid-svg-icons";
import { faMagnifyingGlass } from "@fortawesome/free-solid-svg-icons";
import { faCaretDown } from "@fortawesome/free-solid-svg-icons";
import ProfileDropdown from "./ProfileDropdown";

function Header() {
  const[dropdown,setDropdown] = useState(false)
  const { user, getUser } = useContext(UserContext);
  const navigate = useNavigate()

  const logout = async (event) => {
    event.preventDefault();

    try {
        const response = await axios.post("/logout");
        getUser();
        navigate('/')
    } catch (error) {
          console.log(error);
        }
    }

 
  

  return (
    <>

    {
      dropdown ?
      <ProfileDropdown setDropdown={setDropdown} logout={logout}/>
      :
      ""
    }
    <div className="navbar">
        <div className="navbar-content">
            <h3>DELICIOUS</h3>
            <div className="navbar-search_container">
              <input type="text" className='navbar_search' placeholder='search for recipes'/>
              <FontAwesomeIcon icon={faMagnifyingGlass} className="search-icon"/>
            </div>
        </div>
    
    <div className="header-links">
        <Link className="header-link" to="/">Home</Link>|
        <Link className="header-link" to="addyourRecipe">Add your recipe</Link>|
        <Link className="header-link" to="/favourites">Favourite</Link>|

        {
        user ? 
        <>
        <div className="header-profile" onMouseEnter={()=>{setDropdown(true)}} onMouseLeave={()=>{setDropdown(false)}}>
           <div className="header-profile-iconCircle">
             <FontAwesomeIcon icon={faUser} className="user-icon"  />
            </div>
            <p>{user.name}</p>
            <FontAwesomeIcon icon={faCaretDown} className="dropdown-icon"/>
        </div>
        
        </>
        :
        <>
        <div className="header-profile-login">
          <div className="header-profile-iconCircle">
          <FontAwesomeIcon icon={faUser} className="user-icon"  />
          </div>
         <Link className="header-link" to="/login">Login</Link> 
        </div>
        </>
        
        }
        
    </div>
   
</div>
</>
  )
}

export default Header