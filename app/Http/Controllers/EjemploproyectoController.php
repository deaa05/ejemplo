<?php

namespace App\Http\Controllers;

use App\Models\Proyectos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Ejemploproyecto;

class EjemploproyectoController extends Controller
{
    //EjemploproyectoController
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyectos = DB::table('ejemploproyectos')->get();
        return view("projects/index", ['proyectos' => $proyectos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("projects/new");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Ejemploproyecto::create($request->all());
        return redirect('project/')
            ->with('success', 'Proyecto creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proyectos $proyectos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $proyecto = Ejemploproyecto::find($id);
        return view("projects/update",compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         $request->validate([
            'titulo' => 'required|max:255',
            'descripcion' => 'required',
        ]);
        $proyecto = Ejemploproyecto::find($id);
        $proyecto -> update($request->all());
        return redirect('project/')
            ->with('success', 'Proyecto actualizado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $proyecto = EjemploProyecto::findOrFail($id);
        $proyecto->delete();

        return redirect('project/')
            ->with('success', 'Proyecto eliminado correctamente');
    }
}
