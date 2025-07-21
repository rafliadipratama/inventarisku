@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Detail Barang
    </h2>
@endsection

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow">
        <h3 class="text-lg font-bold mb-4">Informasi Barang</h3>

        <div class="mb-3">
            <strong>Nama:</strong>
            <p>{{ $item->nama }}</p>
        </div>

        <div class="mb-3">
            <strong>Kategori:</strong>
            <p>{{ $item->kategori }}</p>
        </div>

        <div class="mb-3">
            <strong>Jumlah:</strong>
            <p>{{ $item->jumlah }}</p>
        </div>

        <div class="mb-3">
            <strong>Harga Satuan:</strong>
            <p>Rp {{ number_format($item->harga_satuan, 0, ',', '.') }}</p>
        </div>

        <div class="mt-6 flex justify-between">
            <a href="{{ route('items.index') }}"
               class="inline-block px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400 transition">
                Kembali
            </a>

            <a href="{{ route('items.edit', $item->id) }}"
               class="inline-block px-4 py-2 bg-yellow-400 text-white rounded hover:bg-yellow-500 transition">
                Edit Barang
            </a>
        </div>
    </div>
@endsection
