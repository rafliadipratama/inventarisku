@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-heading leading-tight">
        Dashboard
    </h2>
@endsection

@section('content')
<div class="bg-surface rounded-xl shadow-md p-8">
    <div class="mb-6">
        <h3 class="text-3xl font-extrabold text-heading">Selamat Datang, {{ Auth::user()->name }} 👋</h3>
        <p class="mt-2 text-text text-sm">Anda berada di halaman utama aplikasi manajemen inventaris.</p>
    </div>

    <!-- Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Total Barang -->
        <div class="bg-gradient-to-br from-blue-100 via-white to-white border-l-4 border-primary rounded-lg shadow hover:shadow-md transition p-6">
            <div class="flex items-center justify-between">
                <div>
                    <h4 class="text-sm font-medium text-text uppercase">Total Barang</h4>
                    <p class="text-3xl font-bold text-primary mt-2">{{ $totalItems }}</p>
                </div>
                <div class="text-primary">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h18v6H3zM3 9h18v6H3zM3 15h18v6H3z" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Tambah Barang -->
        <a href="{{ route('items.create') }}" class="block bg-gradient-to-br from-green-100 via-white to-white border-l-4 border-secondary rounded-lg shadow hover:shadow-md transition p-6 hover:bg-green-50">
            <div class="flex items-center justify-between">
                <div>
                    <h4 class="text-sm font-medium text-text uppercase">Tambah Barang</h4>
                    <p class="text-secondary font-semibold mt-2">+ Input Barang Baru</p>
                </div>
                <div class="text-secondary">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                </div>
            </div>
        </a>

        <!-- Kelola Barang -->
        <a href="{{ route('items.index') }}" class="block bg-gradient-to-br from-yellow-100 via-white to-white border-l-4 border-yellow-500 rounded-lg shadow hover:shadow-md transition p-6 hover:bg-yellow-50">
            <div class="flex items-center justify-between">
                <div>
                    <h4 class="text-sm font-medium text-text uppercase">Kelola Barang</h4>
                    <p class="text-yellow-700 font-semibold mt-2">📦 Lihat Data Barang</p>
                </div>
                <div class="text-yellow-500">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20 12H4M12 4l8 8-8 8" />
                    </svg>
                </div>
            </div>
        </a>
    </div>
</div>
@endsection
