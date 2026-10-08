<x-plain-layout>
    <div class="container">
        <h2>Pending Orders</h2>

        @if ($pendingOrders->isEmpty())
            <p>You have no pending orders at the moment.</p>
        @else
            <div class="orders">
                @foreach ($pendingOrders as $order)
                    <div class="order">
                        <h3>Order #{{ $order->id }}</h3>
                        <p><strong>Placed On:</strong> {{ $order->created_at->format('F d, Y h:i A') }}</p>
                        <p><strong>Status:</strong> {{ $order->status }}</p>
                        <p><strong>Total:</strong> ${{ number_format($order->total_price, 2) }}</p>

                        <h4>Items:</h4>
                        <ul>
                            @foreach ($order->items as $item)
                                <li>
                                    {{ $item->artwork->title }} - ${{ number_format($item->price, 2) }} 
                                    (Quantity: {{ $item->quantity }})
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <hr>
                @endforeach
            </div>
        @endif
    </div>
</x-plain-layout>
