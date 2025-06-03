@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin_style.css') }}">
@endsection

@extends('adminlte::page')

@section('title', 'Data Snack')

@section('content')
    <div class="content-header">
        <h1>Snack List</h1>
    </div>
    <x-adminlte-card>

        <a href="{{ route('admin.snack.create') }}" class="btn btn-add mb-3">
            <i class="fas fa-plus"></i> Add Snack
        </a>

        <x-adminlte-datatable id="snackTable" :heads="['No.', 'Image', 'Name', 'Price', 'Stock', 'Action']" striped hoverable bordered with-buttons>
            @foreach ($snacks as $index => $snack)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>
                        @if ($snack->image)
                            <img src="{{ asset('storage/' . $snack->image) }}" alt="Snack Image" width="60" height="60" style="object-fit: cover; border-radius: 8px;">
                        @else
                            <span class="text-muted">No image</span>
                        @endif
                    </td>
                    <td>{{ $snack->name }}</td>
                    <td>Rp{{ number_format($snack->price, 0, ',', '.') }}</td>
                    <td>{{ $snack->stock }}</td>
                    <td>
                        <x-adminlte-button class="btn-edit" icon="fas fa-edit" size="sm"
                            title="Edit" label="Edit"
                            onclick="location.href='{{ route('admin.snack.edit', $snack->id) }}'" />
                        <form action="{{ route('admin.snack.destroy', $snack->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin hapus?')">
                            @csrf
                            @method('DELETE')
                            <x-adminlte-button class="btn-delete" icon="fas fa-trash" size="sm" title="Hapus" label="Hapus" type="submit"/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </x-adminlte-datatable>

    </x-adminlte-card>

    <a href="{{ route('admin.snack.export') }}" class="btn btn-export mb-3">
        Export to Excel
    </a>

    <form action="{{ route('admin.snack.import') }}" method="POST" enctype="multipart/form-data" class="">
        @csrf
        <input type="file" name="file" required>
        <button type="submit" class="btn btn-add">Import Excel</button>
    </form>

    {{-- Success Message --}}
    @if (session('success'))
        <x-adminlte-alert theme="success" title="Berhasil">
            {{ session('success') }}
        </x-adminlte-alert>
    @endif

@endsection
