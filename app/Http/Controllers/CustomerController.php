<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;

class CustomerController extends Controller
{
    public function create(){
        return view('customer');
    }
    public function store(Request $request){
        // echo '<pre>';
        // print_r($request->all());
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required',
                'gender' =>'required'
            ]
        );
        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];
        $customer->dob = $request['dob'];
        $customer->password = password_hash($request['password'],PASSWORD_DEFAULT);
        $customer->save();

        return redirect('/customer/view');
    }

    public function view(){
        $customer = Customer::all();
        $data = compact('customer');
        return view('customerView')->with($data);
    }
}
