<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangJualan extends Model
{
    protected $table = 'detail_barangjual';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_barangjual',
        'deskripsi',
        'stok',
        'satuan',
        'jumlah_terjual',
        'harga_barang',
        'iduser',
        'idbarang'
    ];
    
    public function user()
    {
        return $this->belongsTo(Pengguna::class);
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
