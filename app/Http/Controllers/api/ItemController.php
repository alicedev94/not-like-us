<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Models\Items;

class ItemController
{
    public function index()
    {
        $items = Items::all();
        if ($items->isEmpty()) {
            return response()->json(['message' => 'No items found'], 404);
        }
        return response()->json($items);
    }
}
