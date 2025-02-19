import { createBrowserRouter } from "react-router-dom";
import Root from "../layout/Root";
import Home from "../Pages/Home/Home";
import AddCustomer from "../component/AddCustomer";
import EditCustomer from "../component/EditCustomer";


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
        ]
    }
])

export default Router;