<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <nav class="container mx-auto w-full sticky">
        <div class="flex justify-between w-full p-4">
            <div class="flex w-full">
                <a href="/">TripGo</a>
            </div>
            <div class="flex w-full gap-14 justify-end">
                <a href="/">Beranda</a>
                <a href="/list-jadwal">Jadwal</a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto w-full h-full">
        <div class="flex flex-col">
            <span>Kode Pembayaran</span>
            <span>{{ $pembayaran->kode_pembayaran }}</span>
            <span>Kode Booking</span>
            <span>{{ $pembayaran->kode_booking }}</span>
            <span>Detail Pemesanan</span>
            <span>Lokasi Keberangkatan</span>
            <span>{{ $pemesanan->keberangkatan }}</span>
            <span>Lokasi Tujuan</span>
            <span>{{ $pemesanan->tujuan }}</span>
            <span>Tanggal Keberangkatan</span>
            <span>{{ $pemesanan->tanggal_keberangkatan }}</span>
            <span>Jenis Kendaraan</span>
            <span>{{ $pemesanan->kendaraan }}</span>
            <span>Jumlah Penumpang</span>
            <span>{{ $pemesanan->jumlah_penumpang }}</span>
            <span>Nama Pemesan</span>
            <span>{{ $pemesan->nama_pemesan }}</span>
            <span>Nomor Pemesan</span>
            <span>{{ $pemesan->no_whatsapp }}</span>
            <span>Jumlah Bayar</span>
            <span>{{ $pembayaran->jumlah_bayar }}</span>
            <span>Status Pemesanan</span>
            <span>{{ $pembayaran->status_pemesanan }}</span>
            <span>Time Limit Pembayaran</span>
            <span>{{ $pembayaran->time_limit_pembayaran }}</span>
            <form action="/payment-bayar" method="post">
                @csrf
                @method('PUT')
                <button type="submit">Bayar</button>
            </form>
        </div>
    </div>

</body>

</html>
