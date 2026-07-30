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
    Schema::table('obat', function (Blueprint $table) {
        $table->renameColumn('distributor', 'kode_distributor');
    });
}

public function down()
{
    Schema::table('obat', function (Blueprint $table) {
        $table->renameColumn('kode_distributor', 'distributor');
    });
}

};
