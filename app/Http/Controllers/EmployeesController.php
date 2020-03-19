<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeesController extends Controller
{
    /**
     * Constructor
     */
    // public function __construct() {
    //     $this->middleware('auth')->except(['index', 'show']);
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return 'index';
        $employees = Employee::all()->sortBy('last_name');
        return view('employees.index')->with('employees', $employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(([
            'emp_id' => ['required'],
            'name_prefix' => ['required'],
            'first_name' => ['required'],
            'middle_initial' => ['required'],
            'last_name' => ['required'],
            'gender' => ['required'],
            'email' => ['required'],
            'father_name' => ['required'],
            'mother_name' => ['required'],
            'mother_maiden_name' => ['required'],
            'date_of_birth' => ['required'],
            'date_of_joining' => ['required'],
            'salary' => ['required'],
            'ssn' => ['required'],
            'phone_no' => ['required'],
            'city' => ['required'],
            'state' => ['required'],
            'zip' => ['required']
        ]));
        
        // $this->validate($request, [

        // ]);

        return "<pre>" . print_r($request) . "</pre>";

        // return $request->input('emp_id');

        // $employee = new Employee;
        // $employee->emp_id = $request->input('emp_id');
        // $employee-> = $request->input('name_prefix');
        // $employee-> = $request->input('first_name');
        // $employee-> = $request->input('middle_initial');
        // $employee-> = $request->input('last_name');
        // $employee-> = $request->input('gender');
        // $employee-> = $request->input('email');
        // $employee-> = $request->input('father_name');
        // $employee-> = $request->input('mother_name');
        // $employee-> = $request->input('mother_maiden_name');
        // $employee-> = $request->input('date_of_birth');
        // $employee-> = $request->input('date_of_joining');
        // $employee-> = $request->input('salary');
        // $employee-> = $request->input('ssn');
        // $employee-> = $request->input('phone_no');
        // $employee-> = $request->input('city');
        // $employee-> = $request->input('state');
        // $employee-> = $request->input('zip');
        // $employee->save();

        // return redirect('/employees');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::find($id);
        return view('employees.show')->with('employee', $employee);
        // return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('employees.edit')->with('employee', $employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         // $employee = Employee::find($id);
        // $employee->emp_id = $request->input('emp_id');
        // $employee-> = $request->input('name_prefix');
        // $employee-> = $request->input('first_name');
        // $employee-> = $request->input('middle_initial');
        // $employee-> = $request->input('last_name');
        // $employee-> = $request->input('gender');
        // $employee-> = $request->input('email');
        // $employee-> = $request->input('father_name');
        // $employee-> = $request->input('mother_name');
        // $employee-> = $request->input('mother_maiden_name');
        // $employee-> = $request->input('date_of_birth');
        // $employee-> = $request->input('date_of_joining');
        // $employee-> = $request->input('salary');
        // $employee-> = $request->input('ssn');
        // $employee-> = $request->input('phone_no');
        // $employee-> = $request->input('city');
        // $employee-> = $request->input('state');
        // $employee-> = $request->input('zip');
        // $employee->save();

        // return redirect('/employees');

        return 'Successfully editted employee with id: ' . $id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect('/employees');
    }
}
