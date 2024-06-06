<?php

namespace App\Http\Controllers;

use App\Models\Apartamento;
use Illuminate\Http\Request;

class ApartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apartamentos = Apartamento::all();
        return view('apartamentos.index', compact('apartamentos'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('apartamentos.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Apartamento::create($request->all());
        return redirect()->route ('apartamentos.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Apartamento $apartamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Apartamento $apartamento)
    {
        return view('apartamentos.edit', compact('apartamento'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Apartamento $apartamento)
    {
        $apartamento->update($request->all());
        return redirect()->route('apartamentos.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Apartamento $apartamento)
    {
        $apartamento->delete();
        return redirect()->route('apartamentos.index');
        //
    }
}
