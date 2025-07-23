<x-layouts.app>

<div class="max-w-6xl mx-auto bg-white shadow-lg rounded-2xl p-8">
  <h2 class="text-2xl font-semibold text-gray-800 mb-6">Add New Category</h2>

  <form action="{{ route('add_category.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    <!-- Category Name -->
    @csrf

    <div>
      <label for="category_name" class="block text-sm font-medium text-gray-700">Category Name</label>
      <input type="text" id="category_name" name="category_name" required
             class="mt-1 block w-full rounded-xl border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 p-3">
    </div>

    <!-- Slug -->
    <div>
      <label for="slug" class="block text-sm font-medium text-gray-700">Slug (optional)</label>
      <input type="text" id="slug" name="slug"
             class="mt-1 block w-full rounded-xl border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 p-3"
             placeholder="auto-generated if left blank">
    </div>


    <!-- Submit Button -->
    <div class="pt-4">
      <button type="submit"
              class="w-full bg-primary-600 hover:bg-primary-700 text-black font-semibold py-3 px-6 rounded-xl shadow-md transition duration-300">
        Add Category
      </button>
    </div>
  </form>
</div>


</x-layouts.app>
