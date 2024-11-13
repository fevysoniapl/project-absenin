<sidebar class="w-64 bg-white text-black text-sm flex flex-col justify-between max-md:hidden">
    <ul class="p-4 flex-col">
        <a href="/">
            <li class="py-2 px-4 flex gap-3 hover:bg-x-lightblue hover:border hover:border-solid hover:border-x-darkblue rounded-lg items-center">
                <img src="{{ asset('images/logo/icon-home.png')}}"/>
                <p>Home</p>
            </li>
        </a>
        <a href="/faq">
            <li class="py-2 mt-2 px-4 flex gap-3 hover:bg-x-lightblue hover:border hover:border-solid hover:border-x-darkblue rounded-lg items-center">
                <img src="{{ asset('images/logo/icon-faq.png')}}" class="w-auto h-auto"/>
                <p>Faq</p>
            </li>
        </a>
        <a href="/jadwal">
            <li class="py-2 mt-2 px-4 flex gap-3 hover:bg-x-lightblue hover:border hover:border-solid hover:border-x-darkblue rounded-lg items-center">
                <img src="{{ asset('images/logo/icon-jadwal.png')}}" class="w-auto h-auto"/>
                <p>Jadwal</p>
            </li>
        </a>
        <div x-data="{ open: false }" class="flex-col flex">
            <!-- Button to toggle dropdown -->
            <button @click="open = !open" class="py-2 mt-2 px-4 flex justify-between hover:bg-x-lightblue hover:border hover:border-solid hover:border-x-darkblue rounded-lg items-center">
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('images/logo/icon-matkul.png')}}" class="w-auto h-auto"/>
                    <span>Mata Kuliah Saya</span>
                </div>
                <svg :class="{ 'transform rotate-180': open }" class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            <!-- Dropdown Menu -->
            <div x-show="open" @click.outside="open = false" x-cloak class="space-y-2 bg-white shadow-lg rounded-b-lg border-t border-gray-200 mt-2">
                <a href="/matkul"  class="block p-4 hover:bg-blue-100 rounded-lg border border-gray-200">
                    <div class="text-sm font-semibold">PPKN - Ibnu Warno</div>
                    <div class="text-xs text-gray-500">Kelas B</div>
                </a>
                <a href="/matkul" class="block p-4 hover:bg-blue-100 rounded-lg border border-gray-200">
                    <div class="text-sm font-semibold">PPKN - Ibnu Warno</div>
                    <div class="text-xs text-gray-500">Kelas B</div>
                </a>
                <a href="/matkul" class="block p-4 hover:bg-blue-100 rounded-lg border border-gray-200">
                    <div class="text-sm font-semibold">PPKN - Ibnu Warno</div>
                    <div class="text-xs text-gray-500">Kelas B</div>
                </a>
            </div>
        </div>
    </ul>

    <div class="p-4 border-t border-gray-200 flex justify-center shadow-md h-[50px]">
        <ul class="flex gap-16">
            <li class="py-2 flex gap-3 items-center hover:bg-gray-200 rounded-lg">
                <img src="{{ asset('images/logo/icon-setting.png') }}" class="w-6 h-6" />
            </li>
            <li class="py-2 flex gap-3 items-center hover:bg-gray-200 rounded-lg">
                <img src="{{ asset('images/logo/icon-logout.png') }}" class="w-6 h-6" />
            </li>
        </ul>
    </div>
</sidebar>