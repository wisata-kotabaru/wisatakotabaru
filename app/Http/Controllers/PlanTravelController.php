<?php

namespace App\Http\Controllers;

use App\Models\planTravel;
use Illuminate\Http\Request;

class PlanTravelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.rencanakanPerjalanan.rencanakanPerjalanan');
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
    public function show(planTravel $planTravel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(planTravel $planTravel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, planTravel $planTravel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(planTravel $planTravel)
    {
        //
    }
}
