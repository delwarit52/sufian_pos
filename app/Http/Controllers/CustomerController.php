<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PackageModel;
use Illuminate\Http\Request;
use App\Models\CustomerModel;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function index(){
        return view('customer.customerform',[
            'packages' => PackageModel::all(),
        ]);
    }

    public function view(){
        return view('admin.customerform',[
            'customer_froms' => CustomerModel::all(),
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        CustomerModel::create($this->validation());
        return redirect()->route('customer.form')->with('succsess', 'add successfully');
    }

    public function validation()
    {
        return request()->validate([
            'package_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'nid' => 'required',
            'ponmac' => 'required',
            'routeid' => 'required',
            'address' => 'required',
        ]);
    }

    public function customerregister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'user_id' => 'required',
            'password' => 'required',
        ]);
        
        User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->user_id,
            'password' => Hash::make($request->password),
        ]);

        CustomerModel::find($request->id)->update([
            'user_id' => $request->user_id,
            'status' => 2,
        ]);
        return redirect()->route('customer.form.view')->with('succsess', 'add successfully');
    }

    public function customeractive($id)
    {
        CustomerModel::find($id)->update([
            'status' => 3,
        ]);
        return back()->with('succsess', 'add successfully');
    }

    public function customerinactive($id)
    {
        CustomerModel::find($id)->update([
            'status' => 2,
        ]);
        return back()->with('succsess', 'add successfully');
    }

    public function customerdelete($id)
    {
        CustomerModel::where('user_id', $id)->delete();
        User::where('email',$id)->delete();
        return back()->with('succsess', 'add successfully');
    }
}
