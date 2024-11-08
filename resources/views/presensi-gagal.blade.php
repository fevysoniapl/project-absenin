<x-app title="Presensi Berhasil">
    <div class="flex flex-col w-full items-center justify-center h-full gap-5 p-6">
        <p class="text-x-grey font-medium text-base">Coba pindai barcode lagi di area yang sesuai.</p>
        <div class="flex flex-col gap-3 bg-x-lightblue border border-solid border-x-darkblue border-[4px] rounded-xl py-16 px-40">
            <img src="{{ asset('images/other/presensi-gagal.png')}}" />
            <p class="text-black text-2xl font-bold text-center">Presensi Gagal!</p>
            <p class="text-x-red text-base font-semibold text-center px-12">Silakan coba lagi!</p>
        </div>
        <button class="bg-x-blue border-[2px] border-solid border-x-darkblue text-medium text-base px-6 py-2 text-white rounded-xl">
            Coba Lagi
        </button>
    </div>
</x-app>