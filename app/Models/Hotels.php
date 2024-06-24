<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
    protected $table = 'hotel';
    use HasFactory;

    protected $fillable = [
        'id',
        'nama',
        'alamat',
        'type',
        'fasilitas',
        'rating',
        'deskripsi',
        'latitude',
        'longitude',
        'foto_hotel'
    ];
}
