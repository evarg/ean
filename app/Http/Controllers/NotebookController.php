<?php

namespace App\Http\Controllers;

use App\Models\notebook;
use App\Http\Requests\StorenotebookRequest;
use App\Http\Requests\UpdatenotebookRequest;

class NotebookController extends Controller
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
    public function store(StorenotebookRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(notebook $notebook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(notebook $notebook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatenotebookRequest $request, notebook $notebook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(notebook $notebook)
    {
        //
    }
}
