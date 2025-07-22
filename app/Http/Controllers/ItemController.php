<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Exports\ItemsExport;
use Maatwebsite\Excel\Facades\Excel;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Hanya bisa diakses setelah login
    }

    public function index(Request $request)
    {
        $search = $request->query('search');
        $kategori = $request->query('kategori');

        $items = Item::when($search, function ($query, $search) {
                    $query->where('nama', 'like', "%{$search}%")
                          ->orWhere('kategori', 'like', "%{$search}%");
                })
                ->when($kategori, function ($query, $kategori) {
                    $query->where('kategori', $kategori);
                })
                ->orderBy('created_at', 'desc')
                ->paginate(10);

        $kategoris = Item::select('kategori')->distinct()->pluck('kategori');

        return view('items.index', compact('items', 'search', 'kategori', 'kategoris'));
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(StoreItemRequest $request)
    {
        Item::create($request->validated());

        return redirect()->route('items.index')
            ->with('success', 'Barang berhasil ditambahkan.');
    }

    public function show(Item $item)
    {
        return view('items.show', compact('item'));
    }

    public function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }

    public function update(UpdateItemRequest $request, Item $item)
    {
        $item->update($request->validated());

        return redirect()->route('items.index')
            ->with('success', 'Barang berhasil diperbarui.');
    }

    public function destroy(Item $item)
    {
        $item->delete();

        return redirect()->route('items.index')
            ->with('success', 'Barang berhasil dihapus.');
    }

    public function exportExcel(Request $request)
    {
        $kategori = $request->query('kategori');
        return Excel::download(new ItemsExport($kategori), 'barang.xlsx');
    }
}
