<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::all();
        return view('employees.index', ['employees' => $employees]);
    }

    public function create(){
        return view('employees.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => ['required','unique:users'],
            'profession' => 'required',
            'salary' => 'required|decimal:2',
        ]);

        $newEmployee = Employee::create($data);
            return redirect(route('employee.index'));
    }

    public function edit(Employee $employee){
        return view('employees.edit', ['employee' => $employee]);
    }

    public function update(Employee $employee, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => ['required','unique:users'],
            'profession' => 'required',
            'salary' => 'required|decimal:2',
        ]);

        $employee->update($data);
        return redirect(route('employee.index'))->with('success', 'Employee Updated Succesffully');
    }

    public function delete(Employee $employee){
        $employee->delete();
        return redirect(route('employee.index'))->with('success', 'Employee deleted Succesffully');
    }
}