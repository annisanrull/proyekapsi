<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->unique();
            $table->string('nama');
            $table->dateTime('tgl_lahir');
            $table->string('tmpt_lahir');
            $table->text('alamat');
            $table->string('umur');
            $table->string('rt');
            $table->string('rw');
            $table->string('desa');
            $table->string('password');
            $table->boolean('role_id')->default(false);
            $table->string('status')->default('belum');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
