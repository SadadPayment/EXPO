<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComingExposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * Name_ar_en, file_upload
     */
    public function up()
    {
        Schema::create('coming_expos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name_en');
            $table->string('Name_ar');
            $table->string('file_upload');
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
        Schema::dropIfExists('coming_expos');
    }
}
