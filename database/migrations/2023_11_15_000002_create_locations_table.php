<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->integer('location_id')->primary();
            $table->string('street_address', 40);
            $table->string('postal_code', 12);
            $table->string('city', 30);
            $table->string('state_province', 25);
            $table->char('country_id', 2);
            $table->foreign('country_id')->references('country_id')->on('countries');
        });
    }

    public function down()
    {
        Schema::dropIfExists('locations');
    }
};