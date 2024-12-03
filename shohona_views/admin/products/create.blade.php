<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mahsulot yaratish') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 mb-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Mahsulot Nomi</label>
                            <input type="text" name="title" id="title" class="mt-1 block w-full px-4 py-2 border dark:bg-gray-900 rounded" required>
                        </div>
                        <div class="mb-4">
                            <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Mahsulot Rasmi</label>
                            <div id="drop-area" class="mt-1 block w-full px-4 py-2 border dark:bg-gray-900 rounded border-dashed border-gray-500 flex justify-center items-center">
                                <p class="text-gray-500 dark:text-gray-300">Drag & drop your images here or click to select files</p>
                                <input type="file" name="image[]" id="image" multiple class="opacity-0 absolute inset-0 w-full h-full cursor-pointer">
                            </div>
                            @if ($errors->has('image'))
                            <div class="text-red-500 text-xs mt-2">{{ $errors->first('image') }}</div>
                            @endif
                        </div>


                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Mahsulot tavsifi</label>
                            <textarea name="description" id="description" rows="4" class="mt-1 block w-full px-4 py-2 border dark:bg-gray-900 rounded"></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="ingredients" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Masalliqlar</label>
                            <div class="relative mt-1">
                                <input type="text" id="ingredient-search" placeholder="Search..." class="block w-full px-4 py-2 border dark:bg-gray-900 rounded">
                                <div id="ingredient-dropdown" style="max-height: 200px; overflow-y: auto;" class="absolute z-10 mt-1 w-full bg-white dark:bg-gray-700 border border-gray-300 rounded shadow-md max-h-56 overflow-auto hidden">
                                    @foreach($ingredients as $ingredient)
                                    <div class="flex items-center p-2">
                                        <input type="checkbox" id="ingredient-{{ $ingredient->id }}" value="{{ $ingredient->id }}" data-title="{{ $ingredient->title }} ({{ $ingredient->unit }})" data-price="{{ $ingredient->price / $ingredient->count }}" class="ingredient-checkbox mr-2">
                                        <label for="ingredient-{{ $ingredient->id }}" class="text-smtext-gray-700 dark:text-gray-300" style="margin-left: 10px;">{{ $ingredient->title }} ({{ $ingredient->unit }})</label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div id="selected-ingredients" class="mt-4"></div>
                        </div>

                        <div class="mb-4">
                            <h3 class="block text-sm font-medium text-gray-700 dark:text-gray-300">Boshqa kerakli narsalar</h3>
                            <div id="other-ingredients-wrapper">
                                <div class="flex items-center mb-2">
                                    <input type="text" name="other_ingredients_name[]" placeholder="Nomi" class="block w-full px-4 py-2 border dark:bg-gray-900 rounded mr-4">
                                    <input type="number" name="other_ingredients_price[]" placeholder="Narxi" class="block w-full px-4 py-2 border dark:bg-gray-900 rounded">
                                </div>
                            </div>
                            <button type="button" id="add-other-ingredient" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2">Qo'shish</button>
                        </div>

                        <div class="mb-4">
                            <label for="price" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Mahsulot Narxi</label>
                            <input type="text" name="price" id="price" class="mt-1 block w-full px-4 py-2 border dark:bg-gray-900 rounded" required>



                        </div>

                        <div class="mb-4">
                            <button type="button" id="calculate-cost" class="bg-gray-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-2">Tannarxni hisoblash</button>
                            <br><br>
                            <span id="cost-price" class="text-lg font-semibold"></span>
                        </div>

                        <button type="submit" class="bg-gray-500 p-6 mb-20 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Mahsulotni yaratish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/product_image_edit.js') }}" type="text/javascript"></script>

    <script>
        document.getElementById('ingredient-search').addEventListener('focus', function() {
            document.getElementById('ingredient-dropdown').classList.remove('hidden');
        });

        document.getElementById('ingredient-search').addEventListener('input', function() {
            const filter = this.value.toLowerCase();
            const options = document.querySelectorAll('#ingredient-dropdown .flex');
            options.forEach(option => {
                const label = option.querySelector('label').textContent.toLowerCase();
                if (label.includes(filter)) {
                    option.style.display = '';
                } else {
                    option.style.display = 'none';
                }
            });
        });

        document.querySelectorAll('.ingredient-checkbox').forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const selectedIngredientsWrapper = document.getElementById('selected-ingredients');
                if (this.checked) {
                    const selectedIngredientHtml = `
                        <div class="flex items-center mb-2" data-ingredient-id="${this.value}">
                            <input type="hidden" name="ingredients[]" value="${this.value}">
                            <label class="text-sm font-medium text-gray-700 dark:text-gray-300 mr-2">${this.dataset.title}</label>
                            <input type="number" style="margin-left: 10px;" id="price" name="ingredient_counts[${this.value}]" placeholder="Count" class="block w-24 px-2 py-1 border dark:bg-gray-900 rounded mr-2">
                            <button type="button" onclick="removeIngredient(${this.value})" style="margin-left:10px;" class="bg-red-500 text-white ml-2 px-2 py-1 rounded">Remove</button>
                        </div>`;
                    selectedIngredientsWrapper.insertAdjacentHTML('beforeend', selectedIngredientHtml);
                } else {
                    removeIngredient(this.value);
                }
            });
        });

        function removeIngredient(id) {
            const ingredientElement = document.querySelector(`[data-ingredient-id="${id}"]`);
            if (ingredientElement) {
                ingredientElement.remove();
            }
            document.getElementById('ingredient-' + id).checked = false;
        }

        document.addEventListener('click', function(event) {
            const dropdown = document.getElementById('ingredient-dropdown');
            const searchInput = document.getElementById('ingredient-search');
            if (!dropdown.contains(event.target) && event.target !== searchInput) {
                dropdown.classList.add('hidden');
            }
        });

        document.getElementById('add-other-ingredient').addEventListener('click', function() {
            const wrapper = document.getElementById('other-ingredients-wrapper');
            const newIngredient = `
                <div class="flex items-center mt-2 mb-2">
                    <input type="text" name="other_ingredients_name[]" placeholder="Nomi" class="block w-full px-4 py-2 border dark:bg-gray-900 rounded mr-4">
                    <input type="number"  name="other_ingredients_price[]" placeholder="Narxi" class="block w-full px-4 py-2 border dark:bg-gray-900 rounded">
                </div>`;
            wrapper.insertAdjacentHTML('beforeend', newIngredient);
        });

        document.getElementById('calculate-cost').addEventListener('click', function() {
            let totalCost = 0;

            // Calculate cost from selected ingredients
            document.querySelectorAll('#selected-ingredients input[name^="ingredient_counts"]').forEach(input => {
                const ingredientId = input.name.match(/\d+/)[0];
                const quantity = parseFloat(input.value) || 0;
                const pricePerUnit = parseFloat(document.querySelector(`#ingredient-${ingredientId}`).dataset.price) || 0;
                totalCost += quantity * pricePerUnit;
            });

            // Calculate cost from other ingredients
            document.querySelectorAll('input[name="other_ingredients_price[]"]').forEach(input => {
                totalCost += parseFloat(input.value) || 0;
            });

            document.getElementById('cost-price').textContent = `Tannarx: ${totalCost.toLocaleString('en-US')}`;
        });
    </script>


</x-app-layout>