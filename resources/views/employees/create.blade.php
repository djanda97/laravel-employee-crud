@extends("layouts.app")

@section("content")
    <h3>Add Employee</h3>
    <br />

    <script>
        const showFields = () => {
            let labels = ["Emp ID", "Name Prefix", "First Name", "Middle Initial", "Last Name", "Gender", "E Mail", "Father's Name", "Mother's Name", "Mother's Maiden Name", "Date of Birth", "Date of Joining", "Salary", "SSN", "Phone No.", "City", "State", "Zip"]

            let fields = ["emp_id", "name_prefix", "first_name", "middle_initial", "last_name", "gender", "email", "father_name", "mother_name", "mother_maiden_name", "date_of_birth", "date_of_joining", "salary", "ssn", "phone_no", "city", "state", "zip"];
            
            let form = document.getElementById("employee-form");

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
                div.appendChild(input);
                form.appendChild(div);
            }
        }
    </script>

    <form action="/employees" method="POST" id="employee-form">
        @csrf
        <script>showFields()</script>
        <br />
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
