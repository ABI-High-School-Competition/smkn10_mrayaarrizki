<?php

use App\Http\Controllers\JadwalController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PemesanController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PemesananController::class, 'index']);
Route::post('/create-pemesanan', [PemesananController::class, 'store']);
Route::post('/create-pemesan', [PemesanController::class, 'store']);
Route::get('/jadwal', [JadwalController::class, 'index']);
Route::get('/list-jadwal', [JadwalController::class, 'listjadwal']);
Route::get('/data-pemesan', [PemesanController::class, 'index']);
Route::get('/detail-pemesanan', [PemesanController::class, 'show']);
Route::get('/pembayaran', [PembayaranController::class, 'index']);
Route::get('/dashboard', [TicketController::class, 'index']);
Route::get('/dashboard/{id}', [TicketController::class, 'show']);
Route::post('/create-payment', [PembayaranController::class, 'lanjut']);
Route::put('/payment-bayar', [PembayaranController::class, 'bayar']);
