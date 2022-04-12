<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemsApiController extends Controller
{
    public function index()
    {
        return Item::all();
    }

    public function store()
    {
        request()->validate([
            'item' => 'required',
            'description' => 'required',
        ]);

        return Item::create([
            'item' => request('item'),
            'description' => request('description')
        ]);
    }

    public function update(Item $item)
    {
        request()->validate([
            'item' => 'required',
            'description' => 'required',
        ]);

        $success = $item->update([
            'item' => request('item'),
            'description' => request('description')
        ]);

        return [
            'success' => $success
        ];
    }

    public function destroy(Item $item)
    {
        $success = $item->delete();

        return [
            'success' => $success
        ];
    }

    public function show(Item $item)
    {
        return $item;
    }
}
