<?php
/**
 * Created by PhpStorm.
 * User: cchang
 * Date: 9/24/18
 * Time: 10:24 AM
 */

namespace src\test\functional;

use src\generated\LegalEntityPrincipalCreateRequest;
use src\generated\LegalEntityPrincipalType;
use src\generated\PrincipalAddressType;
use src\sdk\Principal;

require './../../../vendor/autoload.php';

class PricipalTests extends \PHPUnit_Framework_TestCase
{
    private $principal;
    private $principalCreateRequest;
    private $principalInRequest;
    private $address;

    public function setUp()
    {
        $this->principal = new Principal();

        //===================== setup principalCreateRequest =====================
        $this->principalCreateRequest = new LegalEntityPrincipalCreateRequest();
        $this->principalInRequest = new LegalEntityPrincipalType();
        $this->principalInRequest->setTitle("Mr.");
        $this->principalInRequest->setFirstName("First");
        $this->principalInRequest->setLastName("Last");
        $this->principalInRequest->setEmailAddress("abc@gmail.com");
        $this->principalInRequest->setSsn("123450015");
        $this->principalInRequest->setDateOfBirth("1980-10-12");
        $this->address = new PrincipalAddressType();
        $this->address->setStreetAddress1("p2 street address 1");
        $this->address->setStreetAddress2("p2 street address 2");
        $this->address->setCity("Boston2");
        $this->address->setStateProvince("MA");
        $this->address->setPostalCode("01892");
        $this->address->setCountryCode("USA");
        $this->principalInRequest->setAddress($this->address);
        $this->principalInRequest->setStakePercent(100);
        $this->principalCreateRequest->setPrincipal($this->principalInRequest);


    }

    public function testPostPrincipal()
    {
        $response = $this->principal->postPrincipal(2018, $this->principalCreateRequest);
        $this->assertEquals("2018",$response["legalEntityId"]);
        $this->assertNotNull($response["transactionId"]);
        $this->assertEquals("10",$response["principal"]["responseCode"]);
    }

    public function testDeletePrincipal()
    {
        $response = $this->principal->deletePrincipal(2018, 9);
        $this->assertEquals("2018",$response["legalEntityId"]);
        $this->assertNotNull($response["transactionId"]);
        $this->assertEquals("9",$response["principalId"]);
        $this->assertEquals("Legal Entity Principal successfully deleted",$response["responseDescription"]);
    }
}