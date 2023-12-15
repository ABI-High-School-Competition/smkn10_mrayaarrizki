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
        @foreach ($jadwals as $jadwal)
            <div class="flex flex-col shadow rounded p-4 w-full justify-between">
                <span>{{ $jadwal->lokasi_keberangkatan }}</span>
                <span>{{ $jadwal->harga }}</span>
                <span>{{ $jadwal->tanggal_waktu_berangkat }}</span>
                <span>{{ $jadwal->ketersediaan_kursi }}</span>
        @endforeach
    </div>
</body>

</html>
