<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function($table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('location');
            $table->string('title');
            $table->text('description');
            $table->timestamp('created_at');
            $table->timestamp('due_date');
            $table->timestamp('updated_at')->nullable;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('events');
    }
}
