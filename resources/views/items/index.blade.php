@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-surface p-6 rounded-lg shadow-md">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6">
            <h1 class="text-2xl font-bold text-heading mb-4 sm:mb-0">📦 Data Inventaris</h1>
            <div class="flex flex-wrap gap-2">
                {{-- Filter & Search --}}
                <form method="GET" action="{{ route('items.index') }}" class="flex gap-2 items-center">
                    <select name="kategori" class="border border-gray-300 px-2 py-2 rounded text-sm bg-white">
                        <option value="">Semua Kategori</option>
                        @foreach($kategoris as $kategori)
                            <option value="{{ $kategori }}" {{ request('kategori') == $kategori ? 'selected' : '' }}>
                                {{ $kategori }}
                            </option>
                        @endforeach
                    </select>
                    <input
                        type="text"
                        name="search"
                        value="{{ $search }}"
                        placeholder="Cari barang..."
                        class="border border-gray-300 px-3 py-2 rounded-l-md focus:outline-none focus:ring-2 focus:ring-primary text-sm text-text bg-white"
                    >
                    <button type="submit" class="bg-primary hover:bg-blue-600 text-white px-4 py-2 rounded-r-md text-sm">
                        Cari
                    </button>
                </form>

                {{-- Tambah & Export --}}
                <a href="{{ route('items.create') }}" class="bg-secondary hover:bg-green-600 text-white px-4 py-2 rounded text-sm">
                    + Tambah Barang
                </a>

                {{-- Export Excel --}}
                <form method="GET" action="{{ route('items.export.excel') }}">
                    <input type="hidden" name="kategori" value="{{ request('kategori') }}">
                    <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded text-sm">
                        📤 Export Excel
                    </button>
                </form>
            </div>
        </div>

        {{-- Notifikasi --}}
        @if (session('success'))
            <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4 border border-green-300 text-sm">
                {{ session('success') }}
            </div>
        @endif

        {{-- Tabel --}}
        <div class="overflow-x-auto">
            <table class="min-w-full text-sm text-left text-text border border-gray-300 rounded-lg overflow-hidden">
                <thead class="bg-background text-heading uppercase text-xs">
                    <tr>
                        <th class="px-4 py-3 border">Nama</th>
                        <th class="px-4 py-3 border">Kategori</th>
                        <th class="px-4 py-3 border">Jumlah</th>
                        <th class="px-4 py-3 border">Harga Satuan</th>
                        <th class="px-4 py-3 border text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($items as $item)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-4 py-2 border">{{ $item->nama }}</td>
                            <td class="px-4 py-2 border">{{ $item->kategori }}</td>
                            <td class="px-4 py-2 border">{{ $item->jumlah }}</td>
                            <td class="px-4 py-2 border">Rp {{ number_format($item->harga_satuan, 0, ',', '.') }}</td>
                            <td class="px-4 py-2 border text-center">
                                <div class="flex justify-center gap-2">
                                    <a href="{{ route('items.edit', $item) }}" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-xs font-semibold transition flex items-center gap-1">
                                        ✏️ Edit
                                    </a>
                                    <form action="{{ route('items.destroy', $item) }}" method="POST" onsubmit="return confirm('Yakin ingin hapus?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs font-semibold transition flex items-center gap-1">
                                            🗑️ Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center px-4 py-4 text-gray-500">Tidak ada data.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            {{ $items->appends(['search' => $search, 'kategori' => request('kategori')])->links() }}
        </div>
    </div>
</div>
@endsection
