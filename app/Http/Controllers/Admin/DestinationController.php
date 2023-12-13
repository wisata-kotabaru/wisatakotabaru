<?php

namespace App\Http\Controllers\Admin;

use App\Models\Destination;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Destination::all();
        return view('admin.Destinations.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Destinations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Destination::create($request->all());

        if ($request->hasFile('foto')) {
            $data->foto = $request->file('foto')->store('public/fotoDestinasi');
            $data->save();
        }

        return redirect()->route('adminDestinasi')->with('success', 'Data berhasil di tambahkan');
        // dd($data);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Destination::find($id);

        return view('admin.destinations.edit', compact('data'));
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
        $data = Destination::find($id);
        $data->update($request->all());

        return redirect()->route('adminDestinasi')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Destination::find($id);
        $data->delete();

        return redirect()->route('adminDestinasi')->with('success', 'Data berhasil di delete');
    }
}
