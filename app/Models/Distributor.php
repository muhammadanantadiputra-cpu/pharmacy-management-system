<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    protected $table = 'distributor';
    protected $primaryKey = 'kode_distributor';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'kode_distributor', 'nama_distributor', 'alamat', 'email', 'telepon'
    ];
}
