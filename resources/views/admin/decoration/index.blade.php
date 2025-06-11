@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin_style.css') }}">
@endsection

@extends('adminlte::page')

@section('title', 'Data Decoration')

@section('content')
    <div class="content-header">
        <h1>Decoration List</h1>
    </div>

    <x-adminlte-card>

        <div class="d-flex justify-content-between mb-3">
            <a href="{{ route('admin.decoration.create') }}" class="btn btn-add">
                <i class="fas fa-plus"></i> Add Decoration
            </a>

            {{-- Tombol ke halaman recycle bin --}}
            <a href="{{ route('admin.decoration.trash') }}" class="btn btn-yellowbrown">
                <i class="fas fa-trash-alt"></i> View Trash
            </a>
        </div>

        <x-adminlte-datatable id="decorationTable" :heads="['No.', 'Image', 'Name', 'Price', 'Stock', 'Action']" striped hoverable bordered with-buttons>
            @foreach ($decorations as $index => $decoration)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>
                        @if ($decoration->image)
                            <img src="{{ asset('storage/' . $decoration->image) }}" alt="Decoration Image" width="60" height="60" style="object-fit: cover; border-radius: 8px;">
                        @else
                            <span class="text-muted">No image</span>
                        @endif
                    </td>
                    <td>{{ $decoration->name }}</td>
                    <td>Rp{{ number_format($decoration->price, 0, ',', '.') }}</td>
                    <td>{{ $decoration->stock }}</td>
                    <td>
                        <x-adminlte-button class="btn-edit" icon="fas fa-edit" size="sm"
                            title="Edit" label="Edit"
                            onclick="location.href='{{ route('admin.decoration.edit', $decoration->id) }}'" />
                        <form action="{{ route('admin.decoration.destroy', $decoration->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin hapus decoration ini?')">
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
    <a href="{{ route('admin.decoration.export') }}" class="btn btn-export mb-3">
        Export to Excel
    </a>

    {{-- Form Impor --}}
    <form action="{{ route('admin.decoration.import') }}" method="POST" enctype="multipart/form-data">
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
