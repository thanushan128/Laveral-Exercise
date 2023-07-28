<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function create(){
        return view('create_employee');
    }

    public function store(Request $request){
        $data = $request->only(['name','age','phone']);
        $employee = Employee::create($data);
        // $name = $request->input('name');
        // $age = $request->input('age');
        // $phone = $request->input('phone');

        // $employee = new Employee;
        // $employee->name=$name;
        // $employee->age = $age;
        // $employee->phone = $phone;

        // $employee->save();

        return 'Employee has been created and Employee ID is '.$employee->id;
    }

    public function list(){
        $employees = Employee::all();
        return view('list_employee',['employees'=> $employees]);
    }

    public function edit($id){
        $employee = Employee::find($id);
        return view('edit_employee',['employee'=>$employee]);
    }

    public function update(Request $request, $id){
        $employee = Employee::find($id);
        $employee->name = $request->input('name');
        $employee->age = $request->input('age');
        $employee->phone = $request->input('phone');
        $employee->save();
        return 'Employee Updated Sucessfully! <a href="'.url('list').'">Click here to see the list</a>';
    }

    public function delete($id){
        $employee = Employee::find($id);
        $employee->delete();
        return 'Employee record delete Sucessfully! <a href="' . url('list') . '">Click here to see the list</a>';
    }
}
