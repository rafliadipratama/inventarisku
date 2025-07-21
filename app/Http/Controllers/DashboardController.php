<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class DashboardController extends Controller
{
    /**
     * Display the dashboard view.
     */
    public function index()
    {
        $totalItems = Item::count();

        return view('dashboard', [
            'totalItems' => $totalItems,
        ]);
    }
}
