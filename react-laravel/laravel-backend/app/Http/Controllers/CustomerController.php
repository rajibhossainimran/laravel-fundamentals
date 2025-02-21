<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers =Customer::all();
        // return $customers;
        return response()->json(['data'=>$customers],200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customers = DB::table('customers')->insert([
            'name'=> $request->name,
            'email'=>$request->email,
            'contact'=>$request->contact,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $id)
    {
        $customers = Customer::find($id);

        if(! $customers){
            return response()->json([
                'message' => 'user not found'
            ],404);
        }

        return response()->json([
            'data' =>  $customers
        ],200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserStoreRequest $request,$id){

        try {
            $customers = Customer::find($id);
            if(!$customers){
                return response()->json([
                    'message' => 'User not found!'
                ],404);
            }

            $customers->name = $request->name;
            $customers->email = $request->email;
            $customers->contact = $request->contact;

            $customers->save();

            return response()->json([
                'message' => 'User successfully updated'
            ],200);

        } catch (\Exception $e) {
            return response()->json([
                'message' => "Something went wrong!"
            ],500);
        }
    }

    public function delete($id){

        $customers = Customer::find($id);
        if(! $customers ){
            return  response()->json([
                'message' => 'User not found!'
            ],404);
        }

        $customers->delete();

        return response()->json([
            'message' => 'user succesfully deleted'
        ],200);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
