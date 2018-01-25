<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Obtenemos todas las personas.
        $personas = \App\Persona::all();
        
        //Las mostramos como JSON.
        echo $personas->toJson();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        //Creamos a una nueva Persona.
        $persona = new \App\Persona();

        //Le asignamos sus propiedades desde un json.
        $persona->nombre = $request->input('nombre');
        $persona->edad= $request->input('edad');
        $persona->sexo = $request->input('sexo');

        //Guardamos el registro y mostramos un mensaje de acuerdo a si se guardo o no.
        echo $persona->save() ? 'Persona Guardada': 'Error: No se pudo agregar la persona';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Buscamos la persona por su Id.
        $persona = \App\Persona::find($id);
        
        //Validamos si el registro existe.
        if(!$persona)
        {
            echo "Persona no encontrada";
            exit;
        }

        //Mostramos la persona en notación JSON
        echo $persona->toJson();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Buscamos la persona por su Id.
        $persona = \App\Persona::find($id);
                
        //Validamos si el registro existe.
        if(!$persona)
        {
            echo "Persona no encontrada";
            exit;
        }

        //Le asignamos sus nuevos valores.
        $persona->nombre = $request->input('nombre');
        $persona->edad= $request->input('edad');
        $persona->sexo = $request->input('sexo');

        //Gaurdamos sus cambios y mostramos un mensaje del estado de la actualiación.
        echo $persona->save() ? 'Persona Modificada': 'Error: No se pudo modificar la persona';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Buscamos la persona por su Id.
        $persona = \App\Persona::find($id);
                
        //Validamos si el registro existe.
        if(!$persona)
        {
            echo "Persona no encontrada";
            exit;
        }

        //Borramos el registro y mostramos un mensaje sobre si se elimino.
        echo $persona->delete() ? 'Persona Eliminada': 'Error: No se pudo eliminar la persona';
    }
}
