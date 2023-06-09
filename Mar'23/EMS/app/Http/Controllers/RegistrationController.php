<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Customer;

class RegistrationController extends Controller
{
    function index()
    {
        return view('form');
    }
    public function register(Request $req)
    {
        $req->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'pass' => 'required',
                'confirm_pass' => 'required|same:pass'
            ]
        );
        print_r($req->all());
    }
    public function store(Request $req)
    {
        $customer = new Customer;
        $customer->name = $req['name'];
        $customer->email = $req['email'];
        $customer->address = $req['address'];
        $customer->password = md5($req['password']);
        if ($customer->save()) {
            echo "INSERT";
            return redirect('/customer/view');
        } else
            echo "NOT INSERT";
    }

    public function view()
    {
        $customers = Customer::all();
        $data = compact('customers');
        return view('cust-view')->with($data);
    }
    public function delete($id)
    {

        $customer = Customer::find($id);
        if (!is_null($customer)) {
            $customer->delete();
        }
        print_r($customer);
        return redirect('customer');
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        if (is_null($customer)) {
            return view("form");
        } else {
            $url = url('/customer/update').'/'.$id;
            $customer_data = compact('customer');
            return view('cust-view')->with($customer_data);
        }
    }
}
