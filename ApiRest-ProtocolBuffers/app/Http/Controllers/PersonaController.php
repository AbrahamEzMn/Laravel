<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Creamos un objeto de la clase PersonasMessage.
        $personasMessage = new \ProtocolBuffers\PersonasMessage();

        // Obtenemos todas las personas.
        $personas = \App\Persona::all();

        // Creamos un array con la propiedad 'lista' y guardaremos los datos de personas como un 'Array'
        $personasArray['lista'] = $personas->toArray();
        
        // Transformamos el array a JSON.
        $personasArrayJson = json_encode($personasArray);

        // Cargamos los datos del JSON dentro de PersonasMessage.
        $personasMessage->mergeFromJsonString($personasArrayJson);

        echo 
            ($request->header('Content-Type') == 'application/x-protobuf') ?
                //Serializamos los datos como bytes.
                $personasMessage->serializeToString() :
                //Serializamos los datos como json.
                $personasMessage->serializeToJsonString();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Creamos un objeto de la clase PersonaMessage.
        $personaMessage = new \ProtocolBuffers\PersonaMessage();

        //Creamos a una nueva Persona.
        $persona = new \App\Persona();

        if($request->header('Content-Type') == 'application/x-protobuf')
        {
            $personaMessage->mergeFromString($request->getContent());
        }
        else
        {
            $personaMessage->mergeFromJsonString($request->getContent());
        }

        //Le asignamos sus propiedades.
        $persona->nombre = $personaMessage->getNombre();
        $persona->edad= $personaMessage->getEdad();
        $persona->sexo = $personaMessage->getSexo();

        //Guardamos el registro y mostramos un mensaje de acuerdo a si se guardo o no.
        echo $persona->save() ? 'Persona Guardada': 'Error: No se pudo agregar la persona';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        // Creamos un objeto de la clase PersonaMessage.
        $personaMessage = new \ProtocolBuffers\PersonaMessage();

        //Buscamos la persona por su Id.
        $persona = \App\Persona::find($id);
        
        //Validamos si el registro existe.
        if(!$persona)
        {
            echo "Persona no encontrada";
            exit;
        }

        // Cargamos los datos del JSON dentro de PersonaMessage.
        $personaMessage->mergeFromJsonString($persona->toJson());

        echo 
            ($request->header('Content-Type') == 'application/x-protobuf') ?
                //Serializamos los datos como bytes.
                $personaMessage->serializeToString() :
                //Serializamos los datos como json.
                $personaMessage->serializeToJsonString();
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
        // Creamos un objeto de la clase PersonaMessage.
        $personaMessage = new \ProtocolBuffers\PersonaMessage();

        //Buscamos la persona por su Id.
        $persona = \App\Persona::find($id);
                
        //Validamos si el registro existe.
        if(!$persona)
        {
            echo "Persona no encontrada";
            exit;
        }

        if($request->header('Content-Type') == 'application/x-protobuf')
        {
            $personaMessage->mergeFromString($request->getContent());
        }
        else
        {
            $personaMessage->mergeFromJsonString($request->getContent());
        }
        
        //Le asignamos sus nuevos valores.
        $persona->nombre = $personaMessage->getNombre();
        $persona->edad= $personaMessage->getEdad();
        $persona->sexo = $personaMessage->getSexo();

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
