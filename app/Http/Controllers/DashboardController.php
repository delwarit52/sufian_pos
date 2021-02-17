<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use App\Models\PackageModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('admindashboard',[
            'customers' =>CustomerModel::count(),
            'packages' =>PackageModel::count(),
            'active_customers' =>CustomerModel::where('status',2)->count(),
            'inactive_customers' =>CustomerModel::where('status',1)->count(),
        ]);
    }
}
