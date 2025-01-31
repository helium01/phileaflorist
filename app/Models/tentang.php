<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class tentang extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'tentangs';

    // Primary key
    protected $primaryKey = 'id';

    // Kolom yang bisa diisi
    protected $fillable = [
        'kontak',
        'instagram',
        'nama_toko',
        'alamat',
        'keterangan',
        'filosofi'
    ];

    // Opsi jika primary key bukan auto-incrementing
    public $incrementing = false;

    // Tipe primary key
    protected $keyType = 'string';
}