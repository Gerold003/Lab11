<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('dependents', function (Blueprint $table) {
            $table->integer('dependent_id')->primary();
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('relationship', 25);
            $table->integer('employee_id');
            $table->foreign('employee_id')->references('employee_id')->on('employees');
        });
    }

    public function down()
    {
        Schema::dropIfExists('dependents');
    }
};