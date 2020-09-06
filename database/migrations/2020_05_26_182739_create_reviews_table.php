<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('reviews', function (Blueprint $table) {
                   $table->increments('review_id');
                   $table->string('reviewer_name', 50);
                   $table->text('reviewer_text');
                   $table->date('reviewer_date');
                   $table->integer('mark');
         });
     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
