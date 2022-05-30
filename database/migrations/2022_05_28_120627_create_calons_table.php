<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calons', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tgl_lahir');
            $table->string('tempat_lahir');
            $table->text('alamat');
            $table->integer('umur_sekarang');
            $table->string('tipe_id');
            $table->text('visi');
            $table->text('misi');
            $table->string('gambar');
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
        Schema::dropIfExists('calons');
    }
}
