<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_comment', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('to_comment_id')->comment('親のコメント');
            $table->bigInteger('from_comment_id')->comment('子のコメント');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment_comment');
    }
}
