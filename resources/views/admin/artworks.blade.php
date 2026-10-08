<x-app-layout>
    <style>
        /* Table container styling */
        .table-container {
            margin: 2rem auto;
            padding: 1.5rem;
            width: 90%;
            max-width: 1200px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Table styling */
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        table th, table td {
            padding: 1rem;
            border-bottom: 1px solid #ddd;
        }

        /* Header row styling */
        table th {
            background-color: #f4f4f4;
            color: #333;
            font-weight: bold;
        }

        /* Hover effect for rows */
        table tr:hover {
            background-color: #f1f1f1;
        }

        /* Alternate row colors */
        table tr:nth-child(even) {
            background-color: #fafafa;
        }
    </style>

    <div class="table-container">
        <h1 class="text-center text-2xl font-bold mb-6">Artworks</h1>
        <p class="text-center mb-4">Total Artworks: {{ $artworks->count() }}</p>

        <!-- Artworks Table -->
        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Seller ID</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Artwork ID</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($artworks as $artwork)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/' . $artwork->image) }}" alt="{{ $artwork->title }}" class="w-16 h-16 object-cover">
                        </td>
                        <td>{{ $artwork->title }}</td>
                        <td>${{ $artwork->price }}</td>
                        <td>{{ $artwork->user_id }}</td>
                        <td>{{ $artwork->category }}</td>
                        <td>{{ $artwork->description }}</td>
                        <td>{{ $artwork->id }}</td>
                        <td><form action="{{ route('admin.artwork.destroy', $artwork->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('Are you sure you want to delete this artwork?')">Delete</button>
                            </form></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
