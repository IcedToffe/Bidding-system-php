<!-- resources/views/admin/feedback.blade.php -->
<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
            <h1 class="text-2xl font-semibold">Feedback</h1>
            <ul>
                @foreach ($feedback as $item)
                    <li>{{ $item->message }} (from: {{ $item->user->name }})</li>
                @endforeach
            </ul>
             </div>
    </div>
        </div>
    </div>
</x-app-layout>
