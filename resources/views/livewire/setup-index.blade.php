<div>
    <form wire:submit.prevent="save">
        <div class="mb-6 grid gap-6 md:grid-cols-2">
            <div>
                <label for="first_name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                    Nomer Admin
                    <span class="text-xs text-red-600">( Gunakan +62 atau kode negara )</span>
                </label>
                <input type="text" id="first_name" wire:model="setup.admin_phone"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                    placeholder="Nomer Admin" required>
            </div>
            <div>
                <label for="first_name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                    BCA
                </label>
                <input type="text" id="first_name" wire:model="setup.bca"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                    placeholder="BCA" required>
            </div>
            <div>
                <label for="first_name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                    YOUTUBE
                </label>
                <input type="text" id="first_name" wire:model="setup.youtube"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                    placeholder="YOUTUBE" required>
            </div>
            <div>
                <label for="first_name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                    SHOPEE
                </label>
                <input type="text" id="first_name" wire:model="setup.shopee"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                    placeholder="SHOPEE" required>
            </div>
            <div>
                <label for="first_name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                    DANA
                </label>
                <input type="text" id="first_name" wire:model="setup.dana"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                    placeholder="DANA" required>
            </div>
            <div>
                <label for="first_name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                    OVO
                </label>
                <input type="text" id="first_name" wire:model="setup.ovo"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                    placeholder="OVO" required>
            </div>

        </div>
        <button type="submit"
            class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto">Submit</button>
    </form>

</div>
