<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Pemesan;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('beranda');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pemesanan::create([
            "keberangkatan" => $request->keberangkatan,
            "jumlah_penumpang" => $request->jumlah_penumpang,
            "tanggal_keberangkatan" => $request->tanggal_keberangkatan,
            "tujuan" => $request->tujuan,
            "kendaraan" => $request->kendaraan
        ]);

        if ($request->kendaraan == "bus") {
            Jadwal::create([
                "lokasi_keberangkatan" => $request->keberangkatan,
                "tanggal_waktu_berangkat" => $request->tanggal_keberangkatan,
                "ketersediaan_kursi" => 12,
                "harga" => 7000 * $request->jumlah_penumpang
            ]);
        } else if ($request->kendaraan == "kapal") {
            Jadwal::create([
                "lokasi_keberangkatan" => $request->keberangkatan,
                "tanggal_waktu_berangkat" => $request->tanggal_keberangkatan,
                "ketersediaan_kursi" => 200,
                "harga" => 100000 * $request->jumlah_penumpang
            ]);
        } else {
            Jadwal::create([
                "lokasi_keberangkatan" => $request->keberangkatan,
                "tanggal_waktu_berangkat" => $request->tanggal_keberangkatan,
                "ketersediaan_kursi" => 50,
                "harga" => 250000 * $request->jumlah_penumpang
            ]);
        }

        return redirect('/jadwal');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pemesanan $pemesanan)
    {
        //
    }
}
