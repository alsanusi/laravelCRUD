<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    //
    public function index()
    {
        return view('employee');
    }
    //
    public function store(Request $request)
    {
        $employee = new Employee();
        //
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->post = $request->input('post');
        //
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //Getting Image Extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/employee/', $filename);
            $employee->image = $filename;
        } else {
             return $request;
             $employee->image = '';
        }

        $employee->save();

        return view('employee')->with('employee', $employee);
    }

    public function display()
    {
        $employees = Employee::all();
        return view('employeeview')->with('employees', $employees);
    }
}
