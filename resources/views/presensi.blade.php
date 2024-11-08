<x-app title="Presensi">
    <div class="flex flex-col gap-2">
        <h1 class="text-x-blue font-bold text-xl">Presensi Online</h1>
        <div class="flex flex-col gap-3 w-full bg-x-lightblue border border-solid border-x-darkblue border-[2px] h-auto px-6 py-3 rounded-lg">
            <p class="text-x-grey text-base">Aktifkan lokasi untuk memastikan Anda berada dalam area yang diizinkan. Absensi tidak tersedia jika Anda berada di luar radius yang ditentukan.</p>
            <a href="" class="bg-x-green p-1 flex gap-2 justify-center w-[200px] rounded-lg items-center">
                <img src="{{ asset('images/logo/icon-location.png')}}" class="w-auto h-auto"/>
                <p class="text-white text-base font-medium">Geolocation</p>
            </a>
        </div>
        <div class="flex flex-col justify-center items-center gap-3 w-full h-full p-6">
            <h2 class="text-xl font-bold text-x-blue">Scan Barcode untuk Presensi</h2>
            <p class="text-x-grey">Pastikan barcode terlihat jelas di kamera</p>
            <div class="flex bg-x-lightblue rounded-lg w-auto h-auto justify-center border border-solid border-x-darkblue py-16 px-32 border-[4px]">
                <img src="{{ asset('images/other/qr.png')}}" />
            </div>
            <p class="text-x-grey">Arahkan barcode Anda ke kamera untuk memulai presensi</p>
        </div>
    </div>
</x-app>