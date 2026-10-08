<x-app-layout>
    <style>
        /* Existing styles */
        .table-container {
            margin: 2rem auto;
            padding: 1.5rem;
            width: 90%;
            max-width: 1200px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        table th, table td {
            padding: 1rem;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #f4f4f4;
            color: #333;
            font-weight: bold;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        table tr:nth-child(even) {
            background-color: #fafafa;
        }

        .pagination {
            display: flex;
            justify-content: flex-end;
            margin-top: 1rem;
        }

        .pagination a {
            color: #C9A050;
            text-decoration: none;
            padding: 0.5rem 1rem;
            margin: 0 0.5rem;
            border: 1px solid #C9A050;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .pagination a:hover {
            background-color: #C9A050;
            color: white;
        }

        /* Chart container */
        .chart-container {
            margin: 2rem auto;
            width: 90%;
            max-width: 800px;
            background-color: #fff;
            padding: 1rem;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
    </style>

    <div class="chart-container">
        <h1 class="text-2xl font-bold mb-6">User Registration Stats</h1>
        <canvas id="userRegistrationChart" style="width: 100%; max-height: 400px;"></canvas>
    </div>

    <div class="table-container">
        <h1 class="text-center text-2xl font-bold mb-6">Users List</h1>

        <!-- Users Table -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ ucfirst($user->role) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Pagination Links (if any) --}}
        {{-- <div class="pagination">
            {{ $users->links() }} 
        </div> --}}
    </div>

    {{-- Add Chart.js CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Fetch registration data from the server
        async function fetchUserRegistrationStats() {
            const response = await fetch("{{ route('user.registration.stats') }}");
            const data = await response.json();

            // Extract dates and counts
            const labels = data.map(item => item.date);
            const counts = data.map(item => item.count);

            // Render the chart
            const ctx = document.getElementById('userRegistrationChart').getContext('2d');
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'User Registrations',
                        data: counts,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderWidth: 2,
                        tension: 0.4,
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        x: {
                            title: {
                                display: true,
                                text: 'Date'
                            }
                        },
                        y: {
                            title: {
                                display: true,
                                text: 'Registrations'
                            },
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        // Initialize the chart
        fetchUserRegistrationStats();
    </script>
</x-app-layout>
