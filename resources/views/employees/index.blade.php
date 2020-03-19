@extends('layouts.app')

@section('title', 'Laravel Backend Case Study')

@section('tableName', 'Employees')

@section('content')
    {{-- <style>
        a { text-decoration: none }
    </style> --}}

    {{-- @if(count($employees) > 0) --}}
        {{-- <script>
            // let employees = 
            const showTable = (employees) => {
                let table = document.getElementById("employee-table");
                console.log(employees);
            }
        </script> --}}

         <table class="table table-hover table-bordered" id="employee-table">
            {{-- <script>showTable({{$employees}})</script> --}}
            <thead>
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                    <tr>
                        <td>
                            <a href="/employees/{{$employee->id}}">
                                {{$employee->first_name}}
                            </a>
                        </td>

                        <td>
                            <a href="/employees/{{$employee->id}}">
                                {{$employee->last_name}}
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    {{-- @else
        <p>No employees found.</p>
    @endif --}}

    <script>
        let table = document.getElementById("employee-table");
        for (let i = 0; i < table.rows.length; i++) {
            table.rows[i].addEventListener("click", function() {
                location.href = "/employees/{{$employee->id}}";
            });
        }
    </script>
@endsection
