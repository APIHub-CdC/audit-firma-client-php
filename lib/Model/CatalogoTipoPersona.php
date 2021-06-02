<?php

namespace AuditFirma\MX\Client\Model;
use \AuditFirma\MX\Client\ObjectSerializer;

class CatalogoTipoPersona
{
    
    const PF = 'PF';
    const PM = 'PM';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::PF,
            self::PM,
        ];
    }
}
