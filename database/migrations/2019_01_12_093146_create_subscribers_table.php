<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * Name_ar_en,
     */
    public function up()
    {
        Schema::create('Subscribers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name_en');
            $table->string('Name_ar');
            $table->string('image');
            $table->string('phone');
            $table->string('website');
            $table->string('product_ar');
            $table->string('product_en');
            $table->string('activity_ar');
            $table->string('activity_en');
            $table->string('email');
            $table->string('country');
            $table->string('fax');
            $table->string('address');
            $table->string('halls');
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
        Schema::dropIfExists('Subscribers');
    }
}
