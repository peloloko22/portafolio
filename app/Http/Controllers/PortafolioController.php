<?php

namespace App\Http\Controllers;

use App\Models\portafolio;
use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
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
        $portafolio = new portafolio();
        $portafolio->nombre = $request->name;
        $portafolio->email = $request->email;
        $portafolio->asunto = $request->subject;
        $portafolio->mensaje = $request->message;
        $portafolio->save();
         return redirect()->back()->with('success', 'Su mensaje fue enviado con éxito!');

    }

    /**
     * Display the specified resource.
     */
    public function show(portafolio $portafolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(portafolio $portafolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, portafolio $portafolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(portafolio $portafolio)
    {
        //
    }
    public function vista2()
    {
        return view('portfolio-details');
    }
}
