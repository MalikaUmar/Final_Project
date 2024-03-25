import { useContext, useState } from "react";
import "./Login.scss";
import axios from "axios";
import UserContext from "./UserContext";
import { Link, useNavigate } from "react-router-dom";
import Header from "./Header";

function Login() {
    const [loginErrors, setLoginErrors] = useState([]);
    const [values, setValues] = useState({
        email: "",
        password: "",
    });

    const { getUser } = useContext(UserContext);

    const navigate = useNavigate()

    const handleSubmit = async (event) => {
        event.preventDefault();

        try {
            const response = await axios.post("/login", values);
            const response_data = response.data;
            console.log(response_data);
            getUser();
            navigate('/')
            
        } catch (error) {
            switch (error.response.status) {
                case 422:
                    console.log(
                        "VALIDATION FAILED:",
                        error.response.data.errors
                    );
                    setLoginErrors(error.response.data.errors);
                    break;
                case 500:
                    console.log("UNKNOWN ERROR", error.response.data);
                    break;
            }
        }

      
    };

    const handleChange = (event) => {
        setValues((previous_values) => {
            return {
                ...previous_values,
                [event.target.name]: event.target.value,
            };
        });
    };

    return (
        <>
        <Header/>
        
        <div className="login-container">
            <div className="Login-content">
              <h2>Delicious</h2>
             <p>Dive in to the world of recipes</p>
                
            </div>

            <form
                className="loginForm"
                action="/login"
                method="post"
                onSubmit={handleSubmit}
            >
                <h2>Login</h2>
                <div className="login-input-contaoner">
                    {loginErrors.email ? <p>{loginErrors.email}</p> : ""}
                    <input
                        className="login_input"
                        type="email"
                        name="email"
                        value={values.email}
                        onChange={handleChange}
                        placeholder="Email"
                    />
                </div>

                <div className="login-input-contaoner">
                    {loginErrors.password ? <p>{loginErrors.password}</p> : ""}
                    <input
                        className="login_input"
                        type="password"
                        name="password"
                        value={values.password}
                        onChange={handleChange}
                        placeholder="Password"
                    />
                </div>

                <button className="login-button">Login</button>
                
                <div className="login-foot">
                    <p>Looks like you are new here !</p>
                    <Link className="login-foot-link" to={"/register"}>Sign up here</Link>
                </div>
        
            </form>
        </div>
        

     </>
    );
}

export default Login;
