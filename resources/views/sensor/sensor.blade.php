<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <div class="container d-flex justify-content-between">
        <a href="/sensor/create" class="btn btn-outline-secondary">Tambah Data Sensor</a>
    </div><br>

    @session('success')
    <div class="alert alert-success">
        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M24 4C12.96 4 4 12.96 4 24C4 35.04 12.96 44 24 44C35.04 44 44 35.04 44 24C44 12.96 35.04 4 24 4ZM18.58 32.58L11.4 25.4C10.62 24.62 10.62 23.36 11.4 22.58C12.18 21.8 13.44 21.8 14.22 22.58L20 28.34L33.76 14.58C34.54 13.8 35.8 13.8 36.58 14.58C37.36 15.36 37.36 16.62 36.58 17.4L21.4 32.58C20.64 33.36 19.36 33.36 18.58 32.58Z" fill="#00BA34" />
        </svg>
        <div class="flex flex-col">
            <span class="text-content2">{{ session()->get('success') }}</span>
        </div>
    </div>
    @endsession

    <div class="my-4 flex w-full overflow-x-auto">
        <table class="table-zebra table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Sensor</th>
                    <th>Data Sensor</th>
                    <th>Topic</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $sensor as $item )
                <tr>
                    <th>{{ ($sensor->currentPage() - 1) * $sensor->perPage() + $loop->index +1 }}</th>
                    <th>{{ $item->nama_sensor }}</th>
                    <td>{{ $item->data_sensor }}</td>
                    <td>{{ $item->topic }}</td>
                    <td>
                        <div class="gap-1">
                            <form action="/sensor/delete/{{ $item->id }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <a href="/sensor/edit/{{ $item->id }}" class="btn btn-outline-warning">Ubah</a>
                                <button class="btn btn-outline-error" type="submit">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $sensor->links('pagination::tailwind') }}
</x-layout>
