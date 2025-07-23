<div>
<div class="container mx-auto px-4 pt-10 h-screen">
    <h2 class="text-2xl font-bold mb-6">Your Cart</h2>

@forelse ($cartContent as $id => $item)
    <div class="p-4 border-b flex items-center">
        <img src="{{ asset('storage/' . $item['options']['image']) }}" class="w-20 h-20 object-cover rounded" alt="{{ $item['name'] }}">

        <div class="ml-4 flex-grow">
            <h3 class="font-semibold text-lg">{{ $item['name'] }}</h3>
            <p class="text-gray-600">${{ $item['price'] }}</p>
        </div>

        <div class="flex items-center">
            <input type="number"
                   wire:change="updateQuantity('{{ $id }}', $event.target.value)"
                   value="{{ $item['qty'] }}" min="1"
                   class="w-16 py-1 px-2 border rounded text-center">

            <button wire:click="removeItem('{{ $id }}')" class="ml-4 text-red-500 cursor-pointer hover:text-red-700">
                Remove
            </button>
        </div>
    </div>
@empty
    <div class="bg-white rounded-lg shadow-md p-8 text-center">
        <p class="text-gray-600">Your cart is empty</p>
    </div>
@endforelse

<div class="p-4 bg-gray-50 flex justify-between items-center mt-2">
    <span class="font-semibold">Total: ${{ $total }}</span>
    <button class="bg-blue-500 cursor-pointer hover:bg-blue-600 text-white px-4 py-2 rounded">
        <a href="{{ route('checkout.index') }}">Checkout</a>
    </button>
</div>
</div>
</div>
