<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
    @foreach ($products as $item)
        <div class="bg-white dark:bg-[#1a1a1a] rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
            <img src="{{ asset('storage/' . $item->image) }}" alt="Abstract Art" class="w-full h-56 object-cover">
            <div class="p-5 space-y-2">
                <h3 class="text-xl font-semibold text-gray-800 dark:text-white">{{ $item->product_name }}</h3>
                <p class="text-gray-600 dark:text-gray-300 text-sm">3D Abstract Canvas • 24x36</p>
                <div class="flex justify-between items-center pt-3">
                    <span class="text-lg font-bold text-gray-900 dark:text-white">{{ $item->price }}</span>
                    <button wire:click.prevent="addToCart({{ $item->id }})"
                        onclick="console.log('Add to cart clicked')"
                        class="px-3 py-1 bg-black text-white text-xs rounded cursor-pointer hover:bg-gray-800 transition">
                        Add to Cart
                    </button>

                </div>
            </div>
        </div>
    @endforeach

</div>
