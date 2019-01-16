<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuggestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * Username, suggest_title, suggest_topic, date
     */
    public function up()
    {
        Schema::create('suggestions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Username');
            $table->string('suggest_title');
            $table->string('suggest_topic');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * Coming Expo
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suggestions');
    }
}
