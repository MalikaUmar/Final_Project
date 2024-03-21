import { useContext, useState } from "react";
import axios from "axios";
import "./Register.scss";
import { Link } from "react-router-dom";
import UserContext from "./UserContext";

function Register(props) {
    const[errors,setErrors] = useState([])

    const [values, setValues] = useState({
        email: '',
        name: '',
        password: '',
        password_confirmation: ''
    })

    const { getUser } = useContext(UserContext)

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
        console.log(response_data);
        getUser();
 
        
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
    <div className="container">

         <div className='container-content'>
            <h2>Looks like you are new here!</h2>
            <h5>Signup to get started</h5>
            {/* <button><Link to="/login">existing user?Login</Link></button> */}
          </div>

          

            <form className="form" action="/register" method="post" onSubmit={ handleSubmit }>
             <div>
            {errors.name ? <p>{errors.name}</p> : ''}
            <input className="input" type="text" name="name" value={ values.name } onChange={ handleChange } placeholder='name'/> <br /><br />
            </div>
             
            <div>
            {errors.email ? <p>{errors.email}</p> : ''} 
            <input className="input" type="email" name="email" value={ values.email } onChange={ handleChange } placeholder='email'/>  <br /><br />
            </div>

            <div>
            {errors.password ? <p>{errors.password}</p> : ''} 
            <input className="input" type="password" name="password" value={ values.password } onChange={ handleChange } placeholder='password'/> <br /><br />
            </div>

            <div>
            <input className="input" type="password" name="password_confirmation" value={ values.password_confirmation } onChange={ handleChange } placeholder='confirm-password'/> <br /><br />
            </div>

            <button className="register-button">Register</button>

            </form>

            </div>
   
  )
}

export default Register
