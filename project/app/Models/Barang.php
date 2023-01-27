<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $primaryKey = 'idbarang';


    public function Kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function BarangJualan()
    {
        return $this->hasMany(BarangJualan::class);
    }
}
