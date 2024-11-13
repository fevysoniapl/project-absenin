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
        <x-sidebar/>

        <!-- Main Content -->
        <main class="flex-1 p-6 bg-gray-50">
            <!-- Slot Content -->
            {{ $slot }}
        </main>
    </div>
</body>
</html>