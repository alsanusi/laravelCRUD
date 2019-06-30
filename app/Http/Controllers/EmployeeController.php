<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;
use App\Employee;
use File;

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
        // $path = '/uploads/employee/';
        // $files =  Storage::files($path);
        // return $files;
    }

    public function edit($id)
    {
        $employees = Employee::find($id);
        echo $employees_img = $employees->image;
        return view('employeeedit')->with('employees', $employees);
    }

    public function update(Request $request, $id)
    {
        $employees = Employee::find($id);

        $employees->name = $request->input('name');
        $employees->email = $request->input('email');
        $employees->post = $request->input('post');
        //
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //Getting Image Extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/employee/', $filename);
            $employees->image = $filename;
        }

        $employees->save();

        return view('employee')->with('employees', $employees);
    }

    public function delete($id)
    {
        $employees = Employee::find($id);
        $employees_img = $employees->image;
        $file_path = public_path("uploads/employee/".$employees_img); 
        if(File::exists($file_path)){
            File::delete($file_path);
            $employees->delete();
        }
        return view('employee')->with('employees', $employees);
    }
}
