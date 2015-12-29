<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function(Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();
            $table->integer('user_id');
            $table->string('title');
            $table->string('category');
            $table->string('slug');
            $table->text('intro');
            $table->text('content');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}
