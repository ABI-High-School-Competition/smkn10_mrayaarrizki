<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <nav class="container mx-auto w-full sticky p-4">
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

    <div class="container mx-auto w-full h-full px-4 ">
        <div class="flex w-full justify-between bg-gray-300 p-6 rounded gap-10">
            <div class="flex flex-col w-full gap-2">
                <span>keberangkatan</span>
                <span class="bg-white rounded p-3">{{ $pemesanan->keberangkatan }}</span>
                <span>tujuan</span>
                <span class="bg-white rounded p-3">{{ $pemesanan->tujuan }}</span>
                <span>Jenis kendaraan</span>
                <span class="bg-white rounded p-3">{{ $pemesanan->kendaraan }}</span>
            </div>
            <div class="flex flex-col w-full gap-2">
                <span>ketersediaan kursi</span>
                <span class="bg-white rounded p-3">{{ $jadwal->ketersediaan_kursi }}</span>
                <span>harga</span>
                <span class="bg-white rounded p-3">{{ $jadwal->harga }}</span>
            </div>
        </div>
        <div class="flex gap-4">
            <a href="/data-pemesan" class="flex w-full bg-gray-300 rounded p-3 justify-center mt-5">Setuju</a>
            <a href="/" class="flex w-full bg-gray-300 rounded p-3 justify-center mt-5">Batal</a>
        </div>
    </div>
</body>

</html>
