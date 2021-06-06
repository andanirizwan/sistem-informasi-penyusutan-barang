<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_barang');
            $table->string('merk');
            $table->string('jumlah');
            $table->string('satuan');
            $table->integer('harga');
            $table->integer('total');
            $table->string('unit');
            $table->integer('jumlah_modal');
            $table->string('kecamatan');
            $table->integer('no');
            $table->date('tahun_beli');
            $table->string('jenis');
            $table->integer('penyusutan_fisik');
            $table->integer('penyusutan_fungsional');
            $table->integer('penyusutan_ekonomis');
            $table->integer('penyusutan_aset');
            $table->string('gambar');
            $table->enum('status', ['konfirmasi', 'belum']);
            $table->timestamps();

            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
}
