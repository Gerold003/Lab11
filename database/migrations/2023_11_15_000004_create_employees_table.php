<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->integer('employee_id')->primary();
            $table->string('first_name', 20);
            $table->string('last_name', 25);
            $table->string('email', 100);
            $table->string('phone_number', 20);
            $table->date('hire_date');
            
            // Make sure this matches the jobs table definition
            $table->integer('job_id')->unsigned();
            
            $table->decimal('salary', 8, 2);
            $table->integer('manager_id')->nullable();
            $table->integer('department_id');
            $table->foreign('job_id')->references('job_id')->on('hr_jobs');
            
            // Add these AFTER creating all tables
        });
    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
};