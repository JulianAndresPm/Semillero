<?php

namespace App\Http\Controllers\semillero;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class semilleroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('semilleros.home');
    }

    public function proyectos()
    {
        return view('semilleros.proyectos');
    }

    public function adicionarProyectos()
    {
        return view('semilleros.adicionar');
    }

    public function editarProyectos()
    {
        return view('semilleros.editar');
    }

    public function editarProyectosUno()
    {
        return view('semilleros.editarProyecto');
    }

    public function adicionarMonitor()
    {

        return view('semilleros.monitor');
    }

    public function crearMonitor()
    {

        return view('semilleros.home');
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
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
