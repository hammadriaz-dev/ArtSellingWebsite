<x-layouts.app>

<div class="max-w-6xl mx-auto bg-white shadow-lg rounded-2xl p-8">
  <h2 class="text-2xl font-semibold text-gray-800 mb-6">Store Manage</h2>

  <form action="{{ route('store_manage.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf

    <!-- Store Logo -->

            <div>
                <label for="logo" class="block text-sm font-medium text-gray-700">Store Logo</label>
                <input type="file" id="logo" name="logo"
                    class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4
                    file:rounded-xl file:border-0 file:text-sm file:font-semibold
                    file:bg-primary-100 file:text-primary-700 hover:file:bg-primary-200" />
            </div>

    <!-- Hero Image -->

            <div>
                <label for="hero_image" class="block text-sm font-medium text-gray-700">Hero Image</label>
                <input type="file" id="hero_image" name="hero_image"
                    class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4
                    file:rounded-xl file:border-0 file:text-sm file:font-semibold
                    file:bg-primary-100 file:text-primary-700 hover:file:bg-primary-200" />
            </div>


    <!-- Submit Button -->
    <div class="pt-4">
      <button type="submit"
              class="w-full bg-primary-600 hover:bg-primary-700 text-black font-semibold py-3 px-6 rounded-xl shadow-md transition duration-300">
        Add Changes
      </button>
    </div>
  </form>
</div>


</x-layouts.app>
