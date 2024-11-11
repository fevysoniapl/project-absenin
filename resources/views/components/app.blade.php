<script src="//unpkg.com/alpinejs" defer></script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ $title ?? 'Default Title' }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col min-h-screen bg-gray-100 font-sans">

    <!-- Navbar Component -->
    <x-navbar />

    <div class="flex flex-1">
        <!-- Sidebar -->
        <aside class="w-1/5 bg-white shadow-lg">
            <nav class="flex flex-col p-4 space-y-4 text-gray-700 mt-8">
                <a href="{{ route('home') }}" class="flex items-center space-x-2 hover:text-blue-500">
                    <span class="text-xl">&#x1F3E0;</span>
                    <span>Home</span>
                </a>
                <a href="{{ route('faq') }}" class="flex items-center space-x-2 hover:text-blue-500">
                    <span class="text-xl">&#x1F4D6;</span>
                    <span>FAQ</span>
                </a>
                <a href="{{ route('jadwal') }}" class="flex items-center space-x-2 hover:text-blue-500">
                    <span class="text-xl">&#x1F4C5;</span>
                    <span>Jadwal</span>
                </a>
                <div x-data="{ open: false }" class="flex flex-col w-64">
                    <!-- Button to toggle dropdown -->
                    <button @click="open = !open" class="flex items-center justify-between ">
                        <div class="flex items-center space-x-2">
                            <span class="text-xl">&#x1F4DA;</span>
                            <span>Mata Kuliah Saya</span>
                        </div>
                        <svg :class="{ 'transform rotate-180': open }" class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Dropdown Menu -->
                    <div x-show="open" @click.outside="open = false" x-cloak class="space-y-2 bg-white shadow-lg rounded-b-lg border-t border-gray-200 mt-2">
                        <a href="{{ route('matkul') }}"  class="block p-4 hover:bg-blue-100 rounded-lg border border-gray-200">
                            <div class="text-sm font-semibold">PPKN - Ibnu Warno</div>
                            <div class="text-xs text-gray-500">Kelas B</div>
                        </a>
                        <a href="{{ route('matkul') }}" class="block p-4 hover:bg-blue-100 rounded-lg border border-gray-200">
                            <div class="text-sm font-semibold">PPKN - Ibnu Warno</div>
                            <div class="text-xs text-gray-500">Kelas B</div>
                        </a>
                        <a href="{{ route('matkul') }}" class="block p-4 hover:bg-blue-100 rounded-lg border border-gray-200">
                            <div class="text-sm font-semibold">PPKN - Ibnu Warno</div>
                            <div class="text-xs text-gray-500">Kelas B</div>
                        </a>
                    </div>
                </div>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6 bg-gray-50">
            <div class="mb-6">

            </div>

            <!-- Slot Content -->
            {{ $slot }}
        </main>
    </div>

    <div class="flex items-center self-stretch my-auto w-full basis-0 shadow">
        <div class="flex gap-2.5 items-center self-stretch my-auto ">
            <div class="flex gap-8 items-center justify-center self-stretch pl-[120px] pr-2.5 py-2.5">
                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/5cd24d595a748b098d248c48805ca885dfc3daca6172ea408613a758e23b9fcd?placeholderIfAbsent=true&apiKey=e8011a4084744e0fbb615d9ad0bac9f7" alt="Navigation icon" class="object-contain shrink-0 self-stretch my-auto w-6 aspect-square" />
                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/70b8f8e976cbbd47053b03695f4d07f53736dde9eab3637d8b9b7c8f0b4a369f?placeholderIfAbsent=true&apiKey=e8011a4084744e0fbb615d9ad0bac9f7" alt="Menu icon" class="object-contain shrink-0 self-stretch my-auto aspect-square w-[21px]" />
            </div>
        </div>
    </div>

</body>

</html>

