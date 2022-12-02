<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function create()
    {
        $customer=false;
        $url = url("/customer");
        $title = "Customer Registration";
        $data = compact("url", "title","customer");
        // print_r($data);
        // die;
        return view("customers")->with($data);
    }
    public function store(Request $request)
    {
        echo "<pre>";
        print_r($request->all());
        $customer = new Customer;
        $customer->name = $request["name"];
        $customer->email = $request["email"];
        $customer->gender = $request["gender"];
        $customer->address = $request["address"];
        $customer->state = $request["state"];
        $customer->country = $request["country"];
        $customer->dob = $request["dob"];
        $customer->password = md5($request["password"]);
        $customer->save();
        return redirect("/customer");
    }
    public function view()
    {
        $customers = Customer::all();
        $data = compact("customers");
        return view("customer-view")->with($data);
    }
    public function delete($id)
    {
        $customer = Customer::find($id);
        if (!is_null($customer)) {
            $customer->delete();
        }
        return redirect("/customer");
    }
    public function edit($id)
    {
        $customer = Customer::find($id);
        if (is_null($customer)) {
            return redirect("/customer");
        } else {
            $title = "Update Registration";
            $url = url('/customer/update') . "/" . $id;
            $data = compact("customer", "url", "title");
            return view("customers")->with($data);
        }
    }
    public function update($id,Request $request)
    {
        $customer = Customer::find($id);
        $customer->name = $request["name"];
        $customer->email = $request["email"];
        $customer->gender = $request["gender"];
        $customer->address = $request["address"];
        $customer->state = $request["state"];
        $customer->country = $request["country"];
        $customer->dob = $request["dob"];
        
        $customer->save();
        return redirect("/customer");
    }
}


