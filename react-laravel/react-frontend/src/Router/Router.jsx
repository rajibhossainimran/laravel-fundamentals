import { createBrowserRouter } from "react-router-dom";
import Root from "../layout/Root";
import Home from "../Pages/Home/Home";
import AddCustomer from "../component/AddCustomer";
import EditCustomer from "../component/EditCustomer";
import Login from "../component/Login";
import SignUp from "../component/SignUp";


const Router = createBrowserRouter([
    {
        path: '/',
        element: <Root></Root>,
        children: [
            {
                path: '/',
                element: <Home></Home>,
            },

            {
                path: 'add-customer',
                element: <AddCustomer></AddCustomer>,
            }
            ,

            {
                path: 'edit-customer/:id',
                element: <EditCustomer></EditCustomer>,
            }
            ,

            {
                path: 'login',
                element: <Login></Login>,
            } ,

            {
                path: 'signup',
                element: <SignUp></SignUp>,
            }
        ]
    }
])

export default Router;