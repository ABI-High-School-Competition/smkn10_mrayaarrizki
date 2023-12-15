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
        <form action="/create-pemesan" method="post" class="flex flex-col w-full mt-4">
            @csrf
            <div class="flex bg-gray-300 p-10 justify-between gap-10 rounded">
                <div class="flex flex-col w-full gap-2">
                    <span>Nama Pemesan</span>
                    <input type="text" name="nama_pemesan" class="p-2">
                    <span>Nomor Whatsapp</span>
                    <input type="text" name="no_whatsapp" class="p-2">
                    <span>Nama Penumpang</span>
                    <textarea name="nama_penumpang" cols="20" rows="5"></textarea>
                </div>
            </div>
            <button type="submit" class="w-full bg-slate-300 mt-5 p-3 rounded">Submit</button>
        </form>
    </div>
</body>

</html>
