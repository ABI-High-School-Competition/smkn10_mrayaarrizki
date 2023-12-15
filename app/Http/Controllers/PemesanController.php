<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Pemesan;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class PemesanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('datapemesan');
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
    public function store(Request $request)
    {
        Pemesan::create([
            "nama_penumpang" => $request->nama_penumpang,
            "no_whatsapp" => $request->no_whatsapp,
            "nama_pemesan" => $request->nama_pemesan,
        ]);

        // Pembayaran::create([
        //     "kode_pembayaran" => "wkoko",
        //     "kode_booking" => "wkoko",
        //     "jumlah_bayar" => "wkoko",
        //     "status_pemesanan" => "dipesan",
        //     "time_limit_pembayaran" => "09",
        // ]);

        return redirect('/detail-pemesanan');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $pemesan = Pemesan::latest()->first();
        $pemesanan = Pemesanan::latest()->first();

        return view('detailpemesanan', compact('pemesan', 'pemesanan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pemesan $pemesan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pemesan $pemesan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pemesan $pemesan)
    {
        //
    }
}
