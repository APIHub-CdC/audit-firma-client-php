<?php

namespace AuditFirma\MX\Client\Model;

use \ArrayAccess;
use \AuditFirma\MX\Client\ObjectSerializer;

class Domicilio implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $AuditFirmaModelName = 'Domicilio';
    
    protected static $AuditFirmaTypes = [
        'calle_numero' => 'string',
        'colonia' => 'string',
        'ciudad' => 'string',
        'estado' => '\AuditFirma\MX\Client\Model\CatalogoEstados'
    ];
    
    protected static $AuditFirmaFormats = [
        'calle_numero' => null,
        'colonia' => null,
        'ciudad' => null,
        'estado' => null
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
        'calle_numero' => 'calleNumero',
        'colonia' => 'colonia',
        'ciudad' => 'ciudad',
        'estado' => 'estado'
    ];
    
    protected static $setters = [
        'calle_numero' => 'setCalleNumero',
        'colonia' => 'setColonia',
        'ciudad' => 'setCiudad',
        'estado' => 'setEstado'
    ];
    
    protected static $getters = [
        'calle_numero' => 'getCalleNumero',
        'colonia' => 'getColonia',
        'ciudad' => 'getCiudad',
        'estado' => 'getEstado'
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
        $this->container['calle_numero'] = isset($data['calle_numero']) ? $data['calle_numero'] : null;
        $this->container['colonia'] = isset($data['colonia']) ? $data['colonia'] : null;
        $this->container['ciudad'] = isset($data['ciudad']) ? $data['ciudad'] : null;
        $this->container['estado'] = isset($data['estado']) ? $data['estado'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['calle_numero'] === null) {
            $invalidProperties[] = "'calle_numero' can't be null";
        }
        if ((mb_strlen($this->container['calle_numero']) > 80)) {
            $invalidProperties[] = "invalid value for 'calle_numero', the character length must be smaller than or equal to 80.";
        }
        if ((mb_strlen($this->container['calle_numero']) < 1)) {
            $invalidProperties[] = "invalid value for 'calle_numero', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['colonia']) && (mb_strlen($this->container['colonia']) > 65)) {
            $invalidProperties[] = "invalid value for 'colonia', the character length must be smaller than or equal to 65.";
        }
        if (!is_null($this->container['colonia']) && (mb_strlen($this->container['colonia']) < 1)) {
            $invalidProperties[] = "invalid value for 'colonia', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['ciudad']) && (mb_strlen($this->container['ciudad']) > 65)) {
            $invalidProperties[] = "invalid value for 'ciudad', the character length must be smaller than or equal to 65.";
        }
        if (!is_null($this->container['ciudad']) && (mb_strlen($this->container['ciudad']) < 1)) {
            $invalidProperties[] = "invalid value for 'ciudad', the character length must be bigger than or equal to 1.";
        }
        if ($this->container['estado'] === null) {
            $invalidProperties[] = "'estado' can't be null";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getCalleNumero()
    {
        return $this->container['calle_numero'];
    }
    
    public function setCalleNumero($calle_numero)
    {
        if ((mb_strlen($calle_numero) > 80)) {
            throw new \InvalidArgumentException('invalid length for $calle_numero when calling Domicilio., must be smaller than or equal to 80.');
        }
        if ((mb_strlen($calle_numero) < 1)) {
            throw new \InvalidArgumentException('invalid length for $calle_numero when calling Domicilio., must be bigger than or equal to 1.');
        }
        $this->container['calle_numero'] = $calle_numero;
        return $this;
    }
    
    public function getColonia()
    {
        return $this->container['colonia'];
    }
    
    public function setColonia($colonia)
    {
        if (!is_null($colonia) && (mb_strlen($colonia) > 65)) {
            throw new \InvalidArgumentException('invalid length for $colonia when calling Domicilio., must be smaller than or equal to 65.');
        }
        if (!is_null($colonia) && (mb_strlen($colonia) < 1)) {
            throw new \InvalidArgumentException('invalid length for $colonia when calling Domicilio., must be bigger than or equal to 1.');
        }
        $this->container['colonia'] = $colonia;
        return $this;
    }
    
    public function getCiudad()
    {
        return $this->container['ciudad'];
    }
    
    public function setCiudad($ciudad)
    {
        if (!is_null($ciudad) && (mb_strlen($ciudad) > 65)) {
            throw new \InvalidArgumentException('invalid length for $ciudad when calling Domicilio., must be smaller than or equal to 65.');
        }
        if (!is_null($ciudad) && (mb_strlen($ciudad) < 1)) {
            throw new \InvalidArgumentException('invalid length for $ciudad when calling Domicilio., must be bigger than or equal to 1.');
        }
        $this->container['ciudad'] = $ciudad;
        return $this;
    }
    
    public function getEstado()
    {
        return $this->container['estado'];
    }
    
    public function setEstado($estado)
    {
        $this->container['estado'] = $estado;
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
