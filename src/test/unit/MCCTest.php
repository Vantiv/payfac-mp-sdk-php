<?php
/**
 * Created by PhpStorm.
 * User: cchang
 * Date: 9/25/18
 * Time: 9:51 AM
 */

namespace src\test\unit;

require_once ("./../../../vendor/autoload.php");
use src\sdk\MCC;
use src\utils\Utils;

class MCCTest extends \PHPUnit_Framework_TestCase
{
    private $MCC;
    private $mock;
    private $response;
    private $responseObj;


    public function setUp(){
        $this->MCC= new MCC();
        $this->mock = $this->getMock('src\utils\Communication');
        $this->response = "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"yes\"?>
                           <approvedMccResponse xmlns=\"http://payfac.vantivcnp.com/api/merchant/onboard\">
                               <transactionId>2604414425</transactionId>
                               <approvedMccs>
                                   <approvedMcc>5967</approvedMcc>
                                   <approvedMcc>5970</approvedMcc>
                               </approvedMccs>
                           </approvedMccResponse>";
        $this->responseObj = Utils::generateResponseObject($this->response);
    }

    public function testGetMCC()
    {
        $this->mock->expects($this->once())
            ->method('httpGetRequest')
            ->with($this->stringEndsWith("/mcc"))
            ->will($this->returnValue($this->responseObj));

        $this->MCC->setCommunication($this->mock);
        $response = $this->MCC->getMCC();
        $this->assertNotNull($response["transactionId"]);
        $this->assertEquals("5967",$response["approvedMccs"]["approvedMcc"][0]);
        $this->assertEquals("5970",$response["approvedMccs"]["approvedMcc"][1]);
    }
}