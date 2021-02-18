<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\AuthorityController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('admindashboard');
// })->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::post('/get/filter/date', [DashboardController::class, 'filterdate']);


Route::get('/customerdashboard', function () {
    return view('customerdashboard');
})->name('customer.dashboard');


// Package Route 
Route::get('/package', [PackageController::class, 'index'])->name('package');
Route::post('/package/store', [PackageController::class, 'store'])->name('package.store');
Route::post('/package/update', [PackageController::class, 'update'])->name('package.update');
Route::get('/package/delete/{id}', [PackageController::class, 'delete'])->name('package.delete');

// Expense Route 
Route::get('/expense', [ExpenseController::class, 'index'])->name('expense');
Route::post('/expense/store', [ExpenseController::class, 'store'])->name('expense.store');
Route::post('/expense/update/{id}', [ExpenseController::class, 'update'])->name('expense.update');
Route::get('/expense/delete/{id}', [ExpenseController::class, 'delete'])->name('expense.delete');

// Customet Registration Form 
Route::get('/customer/form', [CustomerController::class, 'index'])->name('customer.form');
Route::post('/customer/form/post', [CustomerController::class, 'store'])->name('customer.form.post');
Route::get('/customer/alllist', [CustomerController::class, 'customerall'])->name('customer.alllist');
Route::get('/customer/newlist', [CustomerController::class, 'customernewlist'])->name('customer.newlist');
Route::get('/customer/activelist', [CustomerController::class, 'customeractivelist'])->name('customer.activelist');
Route::get('/customer/inactivelist', [CustomerController::class, 'customerinactivelist'])->name('customer.inactivelist');
Route::post('/customer/register', [CustomerController::class, 'customerregister'])->name('customer.register');
Route::get('/customer/active/{id}', [CustomerController::class, 'customeractive'])->name('customer.active');
Route::get('/customer/inactive/{id}', [CustomerController::class, 'customerinactive'])->name('customer.inactive');
Route::get('/customer/delete/{id}', [CustomerController::class, 'customerdelete'])->name('customer.delete');

// Admin Route 
Route::get('/adminlist' , [AuthorityController::class , 'index'])->name('adminlist');
Route::post('/createadmin' , [AuthorityController::class , 'create'])->name('create.newadmin');
Route::post('/editadmin/{id}' , [AuthorityController::class , 'edit'])->name('admin.edit');
Route::get('/deleteadmin/{id}' , [AuthorityController::class , 'delete'])->name('admin.delete');
