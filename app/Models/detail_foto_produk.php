<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class detail_foto_produk extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika berbeda dengan nama model dalam bentuk jamak
    protected $table = 'detail_foto_produks';

    // Menentukan kolom mana saja yang dapat diisi (mass assignable)
    protected $fillable = [
        'id_produk',
        'foto',
        'detail_foto',
    ];

    // Menentukan apakah timestamp digunakan atau tidak
    public $timestamps = true;

    // Jika ingin menambahkan relasi, kamu bisa menambahkannya di sini, contoh:
    // public function produk()
    // {
    //     return $this->belongsTo(Produk::class, 'id_produk', 'id');
    // }
}