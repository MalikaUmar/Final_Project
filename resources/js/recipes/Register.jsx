import { useContext, useState } from "react";
import axios from "axios";
import "./Register.scss";
import { Link, useNavigate } from "react-router-dom";
import UserContext from "./UserContext";
import Header from "./Header";

function Register(props) {
    const[errors,setErrors] = useState([])

    const [values, setValues] = useState({
        email: '',
        name: '',
        password: '',
        password_confirmation: ''
    })

    const { getUser } = useContext(UserContext)

    const navigate = useNavigate()

    const handleSubmit = async (event) => {
        event.preventDefault();

        const response = await fetch('/register', {
            "method": 'POST',
            "body": JSON.stringify(values),
            "headers": {
                'Accept': 'application/json',
                'Content-type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                
            }
        })
 
       
        const response_data = await response.json();
        // console.log(response_data);
        getUser();
        navigate('/')
 
        
        if (Math.floor(response.status / 100) !== 2) {
            switch (response.status) {
                case 422:
                    // handle validation errors here
                    console.log('VALIDATION FAILED:', response_data.errors);
                    setErrors(response_data.errors)
                    break;
                default:
                    console.log('UNKNOWN ERROR', response_data);
                    break;
            }
        }


    }

  

    const handleChange = (event) => {
        setValues(previous_values => {
            return ({...previous_values,
                [event.target.name]: event.target.value
            });
        });
    }


  return (
    <>
      <Header/>
      <div className="register-container">

         <div className='container-content'>
            <h2>Delicious</h2>
             <p>Dive in to the world of recipes</p>
          
          </div>

          

            <form className="register-form" action="/register" method="post" onSubmit={ handleSubmit }>
                <h2>Sign Up</h2>
             <div className="register-form-inputContainer">
            {errors.name ? <p>{errors.name}</p> : ''}
            <input className="input" type="text" name="name" value={ values.name } onChange={ handleChange } placeholder='name'/> <br /><br />
            </div>
             
            <div className="register-form-inputContainer">
            {errors.email ? <p>{errors.email}</p> : ''} 
            <input className="input" type="email" name="email" value={ values.email } onChange={ handleChange } placeholder='email'/>  <br /><br />
            </div>

            <div className="register-form-inputContainer">
            {errors.password ? <p>{errors.password}</p> : ''} 
            <input className="input" type="password" name="password" value={ values.password } onChange={ handleChange } placeholder='password'/> <br /><br />
            </div>

            <div className="register-form-inputContainer">
            <input className="input" type="password" name="password_confirmation" value={ values.password_confirmation } onChange={ handleChange } placeholder='confirm-password'/> <br /><br />
            </div>

            <button className="register-button">Register</button>
             
             <div className="form-foot">
            <p>Already have an account !</p>
            <Link className="register-foot-loginLink" to={"/login"}>Login here</Link>
            </div>

            </form>

            </div>

        </>
   
  )
}

export default Register
