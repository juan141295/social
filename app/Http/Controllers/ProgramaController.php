<?php

namespace App\Http\Controllers;

use App\Programa;
use Illuminate\Http\Request;

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($rol = null)
    {
        //carga la relacion con usuarios
        //$programas = Programa::all()->load('users');
        //carga la relacion con usuarios, especificando la columna
        //$programas = Programa::where('nombre','!=','Finanzas')->get();
        //Consulta avanzada, con with se pasa un arreglo, con whereHas no se utilizan arreglos
        if (isset($rol)) {
            $programas = Programa::Rol($rol)->get();
        } else {
            $programas = Programa::all()->load('users');
        }
        /*$programas = Programa::whereHas('users', function($query) {
            $query->where('rol','Prestador');
            $query->where('nombre','Pedro');
        })->get();*/
        return view('programa.indexPrograma', compact('programas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function show(Programa $programa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function edit(Programa $programa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Programa $programa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Programa $programa)
    {
        //
    }
}
