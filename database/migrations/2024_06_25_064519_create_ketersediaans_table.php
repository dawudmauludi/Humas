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
        Schema::create('ketersediaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_dudi')->constrained('dudis')->onDelete('cascade')->onUpdate('cascade');
            $table->string('jurusan');
            $table->integer('jumlah_siswa')->default(0);
            $table->integer('kuota')->default(0);
            $table->integer('sisa_kuota')->default(0);
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
        Schema::dropIfExists('ketersediaans');
    }
};
