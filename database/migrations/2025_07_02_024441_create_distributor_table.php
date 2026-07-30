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
    Schema::create('distributor', function (Blueprint $table) {
        $table->string('kode_distributor')->primary();
        $table->string('nama_distributor');
        $table->string('alamat');
        $table->string('email');
        $table->string('telepon');
        $table->timestamps();
    });
}

};
