@extends('layouts.app')

@section('content')
    @if($employee)
        <h3>Detailed Employee Information for {{$employee->first_name . " " . $employee->last_name}}</h3>

        <script>
            const showTable = () => {
                let table = document.getElementById("employee-table-detailed");

                let employee_data = [
                    { key: "Emp ID", value: "{{$employee->emp_id}}" },
                    { key: "Name Prefix", value: "{{$employee->name_prefix}}" },
                    { key: "First Name", value: "{{$employee->first_name}}" },
                    { key: "Middle Initial", value: "{{$employee->middle_initial}}" },
                    { key: "Last Name", value: "{{$employee->last_name}}" },
                    { key: "Gender", value: "{{$employee->gender}}" },
                    { key: "E Mail", value: "{{$employee->email}}" },
                    { key: "Father's Name", value: "{{$employee->father_name}}" },
                    { key: "Mother's Name", value: "{{$employee->mother_name}}" },
                    { key: "Mother's Maiden Name", value: "{{$employee->mother_maiden_name}}" },
                    { key: "Date of Birth", value: "{{$employee->date_of_birth}}" },
                    { key: "Date of Joining", value: "{{$employee->date_of_joining}}" },
                    { key: "Salary", value: "{{$employee->salary}}" },
                    { key: "SSN", value: "{{$employee->ssn}}" },
                    { key: "Phone No.", value: "{{$employee->phone_no}}" },
                    { key: "City", value: "{{$employee->city}}" },
                    { key: "State", value: "{{$employee->state}}" },
                    { key: "Zip", value: "{{$employee->zip}}" }
                ];
                
                employee_data.forEach(object => {
                    let row = table.insertRow(-1);
                    let cells = [row.insertCell(0), row.insertCell(1)];
                    cells[0].appendChild(document.createTextNode(object.key));
                    cells[1].appendChild(document.createTextNode(object.value));
                });
            }
        </script>

        <table class="table table-hover table-bordered" id="employee-table-detailed">
            <script>showTable()</script> 
        </table>
    @else
        <p>No employee found</p>
    @endif
@endsection
