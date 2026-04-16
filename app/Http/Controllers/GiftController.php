<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gift;

class GiftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gifts = Gift::all();
        return view('gifts.index', ['gifts' => $gifts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gifts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:50',
            'url' => 'nullable|string|starts_with:http,https',
            'details' => 'nullable|string',
            'price' => 'required|numeric'
        ]);
        
        Gift::create($request->all());
        return redirect()->route('gifts.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $gift = Gift::find($id);
        return view('gifts.show', ['gift' => $gift]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gift = Gift::find($id);
        return view('gifts.edit', ['gift' => $gift]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:50',
            'url' => 'nullable|string|starts_with:http,https',
            'details' => 'nullable|string',
            'price' => 'required|numeric'
        ]);

        $gift = Gift::find($id);
        $gift->update($request->all());

        return redirect()->route('gifts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gift = Gift::find($id);
        $gift->delete();
        return redirect()->route('gifts.index');
    }
}
