<?php

namespace App\Http\Controllers\Admin;

use App\Models\Culinary;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CulinaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Culinary::all();
        return view('admin.culinarys.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.culinarys.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Culinary::create($request->all());

        if ($request->hasFile('foto')) {
            $data->foto = $request->file('foto')->store('public/fotoKuliner');
            $data->save();
        }

        return redirect()->route('adminKuliner')->with('success', 'Data berhasil di tambahkan');
        // dd($data);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Culinary::find($id);

        return view('admin.culinarys.edit', compact('data'));
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
        $data = Culinary::find($id);
        $data->update($request->all());

        return redirect()->route('adminKuliner')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Culinary::find($id);
        $data->delete();

        return redirect()->route('adminKuliner')->with('success', 'Data berhasil di delete');
    }
}
