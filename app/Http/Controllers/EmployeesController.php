<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeesController extends Controller
{
    private $validationRules;

    private function setFields($employee, $request)
    {
        $employee->emp_id = $request->input('emp_id');
        $employee->name_prefix = $request->input('name_prefix');
        $employee->first_name = $request->input('first_name');
        $employee->middle_initial = $request->input('middle_initial');
        $employee->last_name = $request->input('last_name');
        $employee->gender = $request->input('gender');
        $employee->email = $request->input('email');
        $employee->father_name = $request->input('father_name');
        $employee->mother_name = $request->input('mother_name');
        $employee->mother_maiden_name = $request->input('mother_maiden_name');
        $employee->date_of_birth = $request->input('date_of_birth');
        $employee->date_of_joining = $request->input('date_of_joining');
        $employee->salary = $request->input('salary');
        $employee->ssn = $request->input('ssn');
        $employee->phone_no = $request->input('phone_no');
        $employee->city = $request->input('city');
        $employee->state = $request->input('state');
        $employee->zip = $request->input('zip');
        $employee->save();
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
        $this->validationRules = [
            'emp_id' => ['required', 'integer'],
            'name_prefix' => ['required', 'string'],
            'first_name' => ['required', 'alpha'],
            'middle_initial' => ['required', 'alpha', 'max:1'],
            'last_name' => ['required', 'alpha'],
            'gender' => ['required', 'alpha', 'max:1'],
            'email' => ['required', 'email'],
            'father_name' => ['required', 'string'],
            'mother_name' => ['required', 'string'],
            'mother_maiden_name' => ['required', 'alpha'],
            'date_of_birth' => ['required', 'date_format:n/j/Y'],
            'date_of_joining' => ['required', 'date_format:n/j/Y'],
            'salary' => ['required', 'integer'],
            'ssn' => ['required', 'alpha_dash'],
            'phone_no' => ['required', 'alpha_dash'],
            'city' => ['required', 'alpha'],
            'state' => ['required', 'alpha'],
            'zip' => ['required', 'integer']
        ];
    }

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
        $this->validate($request, $this->validationRules);
        $employee = new Employee;
        $this->setFields($employee, $request);
        return redirect('/employees')->with('success', 'Employee Added');
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
        $this->validate($request, $this->validationRules);
        $employee = Employee::find($id);
        $this->setFields($employee, $request);
        return redirect('/employees' . '/' . $id)->with('success', 'Employee Updated');
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
        return redirect('/employees')->with('success', 'Employee Deleted');
    }
}
