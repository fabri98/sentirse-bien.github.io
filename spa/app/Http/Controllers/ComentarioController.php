<?php

namespace App\Http\Controllers;

use App\Models\comentario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComentarioController extends Controller
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
    public function storeComentario(Request $request)
    {

        $request->validate([
            'mensaje' => 'required|string|max:255',
        ]);

        $comentario = new comentario();
        $comentario -> mensaje = $request-> mensaje;
        $comentario -> save();

       return redirect()->back()->with('success', 'Gracias por tu comentario!');
    }

    /**
     * Display the specified resource.
     */
    public function show(comentario $comentario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(comentario $comentario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, comentario $comentario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(comentario $comentario)
    {
        //
    }
}
