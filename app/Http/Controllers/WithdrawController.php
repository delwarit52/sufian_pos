<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

use App\Models\WithdrawModel;

class WithdrawController extends Controller
{
    public function index(){
        $users = User::latest()->get();
        // $users = User::join('withdraw_models', 'users.id', '=', 'withdraw_models.user_id')
        //        ->get();
        return view('admin.withdrawlist',['users' => $users]);
        // return view('admin.adminlist');
    }

    public function amountadd($id ,Request $request)
    {
        $request->validate([
            'amount' => ['required'],
            'password' => ['required', 'string', 'confirmed'],
        ]);

        if (Auth::user()->type == 0) {

            if (Hash::check($request->password, Auth::user()->password)) {
                $withdraw = new WithdrawModel();
                $withdraw->user_id = $id;
                $withdraw->amount = $request->amount;
                $withdraw->save();
            }

            
        }

        return redirect()->back();

    }



    public function create(Request $request)
    {   

        // return $request->all();
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'unique:users'],
            'profit_percentage' => ['required'],
            'password' => ['required', 'string', 'confirmed'],
        ]);

        

        $fileNameToStore = "";
        
        if(request()->hasFile('profile_photo_path')){
    		// Get filename with the extension
            $filenameWithExt = $request->file('profile_photo_path')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('profile_photo_path')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= 'profile-photos/'.$filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('profile_photo_path')->storeAs('public', $fileNameToStore);
    	}

        

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->type = $request->user_type;
        $user->profit_percentage = $request->profit_percentage;
        $user->profile_photo_path = $fileNameToStore;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('success');
        
    }

    public function delete($id)
    {
		WithdrawModel::find($id)->delete();
        return redirect()->back();
        
    }

    

    


    
    
}