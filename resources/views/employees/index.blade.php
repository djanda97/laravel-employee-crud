@extends('layouts.app')

@section('title', 'Laravel Backend Case Study')

@section('content')
    <script>
        const makeRowClickable = (id) => {
            let row = document.getElementById('employee-' + id);
            row.addEventListener("click", function() {
                window.location = "/employees/" + id;
            });
        }
    </script>

    <h3>Employees</h3>

    @if(Auth::check())
        <form action="/employees/create" method="GET">
            @csrf
            <button type="submit" class="btn btn-success btn-space float-right">
                Add Employee
            </button>
        </form>
    @endif

    @if(count($employees) > 0)
         <table class="table table-hover table-bordered" id="employee-table">
            <thead>
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                    <tr id="employee-{{$employee->id}}">
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
                    <script>
                        makeRowClickable({{$employee->id}})
                    </script>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No employees found.</p>
    @endif
@endsection
