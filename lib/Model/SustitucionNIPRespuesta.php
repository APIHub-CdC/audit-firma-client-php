<?php

namespace AuditFirma\MX\Client\Model;

use \ArrayAccess;
use \AuditFirma\MX\Client\ObjectSerializer;

class SustitucionNIPRespuesta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $AuditFirmaModelName = 'SustitucionNIPRespuesta';
    
    protected static $AuditFirmaTypes = [
        'folio_cdc' => 'int'
    ];
    
    protected static $AuditFirmaFormats = [
        'folio_cdc' => 'int32'
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
        'folio_cdc' => 'folioCDC'
    ];
    
    protected static $setters = [
        'folio_cdc' => 'setFolioCdc'
    ];
    
    protected static $getters = [
        'folio_cdc' => 'getFolioCdc'
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
        $this->container['folio_cdc'] = isset($data['folio_cdc']) ? $data['folio_cdc'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getFolioCdc()
    {
        return $this->container['folio_cdc'];
    }
    
    public function setFolioCdc($folio_cdc)
    {
        $this->container['folio_cdc'] = $folio_cdc;
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
