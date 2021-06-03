<?php

namespace AuditFirma\MX\Client\Model;

use \ArrayAccess;
use \AuditFirma\MX\Client\ObjectSerializer;

class Persona implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $AuditFirmaModelName = 'Persona';
    
    protected static $AuditFirmaTypes = [
        'primer_nombre' => 'string',
        'segundo_nombre' => 'string',
        'apellido_paterno' => 'string',
        'apellido_materno' => 'string',
        'apellido_adicional' => 'string',
        'rfc' => 'string',
        'domicilio' => '\AuditFirma\MX\Client\Model\Domicilio'
    ];
    
    protected static $AuditFirmaFormats = [
        'primer_nombre' => null,
        'segundo_nombre' => null,
        'apellido_paterno' => null,
        'apellido_materno' => null,
        'apellido_adicional' => null,
        'rfc' => null,
        'domicilio' => null
    ];
    
    public static function AuditFirmaTypes()
    {
        return self::$AuditFirmaTypes;
    }
    
    public static function AuditFirmaFormats()
    {
        return self::$AuditFirmaFormats;
    }
    
    protected static $attributeMap = [
        'primer_nombre' => 'primerNombre',
        'segundo_nombre' => 'segundoNombre',
        'apellido_paterno' => 'apellidoPaterno',
        'apellido_materno' => 'apellidoMaterno',
        'apellido_adicional' => 'apellidoAdicional',
        'rfc' => 'RFC',
        'domicilio' => 'domicilio'
    ];
    
    protected static $setters = [
        'primer_nombre' => 'setPrimerNombre',
        'segundo_nombre' => 'setSegundoNombre',
        'apellido_paterno' => 'setApellidoPaterno',
        'apellido_materno' => 'setApellidoMaterno',
        'apellido_adicional' => 'setApellidoAdicional',
        'rfc' => 'setRfc',
        'domicilio' => 'setDomicilio'
    ];
    
    protected static $getters = [
        'primer_nombre' => 'getPrimerNombre',
        'segundo_nombre' => 'getSegundoNombre',
        'apellido_paterno' => 'getApellidoPaterno',
        'apellido_materno' => 'getApellidoMaterno',
        'apellido_adicional' => 'getApellidoAdicional',
        'rfc' => 'getRfc',
        'domicilio' => 'getDomicilio'
    ];
    
    public static function attributeMap()
    {
        return self::$attributeMap;
    }
    
    public static function setters()
    {
        return self::$setters;
    }
    
    public static function getters()
    {
        return self::$getters;
    }
    
    public function getModelName()
    {
        return self::$AuditFirmaModelName;
    }
    
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['primer_nombre'] = isset($data['primer_nombre']) ? $data['primer_nombre'] : null;
        $this->container['segundo_nombre'] = isset($data['segundo_nombre']) ? $data['segundo_nombre'] : null;
        $this->container['apellido_paterno'] = isset($data['apellido_paterno']) ? $data['apellido_paterno'] : null;
        $this->container['apellido_materno'] = isset($data['apellido_materno']) ? $data['apellido_materno'] : null;
        $this->container['apellido_adicional'] = isset($data['apellido_adicional']) ? $data['apellido_adicional'] : null;
        $this->container['rfc'] = isset($data['rfc']) ? $data['rfc'] : null;
        $this->container['domicilio'] = isset($data['domicilio']) ? $data['domicilio'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['primer_nombre'] === null) {
            $invalidProperties[] = "'primer_nombre' can't be null";
        }
        if ((mb_strlen($this->container['primer_nombre']) > 30)) {
            $invalidProperties[] = "invalid value for 'primer_nombre', the character length must be smaller than or equal to 30.";
        }
        if ((mb_strlen($this->container['primer_nombre']) < 2)) {
            $invalidProperties[] = "invalid value for 'primer_nombre', the character length must be bigger than or equal to 2.";
        }
        if (!is_null($this->container['segundo_nombre']) && (mb_strlen($this->container['segundo_nombre']) > 30)) {
            $invalidProperties[] = "invalid value for 'segundo_nombre', the character length must be smaller than or equal to 30.";
        }
        if (!is_null($this->container['segundo_nombre']) && (mb_strlen($this->container['segundo_nombre']) < 2)) {
            $invalidProperties[] = "invalid value for 'segundo_nombre', the character length must be bigger than or equal to 2.";
        }
        if ($this->container['apellido_paterno'] === null) {
            $invalidProperties[] = "'apellido_paterno' can't be null";
        }
        if ((mb_strlen($this->container['apellido_paterno']) > 30)) {
            $invalidProperties[] = "invalid value for 'apellido_paterno', the character length must be smaller than or equal to 30.";
        }
        if ((mb_strlen($this->container['apellido_paterno']) < 2)) {
            $invalidProperties[] = "invalid value for 'apellido_paterno', the character length must be bigger than or equal to 2.";
        }
        if ($this->container['apellido_materno'] === null) {
            $invalidProperties[] = "'apellido_materno' can't be null";
        }
        if ((mb_strlen($this->container['apellido_materno']) > 30)) {
            $invalidProperties[] = "invalid value for 'apellido_materno', the character length must be smaller than or equal to 30.";
        }
        if ((mb_strlen($this->container['apellido_materno']) < 2)) {
            $invalidProperties[] = "invalid value for 'apellido_materno', the character length must be bigger than or equal to 2.";
        }
        if (!is_null($this->container['apellido_adicional']) && (mb_strlen($this->container['apellido_adicional']) > 30)) {
            $invalidProperties[] = "invalid value for 'apellido_adicional', the character length must be smaller than or equal to 30.";
        }
        if (!is_null($this->container['apellido_adicional']) && (mb_strlen($this->container['apellido_adicional']) < 2)) {
            $invalidProperties[] = "invalid value for 'apellido_adicional', the character length must be bigger than or equal to 2.";
        }
        if (!is_null($this->container['rfc']) && (mb_strlen($this->container['rfc']) > 13)) {
            $invalidProperties[] = "invalid value for 'rfc', the character length must be smaller than or equal to 13.";
        }
        if (!is_null($this->container['rfc']) && (mb_strlen($this->container['rfc']) < 10)) {
            $invalidProperties[] = "invalid value for 'rfc', the character length must be bigger than or equal to 10.";
        }
        if ($this->container['domicilio'] === null) {
            $invalidProperties[] = "'domicilio' can't be null";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getPrimerNombre()
    {
        return $this->container['primer_nombre'];
    }
    
    public function setPrimerNombre($primer_nombre)
    {
        if ((mb_strlen($primer_nombre) > 30)) {
            throw new \InvalidArgumentException('invalid length for $primer_nombre when calling Persona., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($primer_nombre) < 2)) {
            throw new \InvalidArgumentException('invalid length for $primer_nombre when calling Persona., must be bigger than or equal to 2.');
        }
        $this->container['primer_nombre'] = $primer_nombre;
        return $this;
    }
    
    public function getSegundoNombre()
    {
        return $this->container['segundo_nombre'];
    }
    
    public function setSegundoNombre($segundo_nombre)
    {
        if (!is_null($segundo_nombre) && (mb_strlen($segundo_nombre) > 30)) {
            throw new \InvalidArgumentException('invalid length for $segundo_nombre when calling Persona., must be smaller than or equal to 30.');
        }
        if (!is_null($segundo_nombre) && (mb_strlen($segundo_nombre) < 2)) {
            throw new \InvalidArgumentException('invalid length for $segundo_nombre when calling Persona., must be bigger than or equal to 2.');
        }
        $this->container['segundo_nombre'] = $segundo_nombre;
        return $this;
    }
    
    public function getApellidoPaterno()
    {
        return $this->container['apellido_paterno'];
    }
    
    public function setApellidoPaterno($apellido_paterno)
    {
        if ((mb_strlen($apellido_paterno) > 30)) {
            throw new \InvalidArgumentException('invalid length for $apellido_paterno when calling Persona., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($apellido_paterno) < 2)) {
            throw new \InvalidArgumentException('invalid length for $apellido_paterno when calling Persona., must be bigger than or equal to 2.');
        }
        $this->container['apellido_paterno'] = $apellido_paterno;
        return $this;
    }
    
    public function getApellidoMaterno()
    {
        return $this->container['apellido_materno'];
    }
    
    public function setApellidoMaterno($apellido_materno)
    {
        if ((mb_strlen($apellido_materno) > 30)) {
            throw new \InvalidArgumentException('invalid length for $apellido_materno when calling Persona., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($apellido_materno) < 2)) {
            throw new \InvalidArgumentException('invalid length for $apellido_materno when calling Persona., must be bigger than or equal to 2.');
        }
        $this->container['apellido_materno'] = $apellido_materno;
        return $this;
    }
    
    public function getApellidoAdicional()
    {
        return $this->container['apellido_adicional'];
    }
    
    public function setApellidoAdicional($apellido_adicional)
    {
        if (!is_null($apellido_adicional) && (mb_strlen($apellido_adicional) > 30)) {
            throw new \InvalidArgumentException('invalid length for $apellido_adicional when calling Persona., must be smaller than or equal to 30.');
        }
        if (!is_null($apellido_adicional) && (mb_strlen($apellido_adicional) < 2)) {
            throw new \InvalidArgumentException('invalid length for $apellido_adicional when calling Persona., must be bigger than or equal to 2.');
        }
        $this->container['apellido_adicional'] = $apellido_adicional;
        return $this;
    }
    
    public function getRfc()
    {
        return $this->container['rfc'];
    }
    
    public function setRfc($rfc)
    {
        if (!is_null($rfc) && (mb_strlen($rfc) > 13)) {
            throw new \InvalidArgumentException('invalid length for $rfc when calling Persona., must be smaller than or equal to 13.');
        }
        if (!is_null($rfc) && (mb_strlen($rfc) < 10)) {
            throw new \InvalidArgumentException('invalid length for $rfc when calling Persona., must be bigger than or equal to 10.');
        }
        $this->container['rfc'] = $rfc;
        return $this;
    }
    
    public function getDomicilio()
    {
        return $this->container['domicilio'];
    }
    
    public function setDomicilio($domicilio)
    {
        $this->container['domicilio'] = $domicilio;
        return $this;
    }
    
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }
    
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }
    
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
    
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
