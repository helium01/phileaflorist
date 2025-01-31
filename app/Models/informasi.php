<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class informasi extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'informasis';

    // Primary key
    protected $primaryKey = 'id';

    // Kolom yang bisa diisi
    protected $fillable = [
        'kode_informasi',
        'tanggal',
        'informasi',
        'detail_informasi'
    ];

    // Opsi jika primary key bukan auto-incrementing
    public $incrementing = false;

    // Tipe primary key
    protected $keyType = 'string';
}