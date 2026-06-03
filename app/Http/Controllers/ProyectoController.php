<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Proyecto;


class ProyectoController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::all();
        return view("projects.index",['proyectos'=>$proyectos]);
        
    }

    public function create()
    {
       return view("projects.new");
    }

    public function store(Request $request)
    {
       Proyecto::create([
        'nombre'      => $request->nombre,
        'descripcion' => $request->descripcion,
    ]);
    return redirect('/proyecto')->with('success', 'Proyecto creado satisfactoriamente.');
    }

    public function show(string $id)
    {}

    public function edit(string $id)
    {
        $proyecto=Proyecto::find($id);
        return view("projects.update",compact('proyecto'));
    }
    public function update(Request $request, string $id)
    {  
        $proyecto = Proyecto::find($id);
        $proyecto->nombre      = $request->nombre;
        $proyecto->descripcion = $request->descripcion;
        $proyecto->save();

    return redirect()->route('proyecto.index')->with('success', 'Proyecto actualizado correctamente.');
    }
    public function destroy(string $id)
    {}
}
