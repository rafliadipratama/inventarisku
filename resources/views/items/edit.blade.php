@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-xl font-bold mb-4">Edit Barang</h1>

    <form action="{{ route('items.update', $item) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label>Nama Barang</label>
            <input type="text" name="nama" class="w-full border p-2" value="{{ old('nama', $item->nama) }}">
            @error('nama') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label>Kategori</label>
            <input type="text" name="kategori" class="w-full border p-2" value="{{ old('kategori', $item->kategori) }}">
            @error('kategori') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label>Jumlah</label>
            <input type="number" name="jumlah" class="w-full border p-2" value="{{ old('jumlah', $item->jumlah) }}">
            @error('jumlah') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label>Harga Satuan</label>
            <input type="number" step="0.01" name="harga_satuan" class="w-full border p-2" value="{{ old('harga_satuan', $item->harga_satuan) }}">
            @error('harga_satuan') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
            <a href="{{ route('items.index') }}" class="ml-2 text-gray-700">Kembali</a>
        </div>
    </form>
</div>
@endsection
