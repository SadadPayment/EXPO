<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryExpositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * Name_ar_en, description_ar_en
     */
    public function up()
    {
        Schema::create('category_expositions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name_ar');
            $table->string('Name_en');
            $table->string('description_ar');
            $table->string('description_en');
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
        Schema::dropIfExists('category_expositions');
    }
}
