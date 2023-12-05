<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Event::all();
        return view('admin.events.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Event::create($request->all());
        // if($request->hasFile('foto')){
        //     $request->file('foto')->move('fotopegawai/', $request->file('foto')->getClientOriginalName());
        //     $data->foto = $request->file('foto')->getClientOriginalName();
        //     $data->save();
        // }

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('fotoAcara');
            $data->foto = $path;
            $data->save();
        }

        return redirect()->route('adminAcara')->with('success', 'Data berhasil di tambahkan');
        // dd($data);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Event::find($id);

        return view('admin.events.edit', compact('data'));
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
        $data = Event::find($id);
        $data->update($request->all());

        return redirect()->route('adminAcara')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Event::find($id);
        $data->delete();

        return redirect()->route('adminAcara')->with('success', 'Data berhasil di delete');
    }
}
