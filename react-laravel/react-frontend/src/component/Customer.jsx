import React, { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';
import { FaEdit } from "react-icons/fa";
import { MdOutlineDeleteForever } from "react-icons/md";
import axios from "axios";



const Customer = () => {
    const [customer,setCustomer]=useState([]);
    const [error,setError]=useState([]);

    useEffect(()=>{
        const loadCustomer= async ()=>{
            try {

                const responce = await fetch('http://127.0.0.1:8000/api/customers');
                if(!responce){
                    throw new error('Network is busy');
                }
                const result = await responce.json();
                setCustomer(result.data);
                
            } catch (error) {
                setError(error.message);
            }
        }
        // call the function 
        loadCustomer();
    },[]);
    
    // delete function 
    const handleDelete=async(id)=>{
      console.log(id);
      await axios.delete("http://127.0.0.1:8000/api/customerdelete/"+id);
      const newUserData=customer.filter((item)=>{
          return(
              item.id !==id
          )
      })
      setCustomer(newUserData);
  }

    return (
        <div>
            {error && <p style={{ color: 'red' }}> {error}</p>}
            <div className="p-6">
                <Link to="add-customer"><button className='bg-violet-950 text-gray-200 font-semibold text-xl px-4 py-1 rounded-2xl'>Add Customer</button></Link>
      <h1 className="text-2xl font-bold mb-4 my-10">Customer List : {customer.length}</h1>
      <table className="w-full border-collapse border border-gray-300">
        <thead>
          <tr className="bg-gray-200">
            <th className="border border-gray-300 p-2">ID</th>
            <th className="border border-gray-300 p-2">Name</th>
            <th className="border border-gray-300 p-2">Email</th>
            <th className="border border-gray-300 p-2">Contact</th>
            <th className="border border-gray-300 p-2">Action</th>
          </tr>
        </thead>
        <tbody>
          {customer.map((user) => (
            <tr key={user.id} className="text-center hover:bg-gray-100">
              <td className="border border-gray-300 py-4">{user.id}</td>
              <td className="border border-gray-300 py-4">{user.name}</td>
              <td className="border border-gray-300 py-4">{user.email}</td>
              <td className="border border-gray-300 py-4">{user.contact}</td>
              <td className="border border-gray-300 ">
                <div className='flex'>
                    <Link to={`edit-customer/${user.id}`} className='text-xl text-purple-700 p-2 block'><FaEdit /></Link>
                    <button onClick={()=>handleDelete(user.id)} className='text-2xl text-red-700 p-2 block'><MdOutlineDeleteForever /></button>
                </div>
            </td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
        </div>
    );
};

export default Customer;