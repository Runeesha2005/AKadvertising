<x-app-layout>
    <form action="{{ route('product-category.store') }}" method="post" class="max-w-md mx-auto mt-8 p-6 bg-white rounded-md shadow-md">
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
            <input id="name" class="mt-1 p-2 w-full border rounded-md" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        </div>

        <div class="mb-4">
            <label for="slug" class="block text-sm font-medium text-gray-600">Slug</label>
            <input id="slug" class="mt-1 p-2 w-full border rounded-md" type="text" name="slug" :value="old('slug')" required autofocus autocomplete="slug" />
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200">
            Save
        </button>
    </form>
</x-app-layout>