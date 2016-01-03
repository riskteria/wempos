<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function($table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('nama_sekolah');
            $table->string('jenjang');
            $table->string('tipe');
            $table->string('alamat');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('nomor_pokok');
            $table->boolean('confirmed')->default(false);
            $table->text('profil')->nullable();
            $table->text('fasilitas')->nullable();
            $table->text('prestasi')->nullable();
            $table->text('biaya')->nullable();
            $table->text('kegiatan')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('schools');
    }
}
