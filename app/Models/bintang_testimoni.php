<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class bintang_testimoni extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika berbeda dengan nama model dalam bentuk jamak
    protected $table = 'bintang_testimonis';

    // Menentukan kolom mana saja yang dapat diisi (mass assignable)
    protected $fillable = [
        'kode_blog',
        'jumlah_bintang',
    ];

    // Menentukan kolom yang tidak boleh diubah (guarded)
    // protected $guarded = ['id'];

    // Menentukan apakah timestamp digunakan atau tidak
    public $timestamps = true;

    // Jika ingin menambahkan relasi, kamu bisa menambahkannya di sini, contoh:
    // public function blog()
    // {
    //     return $this->belongsTo(Blog::class, 'kode_blog', 'kode');
    // }
}