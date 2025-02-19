import { Outlet } from "react-router-dom";
import Navbar from "../Pages/Shared/navBar";
import Footer from "../Pages/Shared/Footer";

const Root = () => {
    return (
        <div className="min-h-screen flex flex-col">
            <div className="sticky top-0 z-50">
                <Navbar />
            </div>

            <main className="flex-grow">
                <Outlet />
            </main>

            <div className="mt-auto">
                <Footer />
            </div>
        </div>
    );
};

export default Root;