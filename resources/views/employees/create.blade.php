@extends("layouts.app")

@section("content")
    <h3>Add Employee</h3>
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
        
        const validFormat = [
            "integer",
            "string",
            "alpha",
            "alpha",
            "alpha",
            "alpha",
            "email",
            "string",
            "string",
            "alpha",
            "date_format:n/j/Y",
            "date_format:n/j/Y", 
            "integer",
            "alpha_dash",
            "alpha_dash",
            "alpha",
            "alpha",
            "integer"
        ];
        
        const old_data = [
            "{{old('emp_id')}}",
            "{{old('name_prefix')}}",
            "{{old('first_name')}}",
            "{{old('middle_initial')}}",
            "{{old('last_name')}}",
            "{{old('gender')}}",
            "{{old('email')}}",
            "{{old('father_name')}}",
            "{{old('mother_name')}}",
            "{{old('mother_maiden_name')}}",
            "{{old('date_of_birth')}}",
            "{{old('date_of_joining')}}",
            "{{old('salary')}}",
            "{{old('ssn')}}",
            "{{old('phone_no')}}",
            "{{old('city')}}",
            "{{old('state')}}",
            "{{old('zip')}}"
        ];

        const showFields = (id) => {
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
                if (old_data[i] === "") {
                    input.placeholder = validFormat[i];
                } else {
                    input.value = old_data[i];
                }
                div.appendChild(input);
                form.appendChild(div);
            }
        }
    </script>

    <form action="/employees" method="POST" id="employee-form">
        @csrf
        <script>showFields("employee-form")</script>
        <br />
        <button type="submit" class="btn btn-primary btn-space">Submit</button>
    </form>
@endsection
