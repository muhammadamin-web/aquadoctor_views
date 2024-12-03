<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('Users information') }}
                    </h3>

                    <!-- Qidiruv input qismi -->
                    <input type="text" id="search-unique-id" class="mt-6 px-12 border dark:bg-gray-900 rounded color-black w-100" placeholder="Unique ID bo‘yicha qidirish">
                    <div class="overflow-x-auto w-full">

                    <table class="min-w-full divide-y divide-gray-200 mt-4">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr class="">
                                <th scope="col" class="px-6 py-4 border border-light text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    {{ __('Name') }}
                                </th>
                                <th scope="col" class="px-6 py-3 border border-secondary text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    {{ __('Phone Number') }}
                                </th>
                                <th scope="col" class="px-6 py-3 border text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    {{ __('Unique ID') }}
                                </th>
                                <th scope="col" class="px-6 py-3 border text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    {{ __('Age') }}
                                </th>
                                <th scope="col" class="px-6 py-3 border text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    {{ __('School') }}
                                </th>
                                <th scope="col" class="px-6 py-3 border text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    {{ __('Address') }}
                                </th>
                            </tr>
                        </thead>
                        <tbody id="user-table-body" class="bg-white dark:bg-gray-800 divide-y divide-gray-200">
                            @foreach($users as $user)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap border text-sm font-medium text-gray-900 dark:text-gray-100">
                                    {{ Str::limit($user->name, 30) }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap border text-sm text-gray-500 dark:text-gray-300">
                                    {{ $user->phone_number }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap border text-sm text-gray-500 dark:text-gray-300">
                                    {{ $user->unique_id }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap border text-sm text-gray-500 dark:text-gray-300">
                                    {{ Str::limit($user->age, 3) }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap border text-sm text-gray-500 dark:text-gray-300">
                                    {{ Str::limit($user->school, 30) }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap border text-sm text-gray-500 dark:text-gray-300">
                                    {{ Str::limit($user->address, 30) }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('search-unique-id').addEventListener('keyup', function () {
            let uniqueId = this.value;

            fetch(`/dashboard/search-users?unique_id=${uniqueId}`)
                .then(response => response.json())
                .then(data => {
                    let userTableBody = document.getElementById('user-table-body');
                    userTableBody.innerHTML = '';

                    data.forEach(user => {
                        userTableBody.innerHTML += `
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap border text-sm font-medium text-gray-900 dark:text-gray-100">${user.name.slice(0, 30)}</td>
                                <td class="px-6 py-4 whitespace-nowrap border text-sm text-gray-500 dark:text-gray-300">${user.phone_number}</td>
                                <td class="px-6 py-4 whitespace-nowrap border text-sm text-gray-500 dark:text-gray-300">${user.unique_id}</td>
                                <td class="px-6 py-4 whitespace-nowrap border text-sm text-gray-500 dark:text-gray-300">${user.age.slice(0, 3)}</td>
                                <td class="px-6 py-4 whitespace-nowrap border text-sm text-gray-500 dark:text-gray-300">${user.school.slice(0, 30)}</td>
                                <td class="px-6 py-4 whitespace-nowrap border text-sm text-gray-500 dark:text-gray-300">${user.address.slice(0, 30)}</td>
                            </tr>
                        `;
                    });
                });
        });
    </script>
</x-app-layout>
