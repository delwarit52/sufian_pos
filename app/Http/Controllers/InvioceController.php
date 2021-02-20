<?php

namespace App\Http\Controllers;

use App\Models\InvoiceModel;
use Illuminate\Http\Request;

class InvioceController extends Controller
{
    public function index(){
        return view('invioce',[
            'total_invioce' => InvoiceModel::all(),
        ]);
    }

    public function singleinvioce($id){
        return view('singleinvioce',[
            'single_invioces' => InvoiceModel::find($id)->first(),
        ]);
    }
}
