<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = [
        "lokasi_keberangkatan",
        "tanggal_waktu_berangkat",
        "ketersediaan_kursi",
        "harga"
    ];
}
