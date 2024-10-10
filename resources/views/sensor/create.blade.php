<x-layout>

<x-slot:title>{{ $title }}</x-slot>

<section class="bg-gray-2 rounded-xl">
	<div class="p-8 shadow-lg">
		<form class="space-y-4" method="POST" action="/sensor/store">
            @csrf
            @method("POST")
			<div class="w-full">
				<label class="sr-only" for="nama_sensor">Nama Sensor</label>
				<input class="input input-solid max-w-full" placeholder="Nama Sensor" type="text" id="nama_sensor" name="nama_sensor" value="{{ old('nama_sensor') }}"/>
                @error('nama_sensor')
                    <span class="form-label-alt text-error">{{ $message }} Please enter a valid nama sensor.</span>
                @enderror
			</div>

      		<div class="w-full">
				<label class="sr-only" for="data_sensor">Data</label>
				<input class="input input-solid max-w-full" placeholder="Data Sensor" type="text" id="data_sensor" name="data_sensor" value="{{ old('data_sensor') }}"/>
                @error('data_sensor')
                    <span class="form-label-alt text-error">{{ $message }} Please enter a valid data sensor.</span>
                @enderror
			</div>

            <div class="w-full">
				<label class="sr-only" for="topic">Topic</label>
				<input class="input input-solid max-w-full" placeholder="Topic" type="text" id="topic" name="topic" value="{{ old('topic') }}"/>
                @error('topic')
                    <span class="form-label-alt text-error">{{ $message }} Please enter a valid data sensor.</span>
                @enderror
			</div>

			<div class="mt-4">
				<button type="submit" class="rounded-lg btn btn-primary btn-block">Submit</button>
			</div>
		</form>
	</div>
</section>
</x-layout>
