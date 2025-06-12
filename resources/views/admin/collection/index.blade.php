@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin_style.css') }}">
@endsection

@extends('adminlte::page')

@section('title', 'Data Collection')

@section('content')
    <div class="content-header">
        <h1>Collection List</h1>
    </div>

    <x-adminlte-card>

        <div class="d-flex justify-content-between mb-3">
            <a href="{{ route('admin.collection.create') }}" class="btn btn-add">
                <i class="fas fa-plus"></i> Add Collection
            </a>

            <a href="{{ route('admin.collection.trash') }}" class="btn btn-yellowbrown">
                <i class="fas fa-trash-alt"></i> View Trash
            </a>
        </div>

        <x-adminlte-datatable
            id="collectionTable"
            :heads="['No.', 'Image', 'Name', 'Type', 'Layer', 'Snacks', 'Price', 'Stock', 'Action']"
            striped hoverable bordered with-buttons>

            @foreach ($collections as $index => $collection)
                <tr>
                    <td>{{ $index + 1 }}</td>

                    {{-- Gambar --}}
                    <td>
                        @if ($collection->image)
                            <img src="{{ asset('storage/' . $collection->image) }}" alt="collection image" width="60" height="60" style="object-fit: cover; border-radius: 6px;">
                        @else
                            <span class="text-muted">No Image</span>
                        @endif
                    </td>

                    {{-- Nama --}}
                    <td>{{ $collection->name }}</td>

                    <td>{{ ucfirst($collection->type) }}</td>
                    <td>{{ $collection->layer }}</td>
                    <td>
                        <ul class="pl-3 mb-0">
                            @if ($collection->snack1) <li>{{ $collection->snack1->name }}</li> @endif
                            @if ($collection->layer >= 2 && $collection->snack2) <li>{{ $collection->snack2->name }}</li> @endif
                            @if ($collection->layer >= 3 && $collection->snack3) <li>{{ $collection->snack3->name }}</li> @endif
                            @if ($collection->layer == 4 && $collection->snack4) <li>{{ $collection->snack4->name }}</li> @endif
                        </ul>
                    </td>
                    <td>Rp{{ number_format($collection->price, 0, ',', '.') }}</td>
                    <td>{{ $collection->stock }}</td>
                    <td>
                        <x-adminlte-button class="btn-edit" icon="fas fa-edit" size="sm"
                            title="Edit" label="Edit"
                            onclick="location.href='{{ route('admin.collection.edit', $collection->id) }}'" />
                        <form action="{{ route('admin.collection.destroy', $collection->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin hapus collection ini?')">
                            @csrf
                            @method('DELETE')
                            <x-adminlte-button class="btn-delete" icon="fas fa-trash" size="sm" title="Hapus" label="Hapus" type="submit"/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </x-adminlte-datatable>

    </x-adminlte-card>

    {{-- Tombol Ekspor --}}
    <a href="{{ route('admin.collection.export') }}" class="btn btn-export mb-3">
        Export to Excel
    </a>

    {{-- Form Impor --}}
    <form action="{{ route('admin.collection.import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" required>
        <button type="submit" class="btn btn-add">Import Excel</button>
    </form>

    {{-- Pesan Sukses --}}
    @if (session('success'))
        <x-adminlte-alert theme="success" title="Berhasil" class="mt-3">
            {{ session('success') }}
        </x-adminlte-alert>
    @endif

@endsection
