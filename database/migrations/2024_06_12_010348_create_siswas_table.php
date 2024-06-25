<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama');
            $table->string('nomor_induk_siswa');
            $table->enum('jenkel',['laki-laki','perempuan']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->enum('kelas',['XII KIMIA INDUSTRI 1','XII KIMIA INDUSTRI 2','XII KIMIA INDUSTRI 3','XII KIMIA ANALIS 1','XII KIMIA ANALIS 2','XII TEKNIK KOMPUTER DAN JARINGAN 1','XII TEKNIK KOMPUTER DAN JARINGAN 2','XII TEKNIK KOMPUTER DAN JARINGAN 3','XII REKAYASA PERANGKAT LUNAK 1','XII REKAYASA PERANGKAT LUNAK 2','XII DESAIN KOMUNIKASI VISUAL 1','XII DESAIN KOMUNIKASI VISUAL 2','XII DESAIN KOMUNIKASI VISUAL 3','XII MANAJEMEN PERKANTORAN 1','XII MANAJEMEN PERKANTORAN 2','XII AKUNTANSI 1','XII AKUNTANSI 2','XII AKUNTANSI 3','XII BISNIS DIGITAL 1','XII BISNIS DIGITAL 2']);
            $table->text('alamat');
            $table->string('kota');
            $table->string('no_telp',20);
            $table->string('nama_orangTua');
            $table->string('nama_industri');
            $table->text('alamat_industri');
            $table->string('nama_negara');
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
        Schema::dropIfExists('siswas');
    }
};
