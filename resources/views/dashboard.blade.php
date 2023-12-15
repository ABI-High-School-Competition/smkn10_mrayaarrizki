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
        <div class="flex flex-col gap-3">
            @foreach ($tickets as $ticket)
                <div class="flex shadow rounded p-4 w-full justify-between">
                    <div class="flex flex-col">
                        <span>Pemesan {{ $ticket->nama_pemesan }}</span>
                        <span>Jumlah Bayar Rp.{{ $ticket->harga }}</span>
                        <span>Jenis Kendaraan {{ $ticket->kendaraan }}</span>
                        <span>{{ $ticket->keberangkatan }} -> {{ $ticket->tujuan }}</span>
                        <span>Tanggal Keberangkatan {{ $ticket->tanggal_keberangkatan }}</span>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <a href="/dashboard/{{ $ticket->id }}">Detail</a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</body>

</html>
