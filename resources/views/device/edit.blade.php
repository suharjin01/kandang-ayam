<x-layout>

    <x-slot:title>{{ $title }}</x-slot>

    <section class="bg-gray-2 rounded-xl">
        <div class="p-8 shadow-lg">
            <form class="space-y-4" method="POST" action="/device/update/{{ $device->id }}">
                @csrf
                @method("PUT")
                <div class="w-full">
                    <label class="sr-only" for="serial_number">Serial Number</label>
                    <input class="input input-solid max-w-full" placeholder="Serial Number" type="text" id="serial_number" name="serial_number" value="{{ old('serial_number', $device->serial_number) }}"/>
                    @error('serial_number')
                        <span class="form-label-alt text-error">{{ $message }} Please enter a valid serial number.</span>
                    @enderror
                </div>

                  <div class="w-full">
                    <label class="sr-only" for="meta_data">Meta Data</label>
                    <input class="input input-solid max-w-full" placeholder="Meta Data" type="text" id="meta_data" name="meta_data" value="{{ old('meta_data', $device->meta_data) }}"/>
                    @error('meta_data')
                        <span class="form-label-alt text-error">{{ $message }} Please enter a valid meta data.</span>
                    @enderror
                </div>

                <div class="mt-4">
                    <button type="submit" class="rounded-lg btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </section>
</x-layout>
