<?php
/**
 * Created by PhpStorm.
 * User: cchang
 * Date: 9/25/18
 * Time: 9:09 AM
 */

namespace src\test\functional;


use src\sdk\LegalEntity;
use src\utils\Utils;

class LegalEntityTests extends \PHPUnit_Framework_TestCase
{   private $legalEntity;
    private $legalEntityCreateRequest;
    private $legalEntityUpdateRequest;
    private $legalEntityCreateXml;
    private $legalEntityUpdateXml;

    public function setUp()
    {
        $this->legalEntity= new LegalEntity();
        $this->legalEntityCreateXml = "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"yes\"?>
                                       <legalEntityCreateRequest xmlns=\"http://payfac.vantivcnp.com/api/merchant/onboard\">
                                       <legalEntityName>Legal Entity Name</legalEntityName>
                                       <legalEntityType>CORPORATION</legalEntityType>
                                       <legalEntityOwnershipType>PUBLIC</legalEntityOwnershipType>
                                       <doingBusinessAs>Alternate Business Name</doingBusinessAs>
                                       <taxId>123456789</taxId>
                                       <contactPhone>7817659800</contactPhone>
                                       <annualCreditCardSalesVolume>80000000</annualCreditCardSalesVolume>
                                       <hasAcceptedCreditCards>true</hasAcceptedCreditCards>
                                       <address>
                                       	<streetAddress1>Street Address 1</streetAddress1>
                                       	<streetAddress2>Street Address 2</streetAddress2>
                                       	<city>City</city>
                                       	<stateProvince>MA</stateProvince>
                                       	<postalCode>01730</postalCode>
                                       	<countryCode>USA</countryCode>
                                       </address>
                                       <principal>
                                       		<title>Chief Financial Officer</title>
                                       	<firstName>p first</firstName>
                                       	<lastName>p last</lastName>
                                       	<emailAddress>emailAddress</emailAddress>
                                       	<ssn>123459876</ssn>
                                       	<contactPhone>7817659800</contactPhone>
                                       	<dateOfBirth>1980-10-12</dateOfBirth>
                                       	<driversLicense>892327409832</driversLicense>
                                       	<driversLicenseState>MA</driversLicenseState>
                                       	<address>
                                       		<streetAddress1>p street address 1</streetAddress1>
                                       		<streetAddress2>p street address 2</streetAddress2>
                                       		<city>Boston</city>
                                       		<stateProvince>MA</stateProvince>
                                       		<postalCode>01890</postalCode>
                                       		<countryCode>USA</countryCode>
                                       	</address>
                                       	<stakePercent>33</stakePercent>
                                       </principal>
                                       <yearsInBusiness>12</yearsInBusiness>
                                       </legalEntityCreateRequest>";
        $this->legalEntityCreateRequest = Utils::generateResponseObject($this->legalEntityCreateXml);


        $this->legalEntityUpdateXml = "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"yes\"?>
                                       <legalEntityUpdateRequest xmlns=\"http://payfac.vantivcnp.com/api/merchant/onboard\">
                                       	<address>
                                       		<streetAddress1>LE Street Address 1</streetAddress1>
                                       		<streetAddress2>LE Street Address 2</streetAddress2>
                                       		<city>LE City</city>
                                       		<stateProvince>MA</stateProvince>
                                       		<postalCode>01730</postalCode>
                                       		<countryCode>USA</countryCode>
                                       	</address>
                                       	<contactPhone>9785550101</contactPhone>
                                       	<doingBusinessAs>Other Name Co.</doingBusinessAs>
                                       	<annualCreditCardSalesVolume>10000000</annualCreditCardSalesVolume>
                                       	<hasAcceptedCreditCards>true</hasAcceptedCreditCards>
                                       	<principal>
                                       		<principalId>9</principalId>
                                       		<title>CEO</title>
                                       		<emailAddress>jdoe@mail.net</emailAddress>
                                       		<contactPhone>9785551234</contactPhone>
                                       		<address>
                                       			<streetAddress1>p street address 1</streetAddress1>
                                       			<streetAddress2>p street address 2</streetAddress2>
                                       			<city>Boston</city>
                                       			<stateProvince>MA</stateProvince>
                                       			<postalCode>01890</postalCode>
                                       			<countryCode>USA</countryCode>
                                       		</address>
                                       		<backgroundCheckFields>
                                       			<firstName>p first</firstName>
                                       			<lastName>p last</lastName>
                                       			<ssn>123459876</ssn>
                                       			<dateOfBirth>1980-10-12</dateOfBirth>
                                       			<driversLicense>892327409832</driversLicense>
                                       			<driversLicenseState>MA</driversLicenseState>
                                       		</backgroundCheckFields>
                                       	</principal>
                                       	<backgroundCheckFields>
                                       		<legalEntityName>Company Name</legalEntityName>
                                       		<legalEntityType>INDIVIDUAL_SOLE_PROPRIETORSHIP</legalEntityType>
                                       		<taxId>123456789</taxId>
                                       	</backgroundCheckFields>
                                       	<legalEntityOwnershipType>PUBLIC</legalEntityOwnershipType>
                                       	<yearsInBusiness>10</yearsInBusiness>
                                       </legalEntityUpdateRequest>";
        $this->legalEntityUpdateRequest= Utils::generateResponseObject($this->legalEntityUpdateXml);
    }



    public function testGetLegalEntity()
    {
        $response = $this->legalEntity->getLegalEntity(2018);
        $this->assertEquals("123456789",$response["taxId"]);
        $this->assertEquals("Legal Entity Name",$response["legalEntityName"]);
        $this->assertEquals("2018",$response["legalEntityId"]);
        $this->assertEquals("10",$response["responseCode"]);
        $this->assertEquals("Approved",$response["responseDescription"]);
    }


    public function testPostLegalEntity()
    {
        $response = $this->legalEntity->postLegalEntity($this->legalEntityCreateRequest);
        $this->assertNotNull($response["transactionId"]);
        $this->assertNotNull($response["legalEntityId"]);
        $this->assertEquals("10",$response["responseCode"]);
        $this->assertEquals("Approved",$response["responseDescription"]);

    }

    public function testPutLegalEntity()
    {
        $response = $this->legalEntity->putLegalEntity(2010,$this->legalEntityUpdateRequest);
        $this->assertNotNull($response["transactionId"]);
        $this->assertEquals("2010",$response["legalEntityId"]);
        $this->assertEquals("10",$response["responseCode"]);
        $this->assertEquals("Approved",$response["responseDescription"]);

    }

}