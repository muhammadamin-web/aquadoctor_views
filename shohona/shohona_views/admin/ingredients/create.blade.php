<!-- Ingredient Create View -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Masalliq yaratish') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('ingredients.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Masalliq nomi</label>
                            <input type="text" name="title" id="title" class="mt-1 block w-full px-4 py-2 border dark:bg-gray-900 rounded" required>
                        </div>

                        <div class="mb-4">
                            <label for="count" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Soni   |   Og'irligi</label>
                            <input type="number" step="0.01" name="count" id="count" class="mt-1 block w-full px-4 py-2 border dark:bg-gray-900 rounded" required>
                        </div>

                        <div class="mb-4">
                            <label for="unit" class="block text-sm font-medium text-gray-700 dark:text-gray-300">O'lchov birligi (litr, gr, ml, dona)</label>
                            <input type="text" name="unit" id="unit" class="mt-1 block w-full px-4 py-2 border dark:bg-gray-900 rounded" required>
                        </div>

                        <div class="mb-4">
                            <label for="price" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Narxi</label>
                            <input type="number" step="0.01" name="price" id="price" class="mt-1 block w-full px-4 py-2 border dark:bg-gray-900 rounded" required>
                        </div>

                        <button type="submit" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Mahsulotni yaratish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
