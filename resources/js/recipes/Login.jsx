import { useContext, useState } from "react";
import "./Login.scss";
import axios from "axios";
import UserContext from "./UserContext";

function Login() {
    const [loginErrors, setLoginErrors] = useState([]);
    const [values, setValues] = useState({
        email: "",
        password: "",
    });

    const { getUser } = useContext(UserContext);

    const handleSubmit = async (event) => {
        event.preventDefault();

        try {
            const response = await axios.post("/login", values);
            const response_data = response.data;
            console.log(response_data);
            getUser();
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

        // const response = await fetch('/login', {
        //     method: 'POST',
        //     body: JSON.stringify(values),
        //     headers: {
        //         'Accept': 'application/json',
        //         'Content-type': 'application/json',
        //         'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        //     }
        // });

        // const response_data = await response.json();

        // if (Math.floor(response.status / 100) !== 2) {
        //     switch (response.status) {
        //         case 422:
        //             // handle validation errors here
        //             console.log('VALIDATION FAILED:', response_data.errors);
        //             setLoginErrors(response_data.errors)
        //             break;
        //         default:
        //             console.log('UNKNOWN ERROR', response_data);
        //             break;
        //     }
        // }
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
        <div className="login-container">
            <div className="Login-content">
                <h2>Already have an accout!</h2>
                <h5>Login to get started</h5>
            </div>

            <form
                className="loginForm"
                action="/login"
                method="post"
                onSubmit={handleSubmit}
            >
                <div>
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

                <div>
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
            </form>
        </div>
    );
}

export default Login;
