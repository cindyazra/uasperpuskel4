<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengembalianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengembalian', function (Blueprint $table) {
            $table->id('id_kembali');
            $table->unsignedBigInteger('id_pinjam');
            $table->date('tanggal_kembali');
            $table->unsignedBigInteger('id_petugas');
            $table->unsignedBigInteger('id_anggota');
            $table->unsignedBigInteger('id_buku');
            $table->timestamps();
            
            $table->foreign('id_pinjam')->references('id_pinjam')->on('peminjaman');
            $table->foreign('id_petugas')->references('id_petugas')->on('petugas');
            $table->foreign('id_anggota')->references('id_anggota')->on('anggota');
            $table->foreign('id_buku')->references('id_buku')->on('buku');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengembalian');
    }
}
