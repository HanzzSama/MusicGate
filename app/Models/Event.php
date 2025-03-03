<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /** @use HasFactory<\Database\Factories\EventFactory> */
    use HasFactory;

    protected $fillable = [
        'id_penyelenggara',
        'nama_event',
        'gambar',
        'tanggal_event',
        'waktu',
        'status',
        'deskripsi',
        'jmlh_tiket',
        'jmlh_tiket_vip',
        'hrg_tiket',
        'hrg_tiket_vip',
    ];
}