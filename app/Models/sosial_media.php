<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class sosial_media extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'sosial_media';

    // Primary key
    protected $primaryKey = 'id';

    // Kolom yang bisa diisi
    protected $fillable = [
        'nama',
        'icon',
        'url'
    ];

    // Opsi jika primary key bukan auto-incrementing
    public $incrementing = false;

    // Tipe primary key
    protected $keyType = 'string';
}