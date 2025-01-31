<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'produks';

    // Primary key
    protected $primaryKey = 'id';

    // Kolom yang bisa diisi
    protected $fillable = [
        'id_produk',
        'id_kategori',
        'nama',
        'harga',
        'keterangan'
    ];

    // Opsi jika primary key bukan auto-incrementing
    public $incrementing = false;

    // Tipe primary key
    protected $keyType = 'string';
}