<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsActiveToQuestionLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('question_likes', function (Blueprint $table) {
            $table->integer('is_active')->default(1)->comment('0:否いいね状態 1:いいね状態');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('question_likes', function (Blueprint $table) {
            $table->dropColumn('is_active');
        });
    }
}
