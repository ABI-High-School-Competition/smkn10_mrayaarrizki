<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        "keberangkatan",
        "jumlah_penumpang",
        "tanggal_keberangkatan",
        "tujuan",
        "kendaraan"
    ];
}
