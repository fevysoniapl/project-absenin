<x-app title="Login">

<div class="flex p-16 justify-center gap-5">
    <div class="w-1/2 flex justify-center items-center flex-col gap-3 p-16">
        <img src="{{ asset('images/other/login.png')}}"/>
        <h2 class="text-5xl font-bold text-black">Selamat Datang</h2>
        <p class="text-s text-x-lightgrey text-center">Di sistem Absen-In, sebuah sistem presensi berbasis barcode 
            yang memudahkan mahasiswa dan dosen dalam presensi kehadiran.</p>
    </div>
    <div class="w-1/2 flex justify-center items-center flex-col gap-3 py-16 px-28 bg-white rounded-3xl">
        <h2 class="text-3xl font-bold text-black">Masuk ke Akun Anda</h2>
        <p class="text-base text-x-grey leading-none">Silakan login untuk melanjutkan</p>
        
        <!-- Email Input -->
        <div class="w-full mt-4">
            <label for="email" class="font-semibold">Email</label>
            <input type="email" id="email" placeholder="mail@abc.com"
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-x-blue">
        </div>

        <!-- Password Input -->
        <div class="w-full">
            <label for="password" class="font-semibold">Kata Sandi</label>
            <input type="password" id="password" placeholder="**************"
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-x-blue">
        </div>


        <!-- Login Button -->
        <button type="submit" class="w-full mt-8 py-2 bg-x-blue text-white rounded-lg font-semibold hover:bg-x-darkblue">
            Masuk
        </button>

        <!-- Register Link -->
        <p class=" text-center text-sm text-gray-500">
            Belum punya akun? <a href="/registrasi" class="text-x-blue hover:underline">Daftar di sini</a>
        </p>
    </div>
</div>
</x-app>