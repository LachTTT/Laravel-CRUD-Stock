<?php

namespace App\Http\Controllers;


use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{

    //search
    public function index(Request $request)
    {
        $query = Item::query();

        if ($search = $request->input('search')) {
            $query->where('name', 'like', '%' . $search . '%');
        }

        $items = $query->paginate(10);

        return view('read', [
            'title' => 'Read Page',
            'items' => $items,
        ]);
    }


    // create
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'stock' => 'required|integer',
        ]);

        Item::create($validated);

        return redirect()->route('items.read')->with('success', 'Item added successfully!');
    }

    //edit
    public function edit(Item $item)
    {
        return view('edit', [
            'title' => 'Edit Page',
            'item'  => $item,
        ]);
    }

    //update
    public function update(Request $request, Item $item)
    {
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'stock' => 'required|integer',
        ]);

        $item->update($validated);

        return redirect()->route('items.read')->with('success', 'Item updated successfully!');
    }

    //delete
    public function destroy(Item $item)
    {
        $item->delete();

        return redirect()->route('items.read')->with('success', 'Item deleted successfully!');
    }
}
