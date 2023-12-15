<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        "nama_pemesan",
        "nama_penumpang",
        "keberangkatan",
        "tujuan",
        "harga",
        "jumlah_penumpang",
        "kendaraan",
        "tanggal_keberangkatan",
    ];
}
