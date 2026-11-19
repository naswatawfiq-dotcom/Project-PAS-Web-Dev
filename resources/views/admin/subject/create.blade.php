{{-- Modal Create Subject --}}
<div
    id="createSubjectModal"
    tabindex="-1"
    aria-hidden="true"
    class="hidden fixed inset-0 z-50 items-center justify-center w-full h-full overflow-y-auto overflow-x-hidden bg-gray-900/50 dark:bg-gray-900/80"
>
    <div class="relative w-full max-w-lg p-4">
        {{-- Modal Content --}}
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
            {{-- Modal Header --}}
            <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-700">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Tambah Data Mata Pelajaran
                </h3>

                <button
                    type="button"
                    data-modal-hide="createSubjectModal"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                >
                    <svg
                        class="w-3 h-3"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 14 14"
                    >
                        <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                        />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>

            {{-- Modal Body --}}
            <form
                action="{{ route('admin.subjects.store') }}"
                method="POST"
                class="p-4"
            >
                @csrf

                <div class="space-y-4">
                    {{-- Code --}}
                    <div>
                        <label
                            for="subject_code"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        >
                            Kode Mapel
                        </label>

                        <input
                            type="text"
                            name="code"
                            id="subject_code"
                            value="{{ old('code') }}"
                            required
                            placeholder="Contoh: MAPEL-001"
                            class="w-full p-2.5 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        >

                        @error('code')
                            <p class="mt-1 text-sm text-red-600 dark:text-red-400">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Name --}}
                    <div>
                        <label
                            for="subject_name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        >
                            Nama Mata Pelajaran
                        </label>

                        <input
                            type="text"
                            name="name"
                            id="subject_name"
                            value="{{ old('name') }}"
                            required
                            placeholder="Contoh: Pemrograman Web"
                            class="w-full p-2.5 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        >

                        @error('name')
                            <p class="mt-1 text-sm text-red-600 dark:text-red-400">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Teacher --}}
                    <div>
                        <label
                            for="teacher_id"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        >
                            Guru Pengampu
                        </label>

                        <select
                            name="teacher_id"
                            id="teacher_id"
                            required
                            class="w-full p-2.5 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        >
                            <option value="">-- Pilih Guru --</option>

                            @foreach ($teachers as $teacher)
                                <option
                                    value="{{ $teacher->id }}"
                                    {{ old('teacher_id') == $teacher->id ? 'selected' : '' }}
                                >
                                    {{ $teacher->name }}
                                </option>
                            @endforeach
                        </select>

                        @error('teacher_id')
                            <p class="mt-1 text-sm text-red-600 dark:text-red-400">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>

                {{-- Modal Footer --}}
                <div class="flex justify-end gap-2 mt-6">
                    <button
                        type="button"
                        data-modal-hide="createSubjectModal"
                        class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white"
                    >
                        Batal
                    </button>

                    <button
                        type="submit"
                        class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    >
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
