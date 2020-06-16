<?php
/**
 * Created by PhpStorm.
 * User: cchang
 * Date: 9/24/18
 * Time: 10:59 AM
 */

namespace src\test\unit;


use src\generated\LegalEntityPrincipalCreateRequest;
use src\generated\LegalEntityPrincipalType;
use src\generated\PrincipalAddressType;
use src\sdk\Principal;
use src\utils\Utils;

class PrincipalTests extends \PHPUnit_Framework_TestCase
{
    private $principal;
    private $mock;
    private $mock2;

    private $postResponse;
    private $expectedPostResponse;

    private $deleteResponse;
    private $expectedDeleteResponse;


    public function setUp()
    {
        $this->principal = new Principal();
        $this->mock = $this->getMock('src\utils\Communication');
        $this->mock2 = $this->getMock('src\utils\Utils');
        $this->postResponse =
            '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
             <principalCreateResponse xmlns="http://payfac.vantivcnp.com/api/merchant/onboard">
                 <legalEntityId>2018</legalEntityId>
                 <principal>
                     <principalId>4</principalId>
                     <firstName>p first</firstName>
                     <lastName>p last</lastName>
                     <responseCode>10</responseCode>
                     <responseDescription>Approved</responseDescription>
                 </principal>
                 <transactionId>2348770070</transactionId>
             </principalCreateResponse>';
        $this->expectedPostResponse = Utils::generateResponseObject($this->postResponse);

        $this->deleteResponse =
            '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
             <principalDeleteResponse xmlns="http://payfac.vantivcnp.com/api/merchant/onboard">
                 <transactionId>4234049185</transactionId>
                 <legalEntityId>2018</legalEntityId>
                 <principalId>9</principalId>
                 <responseDescription>Legal Entity Principal successfully deleted</responseDescription>
             </principalDeleteResponse>';
        $this->expectedDeleteResponse = Utils::generateResponseObject($this->deleteResponse);

    }

    public function testPostPrincipal()
    {
        $principalCreateRequest = new LegalEntityPrincipalCreateRequest();
        $principalInRequest = new LegalEntityPrincipalType();
        $principalInRequest->setTitle("Mr.");
        $principalInRequest->setFirstName("First");
        $principalInRequest->setLastName("Last");
        $principalInRequest->setEmailAddress("abc@gmail.com");
        $principalInRequest->setSsn("123450015");
        $principalInRequest->setDateOfBirth("1980-10-12");
        $address = new PrincipalAddressType();
        $address->setStreetAddress1("p2 street address 1");
        $address->setStreetAddress2("p2 street address 2");
        $address->setCity("Boston2");
        $address->setStateProvince("MA");
        $address->setPostalCode("01892");
        $address->setCountryCode("USA");
        $principalInRequest->setAddress($address);
        $principalInRequest->setStakePercent(100);
        $principalCreateRequest->setPrincipal($principalInRequest);
        $principalCreateRequest->setSdkVersion("13.1.0");
        $principalCreateRequest->setLanguage("php");

        $this->mock->expects($this->once())
            ->method('httpPostRequest')
            ->with($this->stringEndsWith("/legalentity/2018/principal",self::any()))
            ->will($this->returnValue($this->expectedPostResponse));

        $this->mock2->expects($this->any())
            ->method('validateXML')
            ->will($this->returnValue(true));

        $this->principal->setCommunication($this->mock);
        $response = $this->principal->postPrincipal("2018",$principalCreateRequest);

        $this->assertEquals("2348770070",$response["transactionId"]);
        $this->assertEquals("2018",$response["legalEntityId"]);
        $this->assertEquals("10",$response["principal"]["responseCode"]);
    }

    public function testDeletePrincipal()
    {
        $this->mock->expects($this->once())
            ->method('httpDeleteRequest')
            ->with($this->stringEndsWith("/legalentity/2018/principal/9",self::any()))
            ->will($this->returnValue($this->expectedDeleteResponse));

        $this->mock2->expects($this->any())
            ->method('validateXML')
            ->will($this->returnValue(true));

        $this->principal->setCommunication($this->mock);
        $response = $this->principal->deletePrincipal("2018","9");

        $this->assertEquals("4234049185",$response["transactionId"]);
        $this->assertEquals("2018",$response["legalEntityId"]);
        $this->assertEquals("9",$response["principalId"]);
        $this->assertEquals("Legal Entity Principal successfully deleted",$response["responseDescription"]);
    }
}