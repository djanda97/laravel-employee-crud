<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('emp_id');
            $table->string('name_prefix');
            $table->string('first_name');
            $table->char('middle_initial', 1);
            $table->string('last_name');
            $table->char('gender', 1);
            $table->string('email');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('mother_maiden_name');
            // $table->date('date_of_birth');
            // $table->date('date_of_joining');
            $table->string('date_of_birth');
            $table->string('date_of_joining');
            $table->integer('salary');
            $table->string('ssn');
            $table->string('phone_no');
            $table->string('city');
            $table->char('state', 2);
            $table->integer('zip');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
