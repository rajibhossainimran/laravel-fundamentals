import React, { useState } from "react";

import axios from "axios";
import { useNavigate } from "react-router-dom";

const AddCustomer = () => {
  const [userField, setUserField] = useState({
    name: "",
    email: "",
    contact: "",
  });
  const navigate = useNavigate();
  const [loading, setLoading] = useState(false);

  const changeUserFieldHandler = (e) => {
    setUserField({...userField,[e.target.name]: e.target.value,
    });
  };

  const onSubmitChange = async (e) => {
    e.preventDefault();
    setLoading(true);
    try {
      const response = await axios.post(
        "http://127.0.0.1:8000/api/addCustomer",
        userField
      );
      console.log(response);
      setUserField({ name: "", email: "", contact: "" }); 
      navigate("/")
    } catch (err) {
      console.log("Something Went Wrong");
    }
    setLoading(false);
  };

  return (
    <div className="w-[60%] mx-auto px-4">
      

      <div className="">
        {/* Form Section */}
        <div className="bg-white shadow-md rounded-lg p-6">
          <h3 className="text-xl font-semibold mb-4">Add Customer Details</h3>
          <form onSubmit={onSubmitChange}>
            {/* Full Name */}
            <div className="mb-4">
              <label className="block text-gray-600 font-medium">Full Name:</label>
              <input
                type="text"
                className="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
                placeholder="Enter your full name"
                name="name"
                value={userField.name}
                onChange={changeUserFieldHandler}
              />
            </div>

            {/* Email */}
            <div className="mb-4">
              <label className="block text-gray-600 font-medium">Email:</label>
              <input
                type="email"
                className="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
                placeholder="Enter email"
                name="email"
                value={userField.email}
                onChange={changeUserFieldHandler}
                required
              />
            </div>

            {/* contact */}
            <div className="mb-4">
              <label className="block text-gray-600 font-medium">Contact:</label>
              <input
                type="text"
                className="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
                placeholder="Enter contact"
                name="contact"
                value={userField.contact}
                onChange={changeUserFieldHandler}
                required
              />
            </div>

            {/* Submit Button */}
            <button
              type="submit"
              className="w-full bg-violet-800 hover:bg-purple-800 text-white py-2 rounded-lg font-medium transition duration-300"
              disabled={loading}
            >
              {loading ? "Adding..." : "Add Customer"}
            </button>
          </form>
        </div>

      </div>
    </div>
  );
};

export default AddCustomer;
