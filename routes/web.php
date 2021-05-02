<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ClientController;
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
    return view('login');
});
Route::post("/login",[EmployeeController::class,'login']);
Route::post("/register",[EmployeeController::class,'register']);
Route::view('/register','register');
Route::view('dashboard','dashboard');
Route::get('/logout',[EmployeeController::class,'logout']);
Route::resource('clients', ClientController::class);
Route::get('login',function()
{
    if(session()->has('employee'))
    {
        return redirect('dashboard');
    }
    return view('login');
});
Route::get('/logout',function()
{
    if(session()->has('employee'))
    {
        session()->pull('employee');
    }
    return redirect('/login');
});