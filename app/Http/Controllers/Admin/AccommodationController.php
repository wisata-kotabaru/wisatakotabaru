<?php

namespace App\Http\Controllers\Admin;

use App\Models\Accommodation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccommodationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Accommodation::all();
        return view('admin.accomodations.index', compact('data'));
        // dd($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.accomodations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Accommodation::create($request->all());

        if ($request->hasFile('foto')) {
            $data->foto = $request->file('foto')->store('public/fotoAkomodasi');
            $data->save();
        }

        return redirect()->route('adminAkomodasi')->with('success', 'Data berhasil di tambahkan');
        // dd($data);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Accommodation::find($id);

        return view('admin.accomodations.edit', compact('data'));
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
        $data = Accommodation::find($id);
        $data->update($request->all());

        return redirect()->route('adminAkomodasi')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Accommodation::find($id);
        $data->delete();

        return redirect()->route('adminAkomodasi')->with('success', 'Data berhasil di delete');
    }
}
