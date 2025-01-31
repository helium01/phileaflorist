<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'kategoris';

    // Primary key
    protected $primaryKey = 'id';

    // Kolom yang bisa diisi
    protected $fillable = [
        'id_kategori',
        'nama',
        'keterangan'
    ];

    // Opsi jika primary key bukan auto-incrementing
    public $incrementing = false;

    // Tipe primary key
    protected $keyType = 'string';
}