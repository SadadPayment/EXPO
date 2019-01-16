<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * Title_ar_en, topic_ar_en, date,  is_notification_or_news
     */
    public function up()
    {
        Schema::create('ex_news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Title_ar');
            $table->string('Title_en');
            $table->text('topic_ar');
            $table->text('topic_en');
            $table->boolean('is_notification');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('ex_news');
    }
}
