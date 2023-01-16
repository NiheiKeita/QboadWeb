<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyListQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_list_question', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('my_list_id');
            $table->bigInteger('question_id');
            $table->integer('is_to_the_question')->default(0)->comment('ソート');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('my_list_question');
    }
}
