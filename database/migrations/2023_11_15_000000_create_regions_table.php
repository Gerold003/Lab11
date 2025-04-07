<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->integer('region_id')->primary();
            $table->string('region_name', 25);
        });
    }

    public function down()
    {
        Schema::dropIfExists('regions');
    }
};
