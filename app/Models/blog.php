<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'blogs';

    // Primary key
    protected $primaryKey = 'id';

    // Kolom yang bisa diisi
    protected $fillable = [
        'kode_blog',
        'tanggal',
        'judul',
        'foto',
        'detail_blog'
    ];

    // Opsi jika primary key bukan auto-incrementing
    public $incrementing = false;

    // Tipe primary key
    protected $keyType = 'string';
}