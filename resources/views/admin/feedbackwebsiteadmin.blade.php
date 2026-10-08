<x-app-layout>
    <style>
        /* Updated CSS for reputation wheel and table layout */
        .table-container {
            margin-top: 20px;
        }
        
        /* Style the table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        /* Reputation Wheel Styling */
        .reputation-wheel-container {
            text-align: center;
            margin-top: 20px;
        }

        #reputationChart {
            max-width: 300px;
            margin: auto;
        }

        .reputation-wheel-container p {
            margin-top: 10px;
            font-size: 16px;
        }
    </style>

    <div class="table-container">
        <h1 class="text-center text-2xl font-bold mb-6">Feedback List</h1>

        <!-- Reputation Wheel -->
        <div class="reputation-wheel-container mt-6 text-center">
            <h2 class="text-xl mb-4">Website Reputation</h2>
            <div id="reputation-wheel">
                <canvas id="reputationChart" width="300" height="300"></canvas>
            </div>

            <p>Total Feedbacks: {{ $totalFeedbacks }}</p>
            <p>Good Feedbacks: {{ $goodFeedbacks }}</p>
            <p>Bad Feedbacks: {{ $badFeedbacks }}</p>
        </div>

        <!-- Users Table -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Rating</th>
                </tr>
            </thead>
            <tbody>
                @foreach($feed as $feeds)
                    <tr>
                        <td>{{ $feeds->id }}</td>
                        <td>{{ $feeds->name }}</td>
                        <td>{{ $feeds->email }}</td>
                        <td>{{ $feeds->message }}</td>
                        <td>{{ $feeds->rating ?? 'N/A' }}</td> <!-- Display the rating -->
                    </tr>
                @endforeach 
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('reputationChart').getContext('2d');
        var reputationChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Good', 'Bad'],
                datasets: [{
                    label: 'User Reputation',
                    data: [{{ $goodFeedbacks }}, {{ $badFeedbacks }}],
                    backgroundColor: ['#28a745', '#dc3545'],
                    borderColor: ['#ffffff', '#ffffff'],
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.label + ': ' + tooltipItem.raw;
                            }
                        }
                    }
                }
            }
        });
    </script>
</x-app-layout>
