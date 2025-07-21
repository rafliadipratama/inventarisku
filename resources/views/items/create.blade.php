@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-xl font-bold mb-4">Tambah Barang</h1>

    <form action="{{ route('items.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label>Nama Barang</label>
            <input type="text" name="nama" class="w-full border p-2" value="{{ old('nama') }}">
            @error('nama') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label>Kategori</label>
            <input type="text" name="kategori" class="w-full border p-2" value="{{ old('kategori') }}">
            @error('kategori') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label>Jumlah</label>
            <input type="number" name="jumlah" class="w-full border p-2" value="{{ old('jumlah') }}">
            @error('jumlah') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label>Harga Satuan</label>
            <input type="number" step="0.01" name="harga_satuan" class="w-full border p-2" value="{{ old('harga_satuan') }}">
            @error('harga_satuan') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Simpan</button>
            <a href="{{ route('items.index') }}" class="ml-2 text-gray-700">Kembali</a>
        </div>
    </form>
</div>
@endsection
