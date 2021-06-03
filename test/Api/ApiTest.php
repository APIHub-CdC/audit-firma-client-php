<?php

namespace AuditFirma\MX\Client;

use \GuzzleHttp\Client;
use \GuzzleHttp\HandlerStack as handlerStack;

use \AuditFirma\MX\Client\Configuration;
use \AuditFirma\MX\Client\ObjectSerializer;
use \AuditFirma\MX\Client\ApiClient;
use \AuditFirma\MX\Client\Api\SustFirmaApi as Instance;
use \AuditFirma\MX\Client\model\CatalogoEstados;
use \AuditFirma\MX\Client\model\CatalogoTipoPersona;
use \AuditFirma\MX\Client\model\Domicilio;
use \AuditFirma\MX\Client\model\Persona;
use \AuditFirma\MX\Client\model\SustitucionNIPPeticion;
use \AuditFirma\MX\Client\model\SustitucionNIPRespuesta;

use Signer\Manager\ApiException;
use Signer\Manager\Interceptor\MiddlewareEvents;
use Signer\Manager\Interceptor\KeyHandler;

class ApiTest extends \PHPUnit_Framework_TestCase
{
    
    public function setUp()
    {
        $password = getenv('KEY_PASSWORD');
        $this->signer = new KeyHandler(null, null, $password);

        $events = new MiddlewareEvents($this->signer);
        $handler = handlerStack::create();
        $handler->push($events->add_signature_header('x-signature'));   
        $handler->push($events->verify_signature_header('x-signature'));
        $client = new Client(['handler' => $handler]);

        $config = new Configuration();
        $config->setHost('the_url');
        $this->apiInstance = new Instance($client, $config);
        $this->x_api_key = "your_api_key";
        $this->username = "your_username";
        $this->password = "your_password";   
    }
    
    public function testNip()
    {
        try {
            $peticion = new SustitucionNIPPeticion();
            $persona = new Persona();
            $domicilio = new Domicilio();
            $catalogoEstados = new CatalogoEstados(); 
            $catalogoTipoPersona = new CatalogoTipoPersona();


            $domicilio->setCalleNumero("AV 535 84");
            $domicilio->setColonia("SAN JUAN DE ARAGON 1RA SECC");
            $domicilio->setCiudad( "CIUDAD DE MEXICO");
            $domicilio->setEstado($catalogoEstados::CDMX);
            
            $persona->setPrimerNombre("NOMBRE");
            $persona->setSegundoNombre("SEGUNDONOMBRE");
            $persona->setApellidoPaterno("PATERNO");
            $persona->setApellidoMaterno("MATERNO");
            $persona->setApellidoAdicional(null);
            $persona->setRFC("PUAP850316MI1");
            $persona->setDomicilio($domicilio);

            $peticion->setFolioCDC(763211111);
            $peticion->setFechaConsulta("2021/04/15");
            $peticion->setHoraConsulta("10/12/35");
            $peticion->setTipoConsulta($catalogoTipoPersona::PF);
            $peticion->setUsuario("NGA9915CC5");
            $peticion->setFechaAprobacionConsulta("2021/04/15");
            $peticion->setHoraAprobacionConsulta("10/12/35");
            $peticion->setIngresoNuevamenteNIP(true);
            $peticion->setRespuestaLeyendaAutorizacion(true);
            $peticion->setAceptaTerminosCondiciones(true);
            $peticion->setNumeroFirma("1234F");
            $peticion->setPersona($persona);

            $result = $this->apiInstance->nip($this->x_api_key, $this->username, $this->password, $peticion);
            print_r($result);
        } catch (ApiException | Exception $e) {
            echo 'Exception when calling ApiTest->testNip: ', $e->getMessage(), PHP_EOL;
        }          
    }
}
