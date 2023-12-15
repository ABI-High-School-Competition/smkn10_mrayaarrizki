<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Pembayaran;
use App\Models\Pemesan;
use App\Models\Pemesanan;
use App\Models\Ticket;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembayaran = Pembayaran::latest()->first();
        $pemesanan = Pemesanan::latest()->first();
        $pemesan = Pemesan::latest()->first();

        return view('pembayaran', compact('pembayaran', 'pemesanan', 'pemesan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function lanjut()
    {
        $jadwal = Jadwal::latest()->first();
        $pemesan = Pemesan::latest()->first();
        $pemesanan = Pemesanan::latest()->first();
        Ticket::create([
            "nama_pemesan" => $pemesan->nama_pemesan,
            "nama_penumpang" => $pemesan->nama_penumpang,
            "keberangkatan" => $pemesanan->keberangkatan,
            "tujuan" => $pemesanan->tujuan,
            "harga" => $jadwal->harga,
            "jumlah_penumpang" => $pemesanan->jumlah_penumpang,
            "kendaraan" => $pemesanan->kendaraan,
            "tanggal_keberangkatan" => $pemesanan->tanggal_keberangkatan,
        ]);
        Pembayaran::create([
            "kode_pembayaran" => "bayar" . date("h-i-sa"),
            "kode_booking" => "book" . date("h-i-sa"),
            "jumlah_bayar" => $jadwal->harga,
            "status_pemesanan" => "book",
            "time_limit_pembayaran" => "500",
        ]);

        return redirect('/pembayaran');
    }

    public function bayar()
    {
        $pembayaran = Pembayaran::latest()->first();

        $pembayaran->update([
            "status_pemesanan" => "bayar"
        ]);


        return redirect('/dashboard');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pembayaran $pembayaran)
    {
        //
    }
}
