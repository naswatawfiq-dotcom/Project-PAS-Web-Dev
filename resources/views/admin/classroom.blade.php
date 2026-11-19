<x-admin.layout>
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Classrooms</h1>
            <p class="text-sm text-gray-500 mt-1">Kelola data kelas dan jurusan.</p>
        </div>
        <!-- Tambahkan atribut data-modal-target dan data-modal-toggle di sini -->
        <button type="button" data-modal-target="createClassroomModal" data-modal-toggle="createClassroomModal" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            + Tambah Kelas
        </button>
    </div>

    @if (session('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <span class="font-medium">{{ session('success') }}</span>
        </div>
    @endif

    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden border border-gray-100 dark:border-gray-700">
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border-b dark:border-gray-700">
                    <tr>
                        <th scope="col" class="px-6 py-4">NO</th>
                        <th scope="col" class="px-6 py-4">CLASSROOM NAME</th>
                        <th scope="col" class="px-6 py-4">MAJOR</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($classrooms as $index => $classroom)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">{{ $index + 1 }}</td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ is_array($classroom) ? $classroom['name'] : $classroom->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ is_array($classroom) ? $classroom['major'] : $classroom->major }}
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="px-6 py-4 text-center text-gray-500">
                            Belum ada data kelas.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Sertakan file modal create di sini agar tombol bisa memanggilnya -->
    @include('admin.classroom.create')

</x-admin.layout>
