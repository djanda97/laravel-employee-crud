<!-- Stored in resources/views/layouts/app.blade.php -->

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        

        <title>@yield('title')</title>
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="/employees">
                    Laravel Backend Case Study
                </a>
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="/employees/create">
                            Add Employee
                        </a>
                    </div>
            </nav>

            <br />

            <h3>@yield('tableName')</h3>

            <br />

            @yield('content')
        </div>

        {{-- <script>
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
        </script> --}}

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
