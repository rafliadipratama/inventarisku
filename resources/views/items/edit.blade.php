@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded-xl shadow-md">
    <h1 class="text-2xl font-semibold text-gray-800 mb-6">Edit Barang</h1>

    <form action="{{ route('items.update', $item) }}" method="POST" class="space-y-5">
        @csrf
        @method('PUT')

        <!-- Nama -->
        <div>
            <label for="nama" class="block text-sm font-medium text-gray-700">Nama Barang</label>
            <input type="text" name="nama" id="nama" value="{{ old('nama', $item->nama) }}"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            @error('nama')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Kategori -->
        <div>
            <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
            <input type="text" name="kategori" id="kategori" value="{{ old('kategori', $item->kategori) }}"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            @error('kategori')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Jumlah -->
        <div>
            <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah</label>
            <input type="number" name="jumlah" id="jumlah" value="{{ old('jumlah', $item->jumlah) }}"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            @error('jumlah')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Harga Satuan -->
        <div>
            <label for="harga_satuan" class="block text-sm font-medium text-gray-700">Harga Satuan</label>
            <input type="number" step="0.01" name="harga_satuan" id="harga_satuan" value="{{ old('harga_satuan', $item->harga_satuan) }}"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            @error('harga_satuan')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Tombol -->
        <div class="flex items-center justify-between">
            <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md shadow-sm transition">
                Update
            </button>
            <a href="{{ route('items.index') }}" class="text-sm text-gray-600 hover:text-gray-800">← Kembali</a>
        </div>
    </form>
</div>
@endsection
