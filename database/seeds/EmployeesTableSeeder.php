<?php

use App\Employee;
use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $headerRow = true;
        if (($handle = fopen(base_path() . '/employee_data.csv', 'r' )) !== FALSE) {
            while (($data = fgetcsv ($handle, 1000, ',' )) !== FALSE ) {
                if ($headerRow) {
                    $headerRow = false;
                    continue;
                }
                $employee = new Employee();
                $employee->emp_id = $data[0];
                $employee->name_prefix = $data[1];
                $employee->first_name = $data[2];
                $employee->middle_initial = $data[3];
                $employee->last_name = $data[4];
                $employee->gender = $data[5];
                $employee->email = $data[6];
                $employee->father_name = $data[7];
                $employee->mother_name = $data[8];
                $employee->mother_maiden_name = $data[9];
                $employee->date_of_birth = $data[10];
                $employee->date_of_joining = $data[11];
                $employee->salary = $data[12];
                $employee->ssn = $data[13];
                $employee->phone_no = $data[14];
                $employee->city = $data[15];
                $employee->state = $data[16];
                $employee->zip = $data[17];
                $employee->save();
            }
            fclose ($handle);
	    }
    }
}
