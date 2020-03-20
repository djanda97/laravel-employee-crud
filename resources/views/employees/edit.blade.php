@extends("layouts.app")

@section("content")
    @if($employee)
        <h3>
            Edit Info for {{$employee->first_name . " " . $employee->last_name}}
        </h3>
        <br />
        <script>
            const labels = [
                "Emp ID",
                "Name Prefix",
                "First Name",
                "Middle Initial",
                "Last Name",
                "Gender",
                "E Mail",
                "Father's Name",
                "Mother's Name",
                "Mother's Maiden Name",
                "Date of Birth",
                "Date of Joining",
                "Salary",
                "SSN",
                "Phone No.",
                "City",
                "State",
                "Zip"
            ];
            
            const fields = [
                "emp_id",
                "name_prefix",
                "first_name",
                "middle_initial",
                "last_name",
                "gender",
                "email",
                "father_name",
                "mother_name",
                "mother_maiden_name",
                "date_of_birth",
                "date_of_joining",
                "salary",
                "ssn",
                "phone_no",
                "city",
                "state",
                "zip"
            ];
            
            const data = [
                "{{$employee->emp_id}}",
                "{{$employee->name_prefix}}",
                "{{$employee->first_name}}",
                "{{$employee->middle_initial}}",
                "{{$employee->last_name}}",
                "{{$employee->gender}}",
                "{{$employee->email}}",
                "{{$employee->father_name}}", 
                "{{$employee->mother_name}}",
                "{{$employee->mother_maiden_name}}",
                "{{$employee->date_of_birth}}",
                "{{$employee->date_of_joining}}",
                "{{$employee->salary}}",
                "{{$employee->ssn}}",
                "{{$employee->phone_no}}",
                "{{$employee->city}}",
                "{{$employee->state}}",
                "{{$employee->zip}}"
            ];
            
            const showForm = (id) => {
                let form = document.getElementById(id);

                for (let i = 0; i < labels.length; i++) {
                    let div = document.createElement("div");
                    div.class = "form-group";
                    let label = document.createTextNode(labels[i] + ":");
                    div.appendChild(label);
                    let br = document.createElement("br");
                    div.appendChild(br);
                    let input = document.createElement("input");
                    input.type = "text";
                    input.name = fields[i];
                    input.id = fields[i];
                    input.class = "form-control";
                    input.value = data[i];
                    div.appendChild(input);
                    form.appendChild(div);
                }
            }
        </script>

        <form
            action="/employees/{{$employee->id}}"
            method="POST"
            id="employee-form">
            @csrf
            @method("PUT")
            <script>showForm("employee-form")</script>
            <br />
            <button
                type="submit"
                class="btn btn-primary btn-space">
                Submit
            </button>
        </form>
    @endif
@endsection
