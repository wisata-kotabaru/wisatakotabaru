<?php

namespace App\Http\Controllers;

use App\Models\Culinary;
use Illuminate\Http\Request;

class CulinaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Culinary::all();
        return view('frontend.kuliner.kuliner', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Culinary $culinary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Culinary $culinary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Culinary $culinary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Culinary $culinary)
    {
        //
    }

    public function detailKuliner($id)
    {
        $data = Culinary::find($id); 
        return view('frontend.kuliner.detailKuliner', ['data' => $data]);
    }
}
