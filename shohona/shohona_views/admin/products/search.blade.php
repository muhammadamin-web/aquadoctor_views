<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ ('Mahsulotlar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('products.create') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">
                        {{ ('Yangi mahsulot yaratish') }}
                    </a>
                    
                    <div class="mt-4 mb-4">
                        <input type="text" id="search-product" class="w-full px-4 py-2 border rounded-md dark:bg-gray-700 dark:text-gray-300" placeholder="Mahsulot nomi bo'yicha qidirish">
                    </div>

                    <!-- Desktop ko'rinishi -->
                    <div class="hidden md:block p-6">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-gray-50 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ ('Nomi') }}</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ ('Narxi') }}</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ ('Tannarxi') }}</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ ('Amallar') }}</th>
                                    </tr>
                                </thead>
                                <tbody id="product-table-body" class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                    @foreach($products as $product)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">{{ $product->title }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">{{ number_format($product->price, 0, ',', '.') }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                            {{ number_format($product->ingredients_cost, 0, ',', '.') }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                            <a href="{{ route('products.edit', $product->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-4 rounded mr-2">Tahrirlash</a>
                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-4 rounded" onclick="return confirm('Haqiqatan ham bu mahsulotni o\'chirmoqchimisiz?')">O'chirish</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                        </div>
                    </div>

                    <!-- Mobil ko'rinishi -->
                    <div id="mobile-product-list" class="md:hidden p-6">
                        @foreach($products as $product)
                        <div class="mb-6 bg-white dark:bg-gray-700 rounded-lg overflow-hidden shadow-md">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-2">{{ $product->title }}</h3>
                                <div class="mb-2">
                                    <span class="text-gray-600 dark:text-gray-400">Narxi:</span>
                                    <span class="text-gray-900 dark:text-gray-100 font-medium">{{ number_format($product->price, 0, ',', '.') }}</span>
                                </div>
                                <div class="mb-4">
                                    <span class="text-gray-600 dark:text-gray-400">Tannarxi:</span>
                                    <span class="text-gray-900 dark:text-gray-100 font-medium">
                                        {{ number_format($product->ingredients_cost, 0, ',', '.') }}
                                    </span>
                                </div>
                                <div class="flex justify-between">
                                    <a href="{{ route('products.edit', $product->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Tahrirlash</a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="return confirm('Haqiqatan ham bu mahsulotni o\'chirmoqchimisiz?')">O'chirish</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('search-product').addEventListener('keyup', function () {
            let searchTerm = this.value.toLowerCase();
            let tableRows = document.querySelectorAll('tbody tr');
            let mobileCards = document.querySelectorAll('.md\\:hidden > div');

            tableRows.forEach(row => {
                let title = row.querySelector('td:first-child').textContent.toLowerCase();
                row.style.display = title.includes(searchTerm) ? '' : 'none';
            });

            mobileCards.forEach(card => {
                let title = card.querySelector('h3').textContent.toLowerCase();
                card.style.display = title.includes(searchTerm) ? '' : 'none';
            });
        });
    </script>
    
</x-app-layout>