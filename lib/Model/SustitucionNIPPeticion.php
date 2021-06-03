<?php

namespace AuditFirma\MX\Client\Model;

use \ArrayAccess;
use \AuditFirma\MX\Client\ObjectSerializer;

class SustitucionNIPPeticion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $AuditFirmaModelName = 'SustitucionNIPPeticion';
    
    protected static $AuditFirmaTypes = [
        'folio_cdc' => 'int',
        'fecha_consulta' => 'string',
        'hora_consulta' => 'string',
        'tipo_consulta' => '\AuditFirma\MX\Client\Model\CatalogoTipoPersona',
        'usuario' => 'string',
        'fecha_aprobacion_consulta' => 'string',
        'hora_aprobacion_consulta' => 'string',
        'ingreso_nuevamente_nip' => 'bool',
        'respuesta_leyenda_autorizacion' => 'bool',
        'acepta_terminos_condiciones' => 'bool',
        'numero_firma' => 'string',
        'persona' => '\AuditFirma\MX\Client\Model\Persona'
    ];
    
    protected static $AuditFirmaFormats = [
        'folio_cdc' => 'int32',
        'fecha_consulta' => null,
        'hora_consulta' => null,
        'tipo_consulta' => null,
        'usuario' => null,
        'fecha_aprobacion_consulta' => null,
        'hora_aprobacion_consulta' => null,
        'ingreso_nuevamente_nip' => null,
        'respuesta_leyenda_autorizacion' => null,
        'acepta_terminos_condiciones' => null,
        'numero_firma' => null,
        'persona' => null
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
        'folio_cdc' => 'folioCDC',
        'fecha_consulta' => 'fechaConsulta',
        'hora_consulta' => 'horaConsulta',
        'tipo_consulta' => 'tipoConsulta',
        'usuario' => 'usuario',
        'fecha_aprobacion_consulta' => 'fechaAprobacionConsulta',
        'hora_aprobacion_consulta' => 'horaAprobacionConsulta',
        'ingreso_nuevamente_nip' => 'ingresoNuevamenteNIP',
        'respuesta_leyenda_autorizacion' => 'respuestaLeyendaAutorizacion',
        'acepta_terminos_condiciones' => 'aceptaTerminosCondiciones',
        'numero_firma' => 'numeroFirma',
        'persona' => 'persona'
    ];
    
    protected static $setters = [
        'folio_cdc' => 'setFolioCdc',
        'fecha_consulta' => 'setFechaConsulta',
        'hora_consulta' => 'setHoraConsulta',
        'tipo_consulta' => 'setTipoConsulta',
        'usuario' => 'setUsuario',
        'fecha_aprobacion_consulta' => 'setFechaAprobacionConsulta',
        'hora_aprobacion_consulta' => 'setHoraAprobacionConsulta',
        'ingreso_nuevamente_nip' => 'setIngresoNuevamenteNip',
        'respuesta_leyenda_autorizacion' => 'setRespuestaLeyendaAutorizacion',
        'acepta_terminos_condiciones' => 'setAceptaTerminosCondiciones',
        'numero_firma' => 'setNumeroFirma',
        'persona' => 'setPersona'
    ];
    
    protected static $getters = [
        'folio_cdc' => 'getFolioCdc',
        'fecha_consulta' => 'getFechaConsulta',
        'hora_consulta' => 'getHoraConsulta',
        'tipo_consulta' => 'getTipoConsulta',
        'usuario' => 'getUsuario',
        'fecha_aprobacion_consulta' => 'getFechaAprobacionConsulta',
        'hora_aprobacion_consulta' => 'getHoraAprobacionConsulta',
        'ingreso_nuevamente_nip' => 'getIngresoNuevamenteNip',
        'respuesta_leyenda_autorizacion' => 'getRespuestaLeyendaAutorizacion',
        'acepta_terminos_condiciones' => 'getAceptaTerminosCondiciones',
        'numero_firma' => 'getNumeroFirma',
        'persona' => 'getPersona'
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
        $this->container['fecha_consulta'] = isset($data['fecha_consulta']) ? $data['fecha_consulta'] : null;
        $this->container['hora_consulta'] = isset($data['hora_consulta']) ? $data['hora_consulta'] : null;
        $this->container['tipo_consulta'] = isset($data['tipo_consulta']) ? $data['tipo_consulta'] : null;
        $this->container['usuario'] = isset($data['usuario']) ? $data['usuario'] : null;
        $this->container['fecha_aprobacion_consulta'] = isset($data['fecha_aprobacion_consulta']) ? $data['fecha_aprobacion_consulta'] : null;
        $this->container['hora_aprobacion_consulta'] = isset($data['hora_aprobacion_consulta']) ? $data['hora_aprobacion_consulta'] : null;
        $this->container['ingreso_nuevamente_nip'] = isset($data['ingreso_nuevamente_nip']) ? $data['ingreso_nuevamente_nip'] : null;
        $this->container['respuesta_leyenda_autorizacion'] = isset($data['respuesta_leyenda_autorizacion']) ? $data['respuesta_leyenda_autorizacion'] : null;
        $this->container['acepta_terminos_condiciones'] = isset($data['acepta_terminos_condiciones']) ? $data['acepta_terminos_condiciones'] : null;
        $this->container['numero_firma'] = isset($data['numero_firma']) ? $data['numero_firma'] : null;
        $this->container['persona'] = isset($data['persona']) ? $data['persona'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['folio_cdc'] === null) {
            $invalidProperties[] = "'folio_cdc' can't be null";
        }
        if ($this->container['fecha_consulta'] === null) {
            $invalidProperties[] = "'fecha_consulta' can't be null";
        }
        if ((mb_strlen($this->container['fecha_consulta']) > 10)) {
            $invalidProperties[] = "invalid value for 'fecha_consulta', the character length must be smaller than or equal to 10.";
        }
        if ((mb_strlen($this->container['fecha_consulta']) < 10)) {
            $invalidProperties[] = "invalid value for 'fecha_consulta', the character length must be bigger than or equal to 10.";
        }
        if ($this->container['hora_consulta'] === null) {
            $invalidProperties[] = "'hora_consulta' can't be null";
        }
        if ((mb_strlen($this->container['hora_consulta']) > 8)) {
            $invalidProperties[] = "invalid value for 'hora_consulta', the character length must be smaller than or equal to 8.";
        }
        if ((mb_strlen($this->container['hora_consulta']) < 8)) {
            $invalidProperties[] = "invalid value for 'hora_consulta', the character length must be bigger than or equal to 8.";
        }
        if ($this->container['tipo_consulta'] === null) {
            $invalidProperties[] = "'tipo_consulta' can't be null";
        }
        if ($this->container['usuario'] === null) {
            $invalidProperties[] = "'usuario' can't be null";
        }
        if ((mb_strlen($this->container['usuario']) > 13)) {
            $invalidProperties[] = "invalid value for 'usuario', the character length must be smaller than or equal to 13.";
        }
        if ((mb_strlen($this->container['usuario']) < 10)) {
            $invalidProperties[] = "invalid value for 'usuario', the character length must be bigger than or equal to 10.";
        }
        if ($this->container['fecha_aprobacion_consulta'] === null) {
            $invalidProperties[] = "'fecha_aprobacion_consulta' can't be null";
        }
        if ((mb_strlen($this->container['fecha_aprobacion_consulta']) > 10)) {
            $invalidProperties[] = "invalid value for 'fecha_aprobacion_consulta', the character length must be smaller than or equal to 10.";
        }
        if ((mb_strlen($this->container['fecha_aprobacion_consulta']) < 10)) {
            $invalidProperties[] = "invalid value for 'fecha_aprobacion_consulta', the character length must be bigger than or equal to 10.";
        }
        if ($this->container['hora_aprobacion_consulta'] === null) {
            $invalidProperties[] = "'hora_aprobacion_consulta' can't be null";
        }
        if ((mb_strlen($this->container['hora_aprobacion_consulta']) > 8)) {
            $invalidProperties[] = "invalid value for 'hora_aprobacion_consulta', the character length must be smaller than or equal to 8.";
        }
        if ((mb_strlen($this->container['hora_aprobacion_consulta']) < 8)) {
            $invalidProperties[] = "invalid value for 'hora_aprobacion_consulta', the character length must be bigger than or equal to 8.";
        }
        if ($this->container['ingreso_nuevamente_nip'] === null) {
            $invalidProperties[] = "'ingreso_nuevamente_nip' can't be null";
        }
        if ($this->container['respuesta_leyenda_autorizacion'] === null) {
            $invalidProperties[] = "'respuesta_leyenda_autorizacion' can't be null";
        }
        if ($this->container['acepta_terminos_condiciones'] === null) {
            $invalidProperties[] = "'acepta_terminos_condiciones' can't be null";
        }
        if ($this->container['numero_firma'] === null) {
            $invalidProperties[] = "'numero_firma' can't be null";
        }
        if ((mb_strlen($this->container['numero_firma']) > 30)) {
            $invalidProperties[] = "invalid value for 'numero_firma', the character length must be smaller than or equal to 30.";
        }
        if ((mb_strlen($this->container['numero_firma']) < 2)) {
            $invalidProperties[] = "invalid value for 'numero_firma', the character length must be bigger than or equal to 2.";
        }
        if ($this->container['persona'] === null) {
            $invalidProperties[] = "'persona' can't be null";
        }
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
    
    public function getFechaConsulta()
    {
        return $this->container['fecha_consulta'];
    }
    
    public function setFechaConsulta($fecha_consulta)
    {
        if ((mb_strlen($fecha_consulta) > 10)) {
            throw new \InvalidArgumentException('invalid length for $fecha_consulta when calling SustitucionNIPPeticion., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($fecha_consulta) < 10)) {
            throw new \InvalidArgumentException('invalid length for $fecha_consulta when calling SustitucionNIPPeticion., must be bigger than or equal to 10.');
        }
        $this->container['fecha_consulta'] = $fecha_consulta;
        return $this;
    }
    
    public function getHoraConsulta()
    {
        return $this->container['hora_consulta'];
    }
    
    public function setHoraConsulta($hora_consulta)
    {
        if ((mb_strlen($hora_consulta) > 8)) {
            throw new \InvalidArgumentException('invalid length for $hora_consulta when calling SustitucionNIPPeticion., must be smaller than or equal to 8.');
        }
        if ((mb_strlen($hora_consulta) < 8)) {
            throw new \InvalidArgumentException('invalid length for $hora_consulta when calling SustitucionNIPPeticion., must be bigger than or equal to 8.');
        }
        $this->container['hora_consulta'] = $hora_consulta;
        return $this;
    }
    
    public function getTipoConsulta()
    {
        return $this->container['tipo_consulta'];
    }
    
    public function setTipoConsulta($tipo_consulta)
    {
        $this->container['tipo_consulta'] = $tipo_consulta;
        return $this;
    }
    
    public function getUsuario()
    {
        return $this->container['usuario'];
    }
    
    public function setUsuario($usuario)
    {
        if ((mb_strlen($usuario) > 13)) {
            throw new \InvalidArgumentException('invalid length for $usuario when calling SustitucionNIPPeticion., must be smaller than or equal to 13.');
        }
        if ((mb_strlen($usuario) < 10)) {
            throw new \InvalidArgumentException('invalid length for $usuario when calling SustitucionNIPPeticion., must be bigger than or equal to 10.');
        }
        $this->container['usuario'] = $usuario;
        return $this;
    }
    
    public function getFechaAprobacionConsulta()
    {
        return $this->container['fecha_aprobacion_consulta'];
    }
    
    public function setFechaAprobacionConsulta($fecha_aprobacion_consulta)
    {
        if ((mb_strlen($fecha_aprobacion_consulta) > 10)) {
            throw new \InvalidArgumentException('invalid length for $fecha_aprobacion_consulta when calling SustitucionNIPPeticion., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($fecha_aprobacion_consulta) < 10)) {
            throw new \InvalidArgumentException('invalid length for $fecha_aprobacion_consulta when calling SustitucionNIPPeticion., must be bigger than or equal to 10.');
        }
        $this->container['fecha_aprobacion_consulta'] = $fecha_aprobacion_consulta;
        return $this;
    }
    
    public function getHoraAprobacionConsulta()
    {
        return $this->container['hora_aprobacion_consulta'];
    }
    
    public function setHoraAprobacionConsulta($hora_aprobacion_consulta)
    {
        if ((mb_strlen($hora_aprobacion_consulta) > 8)) {
            throw new \InvalidArgumentException('invalid length for $hora_aprobacion_consulta when calling SustitucionNIPPeticion., must be smaller than or equal to 8.');
        }
        if ((mb_strlen($hora_aprobacion_consulta) < 8)) {
            throw new \InvalidArgumentException('invalid length for $hora_aprobacion_consulta when calling SustitucionNIPPeticion., must be bigger than or equal to 8.');
        }
        $this->container['hora_aprobacion_consulta'] = $hora_aprobacion_consulta;
        return $this;
    }
    
    public function getIngresoNuevamenteNip()
    {
        return $this->container['ingreso_nuevamente_nip'];
    }
    
    public function setIngresoNuevamenteNip($ingreso_nuevamente_nip)
    {
        $this->container['ingreso_nuevamente_nip'] = $ingreso_nuevamente_nip;
        return $this;
    }
    
    public function getRespuestaLeyendaAutorizacion()
    {
        return $this->container['respuesta_leyenda_autorizacion'];
    }
    
    public function setRespuestaLeyendaAutorizacion($respuesta_leyenda_autorizacion)
    {
        $this->container['respuesta_leyenda_autorizacion'] = $respuesta_leyenda_autorizacion;
        return $this;
    }
    
    public function getAceptaTerminosCondiciones()
    {
        return $this->container['acepta_terminos_condiciones'];
    }
    
    public function setAceptaTerminosCondiciones($acepta_terminos_condiciones)
    {
        $this->container['acepta_terminos_condiciones'] = $acepta_terminos_condiciones;
        return $this;
    }
    
    public function getNumeroFirma()
    {
        return $this->container['numero_firma'];
    }
    
    public function setNumeroFirma($numero_firma)
    {
        if ((mb_strlen($numero_firma) > 30)) {
            throw new \InvalidArgumentException('invalid length for $numero_firma when calling SustitucionNIPPeticion., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($numero_firma) < 2)) {
            throw new \InvalidArgumentException('invalid length for $numero_firma when calling SustitucionNIPPeticion., must be bigger than or equal to 2.');
        }
        $this->container['numero_firma'] = $numero_firma;
        return $this;
    }
    
    public function getPersona()
    {
        return $this->container['persona'];
    }
    
    public function setPersona($persona)
    {
        $this->container['persona'] = $persona;
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
