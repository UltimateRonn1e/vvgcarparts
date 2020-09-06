<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autos', function (Blueprint $table) {
            $table->increments('auto_id');
            $table->string('auto_name', 35);
            $table->string('auto_model', 35);
            $table->string('auto_bodytype', 40);
            $table->string('auto_fueltype', 20);
            $table->string('auto_transmissiontype', 20);
            $table->integer('auto_year');
            $table->string('auto_drivetype', 20);
            $table->string('auto_photo', 250);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autos');
    }
}
