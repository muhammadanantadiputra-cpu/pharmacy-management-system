<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('obat', function (Blueprint $table) {
        $table->string('kode_obat')->primary();
        $table->string('jenis_obat');
        $table->string('nama_obat');
        $table->integer('harga');
        $table->integer('stok');
        $table->string('distributor');
        $table->foreign('distributor')->references('kode_distributor')->on('distributor')->onDelete('cascade');
        $table->timestamps();
    });
}

};
