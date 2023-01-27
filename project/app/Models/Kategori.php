<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $primaryKey = 'idkategori';

    protected $table = 'kategoris';

    protected $fillable = ['nama', 'deskripsi'];

    public function Barang()
    {
        return $this->hasMany(Barang::class);
    
    }
}
