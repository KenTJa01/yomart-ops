<?php

namespace App\Http\Controllers;

use App\Models\Fashion;
use App\Http\Requests\StoreFashionRequest;
use App\Http\Requests\UpdateFashionRequest;

class FashionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreFashionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Fashion $fashion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fashion $fashion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFashionRequest $request, Fashion $fashion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fashion $fashion)
    {
        //
    }
}
