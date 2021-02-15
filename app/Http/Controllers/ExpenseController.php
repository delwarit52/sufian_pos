<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ExpenseModel;

class ExpenseController extends Controller
{
    public function index()
    {
        return view('admin.expense', [
            'expenses' => ExpenseModel::all(),
        ]);
    }


    public function store(Request $request)
    {
        ExpenseModel::create($this->validation());
        return redirect()->route('expense')->with('succsess', 'add successfully');
    }


    public function update($id)
    {
        ExpenseModel::find($id)->update($this->validation());
        return redirect()->route('expense')->with('succsessedit', 'update successfully');
    }

    public function delete($id)
    {
        ExpenseModel::find($id)->Delete();
        return redirect()->route('expense')->with('succsessdelete', 'delete successfully');
    }


    public function validation()
    {
        return request()->validate([
            'purpose' => 'required',
            'amount' => 'required',
        ]);
    }
}
