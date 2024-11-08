<x-app title="Registrasi">

    <div class="flex py-8 px-16 justify-center gap-5">
        <div class="w-1/2 flex justify-center items-center flex-col gap-3 p-16">
            <img src="{{ asset('images/other/login.png')}}"/>
            <h2 class="text-5xl font-bold text-black">Selamat Datang</h2>
            <p class="text-s text-x-lightgrey text-center">Di sistem Absen-In, sebuah sistem presensi berbasis barcode 
                yang memudahkan mahasiswa dan dosen dalam presensi kehadiran.</p>
        </div>
        <div class="w-1/2 flex justify-center items-center flex-col gap-3 py-16 px-28 bg-white rounded-3xl">
            <h2 class="text-3xl font-bold text-black">Daftar Akun Baru</h2>

            <!-- Email Input -->
            <div class="w-full mt-4">
                <label for="email" class="font-semibold">Masukkan Email</label>
                <input type="email" id="email" placeholder="mail@abc.com"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-x-blue">
            </div>
    
            <!-- Password Input -->
            <div class="w-full">
                <label for="password" class="font-semibold">Masukkan Kata Sandi</label>
                <input type="password" id="password" placeholder="**************"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-x-blue">
            </div>

            <div class="w-full">
                <label for="password" class="font-semibold">Konfirmasi Kata Sandi</label>
                <input type="password" id="password" placeholder="**************"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-x-blue">
            </div>
    
    
            <!-- Login Button -->
            <button class="w-full mt-8 py-2 bg-x-blue text-white rounded-lg font-semibold hover:bg-x-darkblue">
                Daftar
            </button>
    
            <!-- Register Link -->
            <p class=" text-center text-sm text-gray-500">
                Sudah punya akun? <a href="/login" class="text-x-blue hover:underline">Masuk</a>
            </p>
        </div>
    </div>
    </x-app>