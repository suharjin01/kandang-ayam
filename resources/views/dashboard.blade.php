<x-layout>
    <x-slot:title>{{ $title }}</x-slot>


    <div class="grid gap-4  grid grid-cols-1 tablet:grid-cols-2 laptop:grid-cols-3 desktop:grid-cols-4">
        <div
            class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 bg-gradient-to-r from-violet-200 to-pink-200">
            <div class="flex justify-end px-4 pt-4">
            </div>
            <div class="flex flex-col items-center pb-10">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 512 512">
                    <path fill="currentColor"
                        d="M320 287.18V81c0-35.12-27.89-64.42-63-64.95a64.08 64.08 0 0 0-65 64v207.13a8 8 0 0 1-3.18 6.37A113.48 113.48 0 0 0 144 384a112 112 0 0 0 224 0a113.48 113.48 0 0 0-44.82-90.45a8 8 0 0 1-3.18-6.37M254.07 432a48 48 0 0 1-22-89.54a16 16 0 0 0 8-13.84V112.45c0-8.61 6.62-16 15.23-16.43A16 16 0 0 1 272 112v216.58a16.18 16.18 0 0 0 8.15 13.94A48 48 0 0 1 254.07 432" />
                </svg>
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Suhu</h5>
                <div class="flex mt-4 md:mt-6">
                    <p class="text-content2" id="suhu">0° C</p>
                </div>
            </div>
        </div>

        <div
            class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 bg-gradient-to-r from-indigo-200 to-yellow-100">
            <div class="flex justify-end px-4 pt-4">
            </div>
            <div class="flex flex-col items-center pb-10">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M10 13V5c0-1.66-1.34-3-3-3S4 3.34 4 5v8c-2.21 1.66-2.66 4.79-1 7s4.79 2.66 7 1s2.66-4.79 1-7a4.7 4.7 0 0 0-1-1M7 4c.55 0 1 .45 1 1v3H6V5c0-.55.45-1 1-1m11 3s-4 4.34-4 7.07c0 5.24 8 5.24 8 0C22 11.34 18 7 18 7" />
                </svg>
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Kelembapan</h5>
                <div class="flex mt-4 md:mt-6">
                    <p class="text-content2" id="kelembapan">0 %</p>
                </div>
            </div>
        </div>

        <div
            class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 bg-gradient-to-r from-rose-100 to-teal-100">
            <div class="flex justify-end px-4 pt-4">
            </div>
            <div class="flex flex-col items-center pb-10">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M8 10h8v8h-5l-2-2H7v-5m0-7v2h3v2H7l-2 2v3H3v-3H1v8h2v-3h2v3h3l2 2h8v-4h2v3h3V9h-3v3h-2V8h-6V6h3V4z" />
                </svg>
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Motor Servo</h5>
                <div class="flex mt-4 md:mt-6">
                    <input type="range" min="0" max="180" value="90" name="servo-slider"
                        id="servo-slider">
                </div>
                <div class="flex mt-4 md:mt-6">
                    <p class="text-posisi-servo" id="servo-text">90°</p>
                </div>
            </div>
        </div>

        <div
            class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 bg-gradient-to-r from-violet-200 to-pink-200">
            <div class="flex justify-end px-4 pt-4">
            </div>
            <div class="flex flex-col items-center pb-10">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 48 48">
                    <path fill="white"
                        d="M40 41H8c-2.2 0-4-1.8-4-4V11c0-2.2 1.8-4 4-4h32c2.2 0 4 1.8 4 4v26c0 2.2-1.8 4-4 4" />
                    <path fill="black"
                        d="M36 17h-5l-2-2l2-2h5l2 2zm0 18h-5l-2-2l2-2h5l2 2zm1-5V18l2-2l2 2v12l-2 2zm-11 0V18l2-2l2 2v12l-2 2zm-9-13h-5l-2-2l2-2h5l2 2zm0 18h-5l-2-2l2-2h5l2 2zm1-5V18l2-2l2 2v12l-2 2zM7 30V18l2-2l2 2v12l-2 2z" />
                </svg>
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Display LCD</h5>
                <div class="flex mt-4 md:mt-6">
                    <input type="text" name="text-lcd" id="input-lcd" class="input input-secondary"
                        placeholder="Masukkan Teks">
                </div>
                <div class="flex mt-4 md:mt-6">
                    <button class="btn btn-outline-secondary" type="button" id="btn-submit">Submit</button>
                </div>
            </div>
        </div>

    </div> <br>

    <div class="flex w-full overflow-x-auto">
        <table class="table">
            <thead>
                <tr>
                    <th>ID Device</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($devices as $item)
                    <tr>
                        <td>
                            <span>{{ $item->serial_number }}</span>
                        </td>
                        <td>
                            <span class="status-online">Online</span>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</x-layout>
