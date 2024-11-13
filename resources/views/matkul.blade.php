<x-app title="Mata Kuliah">
    <div class="flex flex-col gap-5">
        <h1 class="text-x-blue font-bold text-xl">Pendidikan Kewarganegaraan</h1>
        <div class="flex flex-col gap-1 w-full bg-x-lightblue border border-solid border-x-darkblue border-[2px] h-auto p-6 rounded-lg">
            <h2 class="text-base font-semibold text-black">PPKN - Ibnu Warno</h2>
            <p class="font-medium text-sm text-black">Kelas B</p>
        </div>
        <h1 class="text-x-blue font-bold text-xl mt-6 w-full flex justify-center">Rekap Absensi</h1>
        <div class="w-full bg-x-lightblue border border-solid border-x-darkblue border-[2px] p-6 rounded-lg flex flex-wrap gap-y-4 gap-x-4">
            <!-- Pertemuan 1 -->
            <div class="w-[calc((100%/3)-1rem)] bg-x-green p-4 rounded-xl text-white">
              <h3 class="text-lg font-semibold">Pertemuan 1</h3>
              <p class="text-sm">Kelas B</p>
              <div class="flex justify-end">
                <button class="w-1/2 mt-4 py-2 bg-x-lightgreen rounded-lg text-sm flex justify-center gap-2">
                  <img src="{{ asset('images/logo/icon-location.png')}}" class="w-auto h-full"/>
                  <a href="{{ route('presensi') }}" class="text-white">
                    <p>Presensi Disini</p>
                  </a>
                </button>
              </div>
            </div>

            <!-- Pertemuan 2 -->
            <div class="w-[calc((100%/3)-1rem)] bg-x-red p-4 rounded-xl text-white">
              <h3 class="text-lg font-semibold">Pertemuan 2</h3>
              <p class="text-sm">Kelas B</p>
              <div class="flex justify-end">
                <button class="w-1/2 mt-4 py-2 bg-x-lightred rounded-lg text-sm flex justify-center gap-2">
                  <img src="{{ asset('images/logo/icon-location.png')}}" class="w-auto h-full"/>
                  <a href="{{ route('presensi') }}" class="text-white">
                  <p>Presensi Disini</p>
                </button>
              </div>
            </div>
          </div>

    </div>
</x-app>
