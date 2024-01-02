<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Place;
use Illuminate\Http\Request;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $markers = Place::all();
        return view('admin.maps.index', compact('markers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.maps.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $markers = Place::create($request->all());

        if ($request->hasFile('foto')) {
            $markers->foto = $request->file('foto')->store('public/fotoLokasi');
            $markers->save();
        }

        return redirect()->route('adminMap')->with('success', 'Data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $markers = Place::find($id);

        return view('admin.maps.edit', compact('markers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $markers = Place::find($id);
        $markers->update($request->all());

        return redirect()->route('adminMap')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $markers = Place::find($id);
        $markers->delete();

        return redirect()->route('adminMap')->with('success', 'Data berhasil di delete');
    }
}
