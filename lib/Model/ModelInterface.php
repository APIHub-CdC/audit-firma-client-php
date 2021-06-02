<?php

namespace AuditFirma\MX\Client\Model;

interface ModelInterface
{
    
    public function getModelName();
    
    public static function AuditFirmaTypes();
    
    public static function AuditFirmaFormats();
    
    public static function attributeMap();
    
    public static function setters();
    
    public static function getters();
    
    public function listInvalidProperties();
    
    public function valid();
}
