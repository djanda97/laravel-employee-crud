<!-- Stored in resources/views/table.blade.php -->

@extends('layouts.app')

@section('title', 'Laravel Backend Case Study')

@section('tableName', 'Employees Table')

@section('content')
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col">Emp ID</th>
                <th scope="col">Name Prefix</th>
                <th scope="col">First Name</th>
                <th scope="col">Middle Initial</th>
                <th scope="col">Last Name</th>
                <th scope="col">Gender</th>
                <th scope="col">E Mail</th>
                <th scope="col">Father's Name</th>
                <th scope="col">Mother's Name</th>
                <th scope="col">Mother's Maiden Name</th>
                <th scope="col">Date of Birth</th>
                <th scope="col">Date of Joining</th>
                <th scope="col">Salary</th>
                <th scope="col">SSN<th>
                <th scope="col">Phone No.</th>
                <th scope="col">City</th>
                <th scope="col">State</th>
                <th scope="col">Zip</th>
            </tr>
        </thead>
        {{-- <tbody>
            @foreach($employees as $employee)
            <tr>
                <th scope="row">{{$employee->id}}</td>
                <td>{{$employee->firstname}}</td>
                <td>{{$employee->lastname}}</td>
                <td>{{$employee->email}}</td>
                <td>{{$employee->gender}}</td>
            </tr>
            @endforeach
        </tbody> --}}
    </table>

    {{-- <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table> --}}
@endsection
