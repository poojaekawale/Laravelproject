<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    //
    function login(Request $req)
    {
        $data=$req->input();
        $req->session()->put('employee',$data['email']);
        
        $employee= Employee::where(['email'=>$req->email])->first();
        if(!$employee || !Hash:: check($req->password,$employee->password))
        {
     
         return redirect('/')->with('message','Username and Password Not Matched Or User Does Not Exists');
     
        }else{
         
            return redirect('dashboard');
        }
    }
    function register(Request $req)
    {
       
        $employee= new Employee;
        $employee->name=$req->name;
        $employee->mobileno=$req->mobileno;
        $employee->email=$req->email;
        $employee->password=Hash::make($req->password);
        $employee->save();
        return redirect('/')->with('message','Registration Completed');
    }
    function logout(Request $req)
    {
        $req->session()->forget('email');
        $req->session()->forget('password');
        return redirect('/');
    }
}
