<!-- resources/views/layouts/admin-layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 text-white h-screen p-4">
            <ul>
                <li class="mb-4">
                    <a href="{{ route('dashboard') }}" class="text-white hover:underline">Dashboard</a>
                </li>
                <!-- Add other navigation links as needed -->
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
