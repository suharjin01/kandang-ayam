<x-layout>
    <div class="main bg-white rounded-lg shadow-md p-10
    transition-transform w-96 text-center">
        <h3 class="text-lg">
            <x-slot:title>{{ $title }}</x-slot>
        </h3>

        @if ($errors->any())
            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                role="alert">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        @endif

        @session('success')
            <div class="alert alert-success">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M24 4C12.96 4 4 12.96 4 24C4 35.04 12.96 44 24 44C35.04 44 44 35.04 44 24C44 12.96 35.04 4 24 4ZM18.58 32.58L11.4 25.4C10.62 24.62 10.62 23.36 11.4 22.58C12.18 21.8 13.44 21.8 14.22 22.58L20 28.34L33.76 14.58C34.54 13.8 35.8 13.8 36.58 14.58C37.36 15.36 37.36 16.62 36.58 17.4L21.4 32.58C20.64 33.36 19.36 33.36 18.58 32.58Z"
                        fill="#00BA34" />
                </svg>
                <div class="flex flex-col">
                    <span class="text-content2">{{ session()->get('success') }}</span>
                </div>
            </div>
        @endsession

        @session('danger')
            <div class="alert alert-danger">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M24 4C12.96 4 4 12.96 4 24C4 35.04 12.96 44 24 44C35.04 44 44 35.04 44 24C44 12.96 35.04 4 24 4ZM18.58 32.58L11.4 25.4C10.62 24.62 10.62 23.36 11.4 22.58C12.18 21.8 13.44 21.8 14.22 22.58L20 28.34L33.76 14.58C34.54 13.8 35.8 13.8 36.58 14.58C37.36 15.36 37.36 16.62 36.58 17.4L21.4 32.58C20.64 33.36 19.36 33.36 18.58 32.58Z"
                        fill="#00BA34" />
                </svg>
                <div class="flex flex-col">
                    <span class="text-content2">{{ session()->get('success') }}</span>
                </div>
            </div>
        @endsession

        <form action="/ganti_password" method="post">
            @csrf
            @method('POST')
            <label for="current_password" class="block mb-2 text-left text-gray-700 font-bold">Password Lama:</label>
            <input type="password" id="current_password" name="current_password" placeholder="Enter your Current Password"
                class="block w-full mb-6 px-4 py-2 border
                border-gray-300 rounded-md focus:outline-none
                 focus:border-green-400"
                required>

            <label for="password" class="block mb-2 text-left text-gray-700 font-bold">Password Baru:</label>
            <input type="password" id="password" name="password" placeholder="Enter your Password"
                class="block w-full mb-6 px-4 py-2 border
                border-gray-300 rounded-md focus:outline-none
                 focus:border-green-400"
                required>

            <div class="flex justify-center items-center">
                <button type="submit" class="btn btn-outline-secondary btn-block">
                    Submit
                </button>
            </div>
        </form>
    </div>

</x-layout>
