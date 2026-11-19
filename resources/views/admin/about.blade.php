<x-admin.layout>
    <div class="max-w-xl bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700 overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 bg-gray-50/50 dark:bg-gray-800">
            <h3 class="text-base font-semibold text-gray-900 dark:text-white">{{ $title }}</h3>
        </div>

        <div class="p-6 divide-y divide-gray-100 dark:divide-gray-700">
            <div class="py-3 flex justify-between items-center">
                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">Nama Lengkap</span>
                <span class="text-sm font-semibold text-gray-900 dark:text-white">{{ $aboutData['nama'] }}</span>
            </div>

            <div class="py-3 flex justify-between items-center">
                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">Hobi</span>
                <span class="text-sm font-semibold text-gray-900 dark:text-white">{{ $aboutData['hobi'] }}</span>
            </div>

            <div class="py-3 flex justify-between items-center">
                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">Akun GitHub</span>
                <a href="https://github.com/{{ $aboutData['github'] }}" target="_blank" class="text-sm font-semibold text-blue-600 hover:text-blue-700 dark:text-blue-400 hover:underline inline-flex items-center">
                    @{{ $aboutData['github'] }}
                    <svg class="w-3.5 h-3.5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</x-admin.layout>
