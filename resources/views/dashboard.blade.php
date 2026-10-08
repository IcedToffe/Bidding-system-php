<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
{{-- <x-app-layout>
    <style>
        /* Admin Dashboard Styling */
        .dashboard-container {
            margin: 2rem auto;
            padding: 2rem;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            text-align: center;
        }

        .user-count {
            font-size: 3rem;
            font-weight: bold;
            color: #C9A050;
            margin-top: 1rem;
        }
    </style>

    <div class="dashboard-container">
        <h1 class="text-2xl font-bold">Admin Dashboard</h1>
        <p class="text-gray-700">Total Registered Users</p>
        <div class="user-count">{{ $userCount }}</div>
    </div>
</x-app-layout> --}}
