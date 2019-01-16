<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * Name_ar Name_en, image, title_ar_en, start_date_end, activity
     */
    public function up()
    {
        Schema::create('expositions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name_ar');
            $table->string('Name_en');
            $table->string('image');
            $table->string('title_ar');
            $table->string('title_en');
            $table->date('start_date');
            $table->date('date_end');
            $table->boolean('activity');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('category_expositions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expositions');
    }
}
