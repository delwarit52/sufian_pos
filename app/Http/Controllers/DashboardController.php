<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use App\Models\PackageModel;
use App\Models\InvoiceModel;
use App\Models\ExpenseModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('admindashboard',[
            'customers' =>CustomerModel::count(),
            'packages' =>PackageModel::count(),
            'active_customers' =>CustomerModel::where('status',2)->count(),
            'inactive_customers' =>CustomerModel::where('status', '!=' ,2)->count(),
            'total_incomes' =>InvoiceModel::sum('package_price'),
            'total_cost' =>ExpenseModel::sum('amount'),
            'invoices' =>InvoiceModel::count(),
        ]);
    }

    public function filterdate(Request $request){
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $dashboard_data = [
            'customers' => CustomerModel::whereBetween('created_at', [$start_date, $end_date])->count(),
            'packages' => PackageModel::whereBetween('created_at', [$start_date, $end_date])->count(),
            'active_customers' => CustomerModel::where('status', 2)->whereBetween('created_at', [$start_date, $end_date])->count(),
            'inactive_customers' => CustomerModel::where('status', '!=', 2)->whereBetween('created_at', [$start_date, $end_date])->count(),
            'invoices' => InvoiceModel::whereBetween('created_at', [$start_date, $end_date])->count(),
            'total_incomes' => InvoiceModel::whereBetween('created_at', [$start_date, $end_date])->sum('package_price'),
            'total_cost' => ExpenseModel::whereBetween('created_at', [$start_date, $end_date])->sum('amount'),
        ];
        return $dashboard_data;
    }
}
