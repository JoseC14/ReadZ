<?php

namespace App\Http\Controllers;

use App\Models\Capitulo;
use Illuminate\Http\Request;

class CapituloController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $capitulo = Capitulo::find($id);
        return view('chapter', compact('capitulo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Capitulo $capitulo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Capitulo $capitulo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Capitulo $capitulo)
    {
        //
    }
}
