<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class galeri extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika berbeda dengan nama model dalam bentuk jamak
    protected $table = 'galeris';

    // Menentukan kolom mana saja yang dapat diisi (mass assignable)
    protected $fillable = [
        'id_produk',
        'tanggal',
        'foto',
        'deskripsi',
    ];

    // Menentukan apakah timestamp digunakan atau tidak
    public $timestamps = true;

    // Jika ingin menambahkan relasi, kamu bisa menambahkannya di sini, contoh:
    // public function produk()
    // {
    //     return $this->belongsTo(Produk::class, 'id_produk', 'id');
    // }
}