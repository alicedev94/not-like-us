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

    public function store(Request $request)
    {
        $item = Items::create($request->all());
        return response()->json($item, 201);
    }

    public function show($id)
    {
        $item = Items::find($id);
        return response()->json($item);
    }

    public function update(Request $request, $id)
    {
        $item = Items::find($id);
        $item->update($request->all());
        return response()->json($item, 200);
    }

    public function destroy($id)
    {
        $item = Items::find($id);
        $item->delete();
        return response()->json(null, 204);
    }
}
