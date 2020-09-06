<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parts', function (Blueprint $table) {
                $table->increments('part_id');
                $table->string('part_name', 50);
                $table->string('part_code', 35);
                $table->integer('cat_id');
                $table->integer('car_id');
                $table->integer('part_cost');
                $table->string('part_description', 120);
                $table->integer('part_amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parts');
    }
}
