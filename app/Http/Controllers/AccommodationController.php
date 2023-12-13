<?php

namespace App\Http\Controllers;

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
        return view('frontend.akomodasi.akomodasi', compact('data'));
        // dd($data);
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
    public function show(Accommodation $accommodation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Accommodation $accommodation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Accommodation $accommodation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Accommodation $accommodation)
    {
        //
    }

    public function detailAkomodasi($id){
        // $data = Accommodation::all();
        // return view('frontend.akomodasi.detailAkomodasi', compact('data'));

        $data = Accommodation::find($id); 
        return view('frontend.akomodasi.detailAkomodasi', ['data' => $data]);

        // $data = Accommodation::find($id);
        // return view('frontend.akomodasi.detailAkomodasi', compact('data'));
    }
}
