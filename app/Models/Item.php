<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    // Field yang boleh diisi massal (create/update)
    protected $fillable = [
        'nama',
        'kategori',
        'jumlah',
        'harga_satuan',
    ];
}
