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
        Schema::create('journals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_plotingan')->constrained('plotingan_pkls')->onDelete('cascade')->onUpdate('cascade');
            $table->date('tanggal');
            $table->time('jam_datang');
            $table->time('jam_pulang');
            $table->text('uraian_kegiatan');
            $table->text('foto_kegiatan');
            $table->string('catatan')->nullable();
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
        Schema::dropIfExists('journals');
    }
};
