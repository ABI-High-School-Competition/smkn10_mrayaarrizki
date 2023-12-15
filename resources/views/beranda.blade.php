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

    <div class="container mx-auto w-full h-full py-14 px-4">
        <div class="flex flex-col">
            <div class="flex w-full justify-between">
                <div class="flex flex-col">
                    <span>Pergi Kemanapun Anda Mau</span>
                    <span>Pergi kemanapun anda mau sekarang juga! Hanya di TripGo</span>
                </div>
                <div class="flex flex-col w-1/4">
                    <img src="https://images.pexels.com/photos/19131365/pexels-photo-19131365/free-photo-of-pria-hutan-pohon-pegunungan.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt="none" class="w-full object-cover">
                </div>
            </div>
            <div class="flex gap-4 w-1/3">
                <a href="/pesan" class="p-4 rounded bg-slate-300 w-full text-center">Pesan</a>
                <a href="/jadwal" class="p-4 rounded bg-slate-300 w-full text-center">Jadwal</a>
            </div>
        </div>

        <div class="flex py-[5rem]"></div>

        <span>Pesan Tiket Di TripGo</span>
        <form action="/create-pemesanan" method="post" class="flex flex-col w-full mt-4">
            @csrf
            <div class="flex bg-gray-300 p-10 justify-between gap-10 rounded">
                <div class="flex flex-col w-full gap-2">
                    <span>Keberangkatan</span>
                    <input type="text" name="keberangkatan" class="p-2">
                    <span>Tujuan</span>
                    <input type="text" name="tujuan" class="p-2">
                    <span>Pilih Kendaraan</span>
                    <select name="kendaraan">
                        <option value="bus">Bus</option>
                        <option value="kapal">Kapal</option>
                        <option value="pesawat">Pesawat</option>
                    </select>
                </div>
                <div class="flex flex-col w-full gap-2">
                    <span>Jumlah Penumpang</span>
                    <input type="number" name="jumlah_penumpang" class="p-2">
                    <span>Tanggal Keberangkatan</span>
                    <input type="date" name="tanggal_keberangkatan" class="p-2">
                </div>
            </div>

            <button type="submit" class="w-full bg-slate-300 mt-5 p-3 rounded">Pesan</button>
        </form>

        <div class="flex py-[5rem]"></div>

        <span>Informasi & Layanan</span>
        <div class="flex w-full justify-between rounded bg-gray-300 p-10 mt-4">
            <a href="/instagram" class="text-center">Sosial Media</a>
            <a href="/fasilitas-layanan" class="text-center">Fasilitas Layanan</a>
            <a href="/article" class="text-center">Article</a>
        </div>
    </div>





</body>

</html>
