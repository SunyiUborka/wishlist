<?php

namespace App\Http\Controllers;

use App\Models\lista;
use Illuminate\Http\Request;

class ListaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return lista::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validated();
        return lista::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\lista  $lista
     * @return \Illuminate\Http\Response
     */
    public function show(lista $lista)
    {
        $data = lista::findOrFail($lista);
        return $data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\lista  $lista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lista $lista)
    {
        $data = $request->validate();
        $update = lista::findOrFail($lista);
        $update->update($data);
        return $update;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lista  $lista
     * @return \Illuminate\Http\Response
     */
    public function destroy(lista $lista)
    {
        $delete = lista::findOrFail($lista);
        lista::destroy($delete->getKey());
    }
}
