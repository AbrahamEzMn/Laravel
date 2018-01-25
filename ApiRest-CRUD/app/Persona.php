<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //Nombre de la tabla en la base de datos.
    const NOMBRE_TABLA = 'persona';

    //Nombres de los campos de la tabla.
    const ID = 'id';
    const NOMBRE = 'nombre';
    const EDAD = 'edad';
    const SEXO = 'sexo';

    /**
     * Asociamos el modelo con la tabla.
     *
     * @var string
     */
    protected $table = Persona::NOMBRE_TABLA;

    /**
     * Definimos los atributos de nuestro modelo.
     * 
     * @var array
     */
    protected $fillable = [
        Persona::ID, 
        Persona::NOMBRE, 
        Persona::EDAD, 
        Persona::SEXO
    ];
}
