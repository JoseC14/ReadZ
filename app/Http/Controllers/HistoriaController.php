<?php

namespace App\Http\Controllers;

use App\Models\Historia;
use App\Models\Capitulo;
use Illuminate\Http\Request;

class HistoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $historias =  Historia::paginate(6);

        return view('home',compact('historias'));
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
        $historia= Historia::find($id);

        $capitulos = Capitulo::where('id_historia',$id)->get();

        return view('show',compact('historia','capitulos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Historia $historia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Historia $historia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Historia $historia)
    {
        //
    }
}
