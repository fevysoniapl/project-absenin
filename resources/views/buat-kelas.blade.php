<x-app title="Buat Kelas">
    <div class="flex flex-col gap-5">
        <h1 class="text-x-blue font-bold text-xl">Buat Kelas</h1>

        <!-- Input Nama Kelas -->
        <div class="w-1/2 mt-4">
            <label for="nama-kelas" class="font-semibold">Nama Kelas</label>
            <input type="text" id="nama-kelas"
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-x-blue">
        </div>

        <!-- Input Angkatan -->
        <div class="w-1/2">
            <label for="angkatan" class="font-semibold">Angkatan</label>
            <input type="text" id="angkatan"
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-x-blue">
        </div>

        <button class="w-auto mt-8 py-2 bg-x-blue text-white rounded-lg font-semibold hover:bg-x-darkblue">
            Tambah Kelas
        </button>
    </div>
</x-app>