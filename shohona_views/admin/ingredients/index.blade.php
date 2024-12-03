<!-- Tarkibiy qismlar index ko'rinishi -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Masalliqlar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('ingredients.create') }}" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">{{ __('Yangi Masalliqlar Qo\'shish') }}</a>
                </div>
                <div class="mt-2 mb-4 p-4">
                        <input type="text" id="search-ingredient" class="w-full p-6 px-4 py-2 border rounded-md dark:bg-gray-700 dark:text-gray-300" placeholder="Masalliqlar nomi bo'yicha qidirish">
                    </div>
                <div class="p-6 text-gray-900 dark:text-gray-100" style="overflow-x: auto;">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th scope="col" class="px-6 py-4 border border-light text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ __('Nomi') }}</th>
                                <th scope="col" class="px-6 py-4 border text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ __('O‘lchov Birligi') }}</th>
                                <th scope="col" class="px-6 py-4 border text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ __('Soni') }}</th>
                                <th scope="col" class="px-6 py-4 border text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ __('Narxi') }}</th>
                                <th scope="col" class="px-6 py-4 border text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ __('Amallar') }}</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200">
                            @foreach($ingredients as $ingredient)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap border text-sm font-medium text-gray-900 dark:text-gray-100">{{ $ingredient->title }}</td>
                                <td class="px-6 py-4 whitespace-nowrap border text-sm text-gray-500 dark:text-gray-300">{{ $ingredient->unit }}</td>
                                <td class="px-6 py-4 whitespace-nowrap border text-sm text-gray-500 dark:text-gray-300">{{ $ingredient->count }}</td>
                                <td class="px-6 py-4 whitespace-nowrap border text-sm text-gray-500 dark:text-gray-300">{{ $ingredient->price }}</td>
                                <td class="px-6 py-4 whitespace-nowrap border text-sm text-gray-500 dark:text-gray-300">
                                    <a href="{{ route('ingredients.edit', $ingredient->id) }}" class=" text-white font-bold bg-gray-500 mb-8 py-2 px-4 rounded">O'zgartirish</a>
                                    <form action="{{ route('ingredients.destroy', $ingredient->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 mt-4 text-white font-bold py-2 px-4 rounded">O‘chirish</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('search-ingredient').addEventListener('keyup', function () {
            let searchTerm = this.value.toLowerCase();
            let tableRows = document.querySelectorAll('tbody tr');

            tableRows.forEach(row => {
                let title = row.querySelector('td:first-child').textContent.toLowerCase();
                row.style.display = title.includes(searchTerm) ? '' : 'none';
            });
        });
    </script>
</x-app-layout>
