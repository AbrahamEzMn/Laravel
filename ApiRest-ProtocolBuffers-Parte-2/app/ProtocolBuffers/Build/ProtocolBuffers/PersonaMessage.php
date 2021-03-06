<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Esquemas/PersonaMessage.proto

namespace ProtocolBuffers;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Esquema que servira para generar nuestras clases de Persona.
 *
 * Generated from protobuf message <code>ProtocolBuffers.PersonaMessage</code>
 */
class PersonaMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Declaramos las propiedades similares a la de nuestra entidad 
     * de Personas de la base de datos.
     *
     * Generated from protobuf field <code>int32 id = 1;</code>
     */
    private $id = 0;
    /**
     * Generated from protobuf field <code>string nombre = 2;</code>
     */
    private $nombre = '';
    /**
     * Generated from protobuf field <code>int32 edad = 3;</code>
     */
    private $edad = 0;
    /**
     * Generated from protobuf field <code>int32 sexo = 4;</code>
     */
    private $sexo = 0;
    /**
     * Generated from protobuf field <code>string created_at = 5;</code>
     */
    private $created_at = '';
    /**
     * Generated from protobuf field <code>string updated_at = 6;</code>
     */
    private $updated_at = '';

    public function __construct() {
        \GPBMetadata\Esquemas\PersonaMessage::initOnce();
        parent::__construct();
    }

    /**
     * Declaramos las propiedades similares a la de nuestra entidad 
     * de Personas de la base de datos.
     *
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Declaramos las propiedades similares a la de nuestra entidad 
     * de Personas de la base de datos.
     *
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string nombre = 2;</code>
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Generated from protobuf field <code>string nombre = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNombre($var)
    {
        GPBUtil::checkString($var, True);
        $this->nombre = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 edad = 3;</code>
     * @return int
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Generated from protobuf field <code>int32 edad = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setEdad($var)
    {
        GPBUtil::checkInt32($var);
        $this->edad = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 sexo = 4;</code>
     * @return int
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Generated from protobuf field <code>int32 sexo = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setSexo($var)
    {
        GPBUtil::checkInt32($var);
        $this->sexo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string created_at = 5;</code>
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Generated from protobuf field <code>string created_at = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkString($var, True);
        $this->created_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string updated_at = 6;</code>
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Generated from protobuf field <code>string updated_at = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setUpdatedAt($var)
    {
        GPBUtil::checkString($var, True);
        $this->updated_at = $var;

        return $this;
    }

}

