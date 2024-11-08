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
        <a href="">
            <li class="py-2 mt-2 px-4 flex gap-3 hover:bg-x-lightblue hover:border hover:border-solid hover:border-x-darkblue rounded-lg items-center">
                <img src="{{ asset('images/logo/icon-matkul.png')}}" class="w-auto h-auto"/>
                <p>Mata Kuliah Saya</p>
            </li>
        </a>
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