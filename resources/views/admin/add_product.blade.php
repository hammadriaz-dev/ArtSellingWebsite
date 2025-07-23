<x-layouts.app>

    <div class="max-w-6xl mx-auto bg-white shadow-lg rounded-2xl p-8">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Add New Product</h2>

        <form action="{{ route('add_product.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            <!-- Product Name -->
            @csrf
            <div class="flex justify-between">
                <div>
                    <label for="product_name" class="block text-sm font-medium text-gray-700">Product Name</label>
                    <input type="text" id="product_name" name="product_name" required
                        class="mt-1 w-110 rounded-xl border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 p-3">
                </div>

                <!-- SKU -->
                <div>
                    <label for="sku" class="block text-sm font-medium text-gray-700">SKU</label>
                    <input type="text" id="sku" name="sku"
                        class="mt-1 w-110 rounded-xl border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 p-3">
                </div>
            </div>
            <!-- Price -->
            <div>
                <label for="price" class="block text-sm font-medium text-gray-700">Price ($)</label>
                <input type="number" id="price" name="price" step="0.01" min="0"
                    class="mt-1 block w-full rounded-xl border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 p-3">
            </div>

            <!-- Category -->
            <div>
                <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                <select id="category" name="category_id"
                    class="mt-1 block w-full rounded-xl border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 p-3 bg-white">
                    <option value="">Select a category</option>
                    {{-- <option value="electronics">Electronics</option>
                    <option value="clothing">Clothing</option>
                    <option value="books">Books</option> --}}

                    @foreach ($categories as $item)

                    <option value="{{ $item->id }}">{{ $item->category_name }}</option>

                    @endforeach


                    <!-- Add more categories -->
                </select>
            </div>

            <!-- Description -->
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" rows="4"
                    class="mt-1 block w-full rounded-xl border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 p-3 resize-none"
                    placeholder="Write a short description..."></textarea>
            </div>

            <!-- Image Upload -->
            <div>
                <label for="image" class="block text-sm font-medium text-gray-700">Product Image</label>
                <input type="file" id="image" name="image"
                    class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4
                    file:rounded-xl file:border-0 file:text-sm file:font-semibold
                    file:bg-primary-100 file:text-primary-700 hover:file:bg-primary-200" />
            </div>

            <!-- Submit Button -->
            <div class="pt-4">
                <button type="submit"
                    class="w-full bg-primary-600 hover:bg-primary-700 text-black font-semibold py-3 px-6 rounded-xl shadow-md transition duration-300">
                    Add Product
                </button>
            </div>
        </form>
    </div>


</x-layouts.app>
