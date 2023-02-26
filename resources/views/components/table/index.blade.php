<table class="min-w-full table-fixed divide-y divide-gray-300" x-data="table()">
    <thead class="bg-gray-50">
        <tr>
            <th scope="col" class="relative w-12 px-6 sm:w-16 sm:px-8">
                <input type="checkbox"
                    class="absolute left-4 top-1/2 -mt-2 h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 sm:left-6">
            </th>
            <th scope="col" class="min-w-[12rem] py-3.5 pr-3 text-left text-sm font-semibold text-gray-900">
                Name</th>
            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Title
            </th>
            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email
            </th>
            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Role
            </th>
            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                <span class="sr-only">Edit</span>
            </th>
        </tr>
    </thead>
    <tbody class="divide-y divide-gray-200 bg-white">
        <!-- Selected: "bg-gray-50" -->
        <tr>
            <td class="relative w-12 px-6 sm:w-16 sm:px-8">
                <!-- Selected row marker, only show when row is selected. -->
                <div class="absolute inset-y-0 left-0 w-0.5 bg-indigo-600"></div>

                <input type="checkbox"
                    class="absolute left-4 top-1/2 -mt-2 h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 sm:left-6">
            </td>
            <!-- Selected: "text-indigo-600", Not Selected: "text-gray-900" -->
            <td class="whitespace-nowrap py-4 pr-3 text-sm font-medium text-gray-900">
                Lindsay Walton</td>
            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Front-end
                Developer</td>
            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                lindsay.walton@example.com</td>
            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Member</td>
            <td class="whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">, Lindsay
                        Walton</span></a>
            </td>
        </tr>

        <!-- More people... -->
    </tbody>
</table>

@push('scripts')
    <script>
        function table() {
            return {
                init: function() {
                    console.log('init')
                }
            }
        }
    </script>
@endpush
