<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->integer('department_id')->primary();
            $table->string('department_name', 30);
            $table->integer('location_id');
            $table->foreign('location_id')->references('location_id')->on('locations');
        });
    }

    public function down()
    {
        Schema::dropIfExists('departments');
    }
};