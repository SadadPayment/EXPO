<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * Name_ar_en, image, phone, website, products_ar_en, activity_ar_en, email, country, fax, address, (1-6)
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name_ar');
            $table->string('Name_en');
            $table->string('image');
            $table->string('phone');
            $table->string('fax');
            $table->string('email');
            $table->string('country');
            $table->string('address');
            $table->string('website');
            $table->string('products_ar');
            $table->string('products_en');
            $table->string('activity_ar');
            $table->string('activity_en');
            $table->integer('hall');
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
        Schema::dropIfExists('participants');
    }
}
