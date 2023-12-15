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
        <div class="flex w-full justify-between">
            <div class="flex flex-col">
                <span>Nama Penumpang</span>
                <span>{{ $pemesan->nama_penumpang }}</span>
                <span>Nomor WhatsApp</span>
                <span>{{ $pemesan->no_whatsapp }}</span>
                <span>Nama Pemesan</span>
                <span>{{ $pemesan->nama_pemesan }}</span>
                <span>Kendaraan</span>
                <span>{{ $pemesanan->kendaraan }}</span>
            </div>
            <div class="flex flex-col border border-black rounded p-4 justify-center">
                <span class="flex justify-center items-center mb-4">Pilih Kursi Penumpang</span>
                @if ($pemesanan->kendaraan == 'bus')
                    <div
                        class="flex border border-black rounded p-4 justify-center gap-2 w-1/2 items-center self-center">
                        <div class="flex flex-col">
                            <input type="checkbox" name="k" id="l">
                            <input type="checkbox" name="k" id="l">
                            <input type="checkbox" name="k" id="l">
                            <input type="checkbox" name="k" id="l">
                            <input type="checkbox" name="k" id="l">
                            <input type="checkbox" name="k" id="l" class="mt-3">
                            <input type="checkbox" name="k" id="l">
                            <input type="checkbox" name="k" id="l">
                        </div>
                        <div class="flex flex-col ">
                            <input type="checkbox" name="k" id="l">
                            <input type="checkbox" name="k" id="l">
                            <input type="checkbox" name="k" id="l">
                            <input type="checkbox" name="k" id="l">
                            <input type="checkbox" name="k" id="l">
                            <input type="checkbox" name="k" id="l" class="mt-3">
                            <input type="checkbox" name="k" id="l">
                            <input type="checkbox" name="k" id="l">
                        </div>
                    </div>
                @endif

                @if ($pemesanan->kendaraan == 'kapal')
                    <div class="flex flex-col border border-black rounded-full p-4 justify-between">
                        <div class="flex">
                            <input type="checkbox" name="k" id="l">
                            <input type="checkbox" name="k" id="l">
                            <input type="checkbox" name="k" id="l">
                            <input type="checkbox" name="k" id="l">
                            <div class="flex ml-6 justify-end items-end">
                                <input type="checkbox" name="k" id="l">
                                <input type="checkbox" name="k" id="l">
                                <input type="checkbox" name="k" id="l">
                            </div>
                            <div class="flex ml-6 justify-end items-end">
                                <input type="checkbox" name="k" id="l">
                                <input type="checkbox" name="k" id="l">
                            </div>
                        </div>
                        <div class="flex">
                            <input type="checkbox" name="k" id="l">
                            <input type="checkbox" name="k" id="l">
                            <input type="checkbox" name="k" id="l">
                            <input type="checkbox" name="k" id="l">
                            <div class="flex ml-6 justify-end items-end">
                                <input type="checkbox" name="k" id="l">
                                <input type="checkbox" name="k" id="l">
                                <input type="checkbox" name="k" id="l">
                            </div>
                            <div class="flex ml-6 justify-end items-end">
                                <input type="checkbox" name="k" id="l">
                                <input type="checkbox" name="k" id="l">
                            </div>
                        </div>

                    </div>
                @endif

                @if ($pemesanan->kendaraan == 'pesawat')
                    <div class="flex border border-black rounded-full p-4 justify-center gap-2">
                        <div class="flex flex-col">
                            <input type="checkbox" name="k" id="l">
                            <input type="checkbox" name="k" id="l">
                            <input type="checkbox" name="k" id="l">
                            <input type="checkbox" name="k" id="l">
                            <input type="checkbox" name="k" id="l">
                            <input type="checkbox" name="k" id="l">
                            <input type="checkbox" name="k" id="l">
                            <input type="checkbox" name="k" id="l">
                        </div>
                        <div class="flex flex-col ">
                            <input type="checkbox" name="k" id="l">
                            <input type="checkbox" name="k" id="l">
                            <input type="checkbox" name="k" id="l">
                            <input type="checkbox" name="k" id="l">
                            <input type="checkbox" name="k" id="l">
                            <input type="checkbox" name="k" id="l">
                            <input type="checkbox" name="k" id="l">
                            <input type="checkbox" name="k" id="l">
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <form action="/create-payment" method="post">
            @csrf
            <button type="submit">Lanjut</button>
        </form>


    </div>
</body>

</html>
