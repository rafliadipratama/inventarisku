<?php

namespace App\Exports;

use App\Models\Item;
use Maatwebsite\Excel\Concerns\FromCollection;

class ItemsExport implements FromCollection
{
    protected $kategori;

    public function __construct($kategori)
    {
        $this->kategori = $kategori;
    }

    public function collection()
    {
        if ($this->kategori) {
            return Item::where('kategori', $this->kategori)->get();
        }

        return Item::all();
    }
}

