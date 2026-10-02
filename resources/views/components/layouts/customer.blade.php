<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Kantin' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gray-50">
    <header class="border-b bg-white">
        <div class="mx-auto flex min-h-11 max-w-7xl items-center justify-between px-4">
            <a href="/" class="font-bold">
                Kantin
            </a>

            <span class="text-sm text-gray-500">
                Customer
            </span>
        </div>
    </header>

    <main class="mx-auto max-w-7xl px-4 py-6">
        {{ $slot }}
    </main>
</body>
</html>