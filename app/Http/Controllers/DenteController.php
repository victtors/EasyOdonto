<?php

namespace App\Http\Controllers;

use App\Dente;
use Illuminate\Http\Request;

class DenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $dentes = Dente::all();

        if($request->api){
             $dentes = Dente::where('nome', 'like','%'.$request->s.'%')->get();
            return ["data" => $dentes];
        }
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
     * @param  \App\Dente  $dente
     * @return \Illuminate\Http\Response
     */
    public function show(Dente $dente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dente  $dente
     * @return \Illuminate\Http\Response
     */
    public function edit(Dente $dente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dente  $dente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dente $dente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dente  $dente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dente $dente)
    {
        //
    }
}
