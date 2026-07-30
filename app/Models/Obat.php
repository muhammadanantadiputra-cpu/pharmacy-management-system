<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $table = 'obat';
    protected $primaryKey = 'kode_obat';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'kode_obat', 'nama_obat', 'jenis_obat', 'harga', 'stok', 'kode_distributor' // ✅ fix field
    ];

    public function distributor()
    {
        return $this->belongsTo(Distributor::class, 'kode_distributor', 'kode_distributor');
    }
}
