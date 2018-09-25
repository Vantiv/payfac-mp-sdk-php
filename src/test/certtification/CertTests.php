<?php
/**
 * Created by PhpStorm.
 * User: cchang
 * Date: 9/25/18
 * Time: 11:02 AM
 */

namespace src\test\certtification;


use src\utils\Communication;
use src\utils\Utils;

class CertTests extends \PHPUnit_Framework_TestCase
{


    private $legalEntityPostRequest1;
    private $legalEntityPostRequest2;
    private $legalEntityPostRequest3;
    private $legalEntityPostRequest4;
    private $legalEntityPutRequest1;
    private $legalEntityPutRequest2;
    private $Communication;
    private $Config;
    private $submerchant_post_request1;
    private $submerchant_post_request2;
    private $submerchant_put_request1;
    private $submerchant_put_request2;

    public function  setUp(){


        $this->Communication = new Communication();
        $this->Config = Utils::getConfig();

        //for cert tests
        $this->Config['username'] = "SDKMPAPI";
        $this->Config['password'] = "Q2m9X4y6";
        $this->Config['url'] = "https://payfac.vantivprelive.com";

        $this->Communication->setConf($this->Config);

        $this->legalEntityPostRequest1 = "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"yes\"?>
<legalEntityCreateRequest xmlns=\"http://payfac.vantivcnp.com/api/merchant/onboard\">
    <legalEntityName>Legal Entity Name</legalEntityName>
    <legalEntityType>";
        
        $this->legalEntityPostRequest2 = "</legalEntityType>
    <legalEntityOwnershipType>PRIVATE</legalEntityOwnershipType>
    <doingBusinessAs>Alternate Business Name</doingBusinessAs>
    <taxId>";
        
        $this->legalEntityPostRequest3 = "</taxId>
    <contactPhone>7817659800</contactPhone>
    <annualCreditCardSalesVolume>80000000</annualCreditCardSalesVolume>
    <hasAcceptedCreditCards>true</hasAcceptedCreditCards>
    <address>
        <streetAddress1>";
        
        $this->legalEntityPostRequest4 =  "</streetAddress1>
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
        <stakePercent>100</stakePercent>
    </principal>
    <yearsInBusiness>12</yearsInBusiness>
    </legalEntityCreateRequest>";
        
        $this->legalEntityPutRequest1 = "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"yes\"?>
    <legalEntityUpdateRequest xmlns=\"http://payfac.vantivcnp.com/api/merchant/onboard\">
    <address>
        <streetAddress1>Street Address 1</streetAddress1>
        <streetAddress2>Street Address 2</streetAddress2>
        <city>City</city>
        <stateProvince>MA</stateProvince>
        <postalCode>01730</postalCode>
        <countryCode>USA</countryCode>
    </address>
    <contactPhone>776498</contactPhone>
    <doingBusinessAs>Alternate Business Name</doingBusinessAs>
    <annualCreditCardSalesVolume>100000000</annualCreditCardSalesVolume>
    <hasAcceptedCreditCards>true</hasAcceptedCreditCards>
    <principal>
        <principalId>1</principalId>
        <title>CEO</title>
        <emailAddress>4894@mail.net</emailAddress>
        <contactPhone>118484</contactPhone>
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
        <legalEntityName>Company Name2</legalEntityName>
        <legalEntityType>INDIVIDUAL_SOLE_PROPRIETORSHIP</legalEntityType>
        <taxId>";
        
        $this->legalEntityPutRequest2 = "</taxId>
    </backgroundCheckFields>
    <legalEntityOwnershipType>PRIVATE</legalEntityOwnershipType>
    <yearsInBusiness>10</yearsInBusiness>
    </legalEntityUpdateRequest>";
        
        $this->submerchant_post_request1 = "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"yes\"?>
    <subMerchantCreateRequest xmlns=\"http://payfac.vantivcnp.com/api/merchant/onboard\">
    <merchantName>Merchant Name</merchantName>
    <amexMid>1234567890</amexMid>
    <url>URL</url>
    <customerServiceNumber>1234567894</customerServiceNumber>
    <hardCodedBillingDescriptor>SDK*</hardCodedBillingDescriptor>
    <maxTransactionAmount>123</maxTransactionAmount>
    <merchantCategoryCode>5137</merchantCategoryCode>
    <bankRoutingNumber>211370545</bankRoutingNumber>
    <bankAccountNumber>84012312415</bankAccountNumber>
    <pspMerchantId>";
        
        $this->submerchant_post_request2 = "</pspMerchantId>
    <fraud enabled=\"false\"></fraud>
    <amexAcquired enabled=\"false\"></amexAcquired>
    <address>
        <streetAddress1>Street Address 1</streetAddress1>
        <streetAddress2>Street Address 2</streetAddress2>
        <city>City</city>
        <stateProvince>MA</stateProvince>
        <postalCode>01970</postalCode>
        <countryCode>USA</countryCode>
    </address>
    <primaryContact>
        <firstName>John</firstName>
        <lastName>Doe</lastName>
        <emailAddress>John.Doe@company.com</emailAddress>
        <phone>9785552222</phone>
    </primaryContact>
    <createCredentials>true</createCredentials>
    <eCheck enabled=\"true\">
        <eCheckCompanyName>Company Name</eCheckCompanyName>
        <eCheckBillingDescriptor>9785552222</eCheckBillingDescriptor>
    </eCheck>
    <subMerchantFunding enabled=\"true\">
        <fundingSubmerchantId>AUTO_GENERATE</fundingSubmerchantId>
    </subMerchantFunding>
    <settlementCurrency>USD</settlementCurrency>
    </subMerchantCreateRequest>";
        
        $this->submerchant_put_request1 = "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"yes\"?>
    <subMerchantUpdateRequest xmlns=\"http://payfac.vantivcnp.com/api/merchant/onboard\">
    <amexMid>1234567890</amexMid>
    <discoverConveyedMid>123456789012345</discoverConveyedMid>
    <url>http://merchantUrl</url>
    <customerServiceNumber>8407809000</customerServiceNumber>
    <hardCodedBillingDescriptor>SDK*</hardCodedBillingDescriptor>
    <maxTransactionAmount>8400</maxTransactionAmount>
    <bankRoutingNumber>211370545</bankRoutingNumber>
    <bankAccountNumber>84012312415</bankAccountNumber>
    <pspMerchantId>";
        
        $this->submerchant_put_request2 = "</pspMerchantId>
    <purchaseCurrency>USD</purchaseCurrency>
    <address>
        <streetAddress1>Street Address 1</streetAddress1>
        <streetAddress2>Street Address 2</streetAddress2>
        <city>City</city>
        <stateProvince>MA</stateProvince>
        <postalCode>01970</postalCode>
        <countryCode>USA</countryCode>
    </address>
    <primaryContact>
        <firstName>John</firstName>
        <lastName>Doe</lastName>
        <phone>9785552222</phone>
    </primaryContact>
    </subMerchantUpdateRequest>";
}

    #==========================================================================================
    #                             Legalentity certification Tests
    #==========================================================================================


public function test1()
{
    $this->markTestSkipped("ignoring for travis build");

    $legalEntityType = "INDIVIDUAL_SOLE_PROPRIETORSHIP";
    $taxId = mt_rand(100000000, 999999999);
    $streetAddress1 = "900 Chelmsford St";
    $legalEntityPostRequest = $this->legalEntityPostRequest1 . $legalEntityType . $this->legalEntityPostRequest2 . $taxId . $this->legalEntityPostRequest3 . $streetAddress1 . $this->legalEntityPostRequest4;
    $expected_url_suffix = "/legalentity";
    $response = $this->Communication->httpPostRequest($expected_url_suffix, $legalEntityPostRequest);
    $this->assertEquals("10", $response["responseCode"]);
    $this->assertEquals("Approved", $response["responseDescription"]);
}


public function test2(){

    $this->markTestSkipped("ignoring for travis build");

    $legalEntityType = "INDIVIDUAL_SOLE_PROPRIETORSHIP";
    $taxId = mt_rand(100000000,999999999);
    $streetAddress1 = "912 Chelmsford St";
    $legalEntityPostRequest = $this->legalEntityPostRequest1 . $legalEntityType . $this->legalEntityPostRequest2 . $taxId . $this->legalEntityPostRequest3 . $streetAddress1 . $this->legalEntityPostRequest4;
    $expected_url_suffix = "/legalentity";
    $response = $this->Communication->httpPostRequest($expected_url_suffix,$legalEntityPostRequest);
    $this->assertEquals("20",$response["responseCode"]);
    }


    # wait a minimum of two hours after submitting test #2
public function test2and2a(){

    $this->markTestSkipped("ignoring for travis build");

    $legalEntityType = "INDIVIDUAL_SOLE_PROPRIETORSHIP";
    $taxId = mt_rand(100000000,999999999);
    $streetAddress1 = "900 Chelmsford St";
    $legalEntityPostRequest = $this->legalEntityPostRequest1 . $legalEntityType . $this->legalEntityPostRequest2 . $taxId . $this->legalEntityPostRequest3 . $streetAddress1 . $this->legalEntityPostRequest4;
    $expected_url_suffix = "/legalentity";
    $response = $this->Communication->httpPostRequest($expected_url_suffix,$legalEntityPostRequest);

    $legalEntityIdFromTest2 = $response["legalEntityId"];
    $expected_url_suffix2 = $expected_url_suffix . "/" . $legalEntityIdFromTest2;
    $response2 = $this->Communication->httpGetRequest($expected_url_suffix2);
    }


    # wait a minimum of two hours after submitting test #2
public function test2and2b(){

    $this->markTestSkipped("ignoring for travis build");

    $legalEntityType = "INDIVIDUAL_SOLE_PROPRIETORSHIP";
    $taxId = mt_rand(100000000,999999999);
    $streetAddress1 = "900 Chelmsford St";
    $legalEntityPostRequest = $this->legalEntityPostRequest1 . $legalEntityType . $this->legalEntityPostRequest2 . $taxId . $this->legalEntityPostRequest3 . $streetAddress1 . $this->legalEntityPostRequest4;
    $expected_url_suffix = "/legalentity";
    $response = $this->Communication->httpPostRequest($expected_url_suffix,$legalEntityPostRequest);

    $legalEntityIdFromTest2 = $response["legalEntityId"];
    $expected_url_suffix2 = $expected_url_suffix . "/" . $legalEntityIdFromTest2;
    $response2 = $this->Communication->httpGetRequest($expected_url_suffix2);

    $this->assertEquals("10",$response2["responseCode"]);
    $this->assertEquals("Approved",$response2["responseDescription"]);
    }


public function test3(){

    $this->markTestSkipped("ignoring for travis build");

    $legalEntityType = "LIMITED_LIABILITY_COMPANY";
    $taxId = mt_rand(100000000,999999999);
    $streetAddress1 = "914 Chelmsford St";
    $legalEntityPostRequest = $this->legalEntityPostRequest1 . $legalEntityType . $this->legalEntityPostRequest2 . $taxId . $this->legalEntityPostRequest3 . $streetAddress1 . $this->legalEntityPostRequest4;
    $expected_url_suffix = "/legalentity";
    $response = $this->Communication->httpPostRequest($expected_url_suffix,$legalEntityPostRequest);
    $this->assertEquals("10",$response["responseCode"]);
    $this->assertEquals("Approved", $response["responseDescription"]);
    }

public function test1and4(){
    $this->markTestSkipped("ignoring for travis build");

    $legalEntityType = "INDIVIDUAL_SOLE_PROPRIETORSHIP";
    $taxId = mt_rand(100000000, 999999999);
    $streetAddress1 = "900 Chelmsford St";
    $legalEntityPostRequest = $this->legalEntityPostRequest1 . $legalEntityType . $this->legalEntityPostRequest2 . $taxId . $this->legalEntityPostRequest3 . $streetAddress1 . $this->legalEntityPostRequest4;
    $expected_url_suffix = "/legalentity";
    $response = $this->Communication->httpPostRequest($expected_url_suffix, $legalEntityPostRequest);

    $legalEntityIdFromTest1 = $response["legalEntityId"];
    $expected_url_suffix2 = $expected_url_suffix . "/" . $legalEntityIdFromTest1;
    $taxId = mt_rand(100000000, 999999999);
    $legalEntityPutRequest = $this->legalEntityPutRequest1 .$taxId . $this->legalEntityPutRequest2;
    $response2 = $this->Communication->httpPutRequest($expected_url_suffix2,$legalEntityPutRequest);

    $this->assertEquals("10",$response2["responseCode"]);
    $this->assertEquals("Approved", $response2["responseDescription"]);
    }


public function test5(){
    $expected_url_suffix = "legalentity/0";
    $taxId = mt_rand(100000000, 999999999);
    $legalEntityPutRequest = $this->legalEntityPutRequest1 .$taxId . $this->legalEntityPutRequest2;
    $flag = false;
    try {
        $response = $this->Communication->httpPutRequest($expected_url_suffix,$legalEntityPutRequest);
    } catch (\Exception $e) {
        $flag = true;

    }
    $this->assertEquals(true,$flag);
    }


public function test2and6(){ $this->markTestSkipped("ignoring for travis build");
    $legalEntityType = "INDIVIDUAL_SOLE_PROPRIETORSHIP";
    $taxId = mt_rand(100000000,999999999);
    $streetAddress1 = "912 Chelmsford St";
    $legalEntityPostRequest = $this->legalEntityPostRequest1 . $legalEntityType . $this->legalEntityPostRequest2 . $taxId . $this->legalEntityPostRequest3 . $streetAddress1 . $this->legalEntityPostRequest4;
    $expected_url_suffix = "/legalentity";
    $response = $this->Communication->httpPostRequest($expected_url_suffix,$legalEntityPostRequest);

    $legalEntityIdFromTest2 = $response["legalEntityId"];
    $expected_url_suffix2 = $expected_url_suffix . "/" . $legalEntityIdFromTest2;
    $response2 = $this->Communication->httpGetRequest($expected_url_suffix2);
    $this->assertEquals("20",$response2["responseCode"]);
    }


public function test7(){ $this->markTestSkipped("ignoring for travis build");
    $expected_url_suffix = "/legalentity/0";
    $flag = false;
    try {
        $this->Communication->httpGetRequest($expected_url_suffix);
    } catch (\Exception $e) {
        $flag = true;

    }
    $this->assertEquals(true,$flag);
    }


//    #==========================================================================================
//    #                             Submerchant certification Tests
//    #==========================================================================================

public function test1and8(){ $this->markTestSkipped("ignoring for travis build");
    $legalEntityType = "INDIVIDUAL_SOLE_PROPRIETORSHIP";
    $taxId = mt_rand(100000000, 999999999);
    $streetAddress1 = "900 Chelmsford St";
    $legalEntityPostRequest = $this->legalEntityPostRequest1 . $legalEntityType . $this->legalEntityPostRequest2 . $taxId . $this->legalEntityPostRequest3 . $streetAddress1 . $this->legalEntityPostRequest4;
    $expected_url_suffix = "/legalentity";
    $response = $this->Communication->httpPostRequest($expected_url_suffix, $legalEntityPostRequest);

    $legalEntityIdFromTest1 = $response["legalEntityId"];
    $pspMerchantId = mt_rand(100,999);
    $submerchant_post_request =$this->submerchant_post_request1. $pspMerchantId . $this->submerchant_post_request2;
    $expected_url_suffix2 = $expected_url_suffix . "/" . $legalEntityIdFromTest1 . "/submerchant";
    $response2 = $this->Communication->httpPostRequest($expected_url_suffix2, $submerchant_post_request );
    }


public function test9(){ $this->markTestSkipped("ignoring for travis build");
    $pspMerchantId = mt_rand(100, 999);
    $submerchant_post_request = $this->submerchant_post_request1 . $pspMerchantId . $this->submerchant_post_request2;
    $expected_url_suffix = "/legalentity/0/submerchant";
    try {
        $this->Communication->httpPostRequest($expected_url_suffix,$submerchant_post_request);
    } catch (\Exception $e) {
        $flag = true;
    }
    $this->assertEquals(true,$flag);
    }

public function test2and10(){ $this->markTestSkipped("ignoring for travis build");
    $legalEntityType = "INDIVIDUAL_SOLE_PROPRIETORSHIP";
    $taxId = mt_rand(100000000,999999999);
    $streetAddress1 = "912 Chelmsford St";
    $legalEntityPostRequest = $this->legalEntityPostRequest1 . $legalEntityType . $this->legalEntityPostRequest2 . $taxId . $this->legalEntityPostRequest3 . $streetAddress1 . $this->legalEntityPostRequest4;
    $expected_url_suffix = "/legalentity";
    $response = $this->Communication->httpPostRequest($expected_url_suffix,$legalEntityPostRequest);

    $legalEntityIdFromTest2 = $response["legalEntityId"];
    $pspMerchantId = mt_rand(100, 999);
    $submerchant_post_request = $this->submerchant_post_request1 . $pspMerchantId . $this->submerchant_post_request2;
    $expected_url_suffix = "/legalentity/".$legalEntityIdFromTest2. "/submerchant";
    try {
        $this->Communication->httpPostRequest($expected_url_suffix,$submerchant_post_request);
    } catch (\Exception $e) {
        $flag = true;
    }
    $this->assertEquals(true,$flag);

}

public function test1and8and11(){ $this->markTestSkipped("ignoring for travis build");
    $legalEntityType = "INDIVIDUAL_SOLE_PROPRIETORSHIP";
    $taxId = mt_rand(100000000, 999999999);
    $streetAddress1 = "900 Chelmsford St";
    $legalEntityPostRequest = $this->legalEntityPostRequest1 . $legalEntityType . $this->legalEntityPostRequest2 . $taxId . $this->legalEntityPostRequest3 . $streetAddress1 . $this->legalEntityPostRequest4;
    $expected_url_suffix = "/legalentity";
    $response = $this->Communication->httpPostRequest($expected_url_suffix, $legalEntityPostRequest);

    $legalEntityIdFromTest1 = $response["legalEntityId"];
    $pspMerchantId = mt_rand(100,999);
    $submerchant_post_request =$this->submerchant_post_request1. $pspMerchantId . $this->submerchant_post_request2;
    $expected_url_suffix2 = $expected_url_suffix . "/" . $legalEntityIdFromTest1 . "/submerchant";
    $response2 = $this->Communication->httpPostRequest($expected_url_suffix2, $submerchant_post_request );

    $merchantIdFromTest8 = $response2["subMerchantId"];
    $pspMerchantId = mt_rand(100, 999);
    $submerchant_put_request = $this->submerchant_put_request1 . $pspMerchantId . $this->submerchant_put_request2;
    $expected_url_suffix3 = "/legalentity/" . $legalEntityIdFromTest1 . "/submerchant/" . $merchantIdFromTest8;
    $response3 = $this->Communication->httpPutRequest($expected_url_suffix3,$submerchant_put_request);
    }



public function test1and8and12(){ $this->markTestSkipped("ignoring for travis build");
    $legalEntityType = "INDIVIDUAL_SOLE_PROPRIETORSHIP";
    $taxId = mt_rand(100000000, 999999999);
    $streetAddress1 = "900 Chelmsford St";
    $legalEntityPostRequest = $this->legalEntityPostRequest1 . $legalEntityType . $this->legalEntityPostRequest2 . $taxId . $this->legalEntityPostRequest3 . $streetAddress1 . $this->legalEntityPostRequest4;
    $expected_url_suffix = "/legalentity";
    $response = $this->Communication->httpPostRequest($expected_url_suffix, $legalEntityPostRequest);

    $legalEntityIdFromTest1 = $response["legalEntityId"];
    $pspMerchantId = mt_rand(100,999);
    $submerchant_post_request =$this->submerchant_post_request1. $pspMerchantId . $this->submerchant_post_request2;
    $expected_url_suffix2 = $expected_url_suffix . "/" . $legalEntityIdFromTest1 . "/submerchant";
    $response2 = $this->Communication->httpPostRequest($expected_url_suffix2, $submerchant_post_request );

    $merchantIdFromTest8 = $response2["subMerchantId"];
    $pspMerchantId = mt_rand(100, 999);
    $submerchant_put_request = $this->submerchant_put_request1 . $pspMerchantId . $this->submerchant_put_request2;
    $expected_url_suffix3 = "/legalentity/0/submerchant/" . $merchantIdFromTest8;
    try {
        $this->Communication->httpPutRequest($expected_url_suffix3,$submerchant_put_request);
    } catch (\Exception $e) {
        $flag = true;
    }
    $this->assertEquals(true,$flag);
    }


public function test1adn13(){ $this->markTestSkipped("ignoring for travis build");
    $legalEntityType = "INDIVIDUAL_SOLE_PROPRIETORSHIP";
    $taxId = mt_rand(100000000, 999999999);
    $streetAddress1 = "900 Chelmsford St";
    $legalEntityPostRequest = $this->legalEntityPostRequest1 . $legalEntityType . $this->legalEntityPostRequest2 . $taxId . $this->legalEntityPostRequest3 . $streetAddress1 . $this->legalEntityPostRequest4;
    $expected_url_suffix = "/legalentity";
    $response = $this->Communication->httpPostRequest($expected_url_suffix, $legalEntityPostRequest);

    $legalEntityIdFromTest1 = $response["legalEntityId"];

    $pspMerchantId = mt_rand(100, 999);
    $submerchant_put_request = $this->submerchant_put_request1 . $pspMerchantId . $this->submerchant_put_request2;
    $expected_url_suffix3 = "/legalentity/".$legalEntityIdFromTest1."/submerchant/0";
    try {
        $this->Communication->httpPutRequest($expected_url_suffix3,$submerchant_put_request);
    } catch (\Exception $e) {
        $flag = true;
    }
    $this->assertEquals(true,$flag);}



public function test1and8and14(){ $this->markTestSkipped("ignoring for travis build");
    $legalEntityType = "INDIVIDUAL_SOLE_PROPRIETORSHIP";
    $taxId = mt_rand(100000000, 999999999);
    $streetAddress1 = "900 Chelmsford St";
    $legalEntityPostRequest = $this->legalEntityPostRequest1 . $legalEntityType . $this->legalEntityPostRequest2 . $taxId . $this->legalEntityPostRequest3 . $streetAddress1 . $this->legalEntityPostRequest4;
    $expected_url_suffix = "/legalentity";
    $response = $this->Communication->httpPostRequest($expected_url_suffix, $legalEntityPostRequest);

    $legalEntityIdFromTest1 = $response["legalEntityId"];
    $pspMerchantId = mt_rand(100,999);
    $submerchant_post_request =$this->submerchant_post_request1. $pspMerchantId . $this->submerchant_post_request2;
    $expected_url_suffix2 = $expected_url_suffix . "/" . $legalEntityIdFromTest1 . "/submerchant";
    $response2 = $this->Communication->httpPostRequest($expected_url_suffix2, $submerchant_post_request );

    $subMerchantId = $response2["subMerchantId"];
    $expected_url_suffix3 = $expected_url_suffix2 . "/" . $subMerchantId;
    $response3 = $this->Communication->httpGetRequest($expected_url_suffix3);
    }


public function test1and8and15(){ $this->markTestSkipped("ignoring for travis build");
    $legalEntityType = "INDIVIDUAL_SOLE_PROPRIETORSHIP";
    $taxId = mt_rand(100000000, 999999999);
    $streetAddress1 = "900 Chelmsford St";
    $legalEntityPostRequest = $this->legalEntityPostRequest1 . $legalEntityType . $this->legalEntityPostRequest2 . $taxId . $this->legalEntityPostRequest3 . $streetAddress1 . $this->legalEntityPostRequest4;
    $expected_url_suffix = "/legalentity";
    $response = $this->Communication->httpPostRequest($expected_url_suffix, $legalEntityPostRequest);

    $legalEntityIdFromTest1 = $response["legalEntityId"];
    $pspMerchantId = mt_rand(100,999);
    $submerchant_post_request =$this->submerchant_post_request1. $pspMerchantId . $this->submerchant_post_request2;
    $expected_url_suffix2 = $expected_url_suffix . "/" . $legalEntityIdFromTest1 . "/submerchant";
    $response2 = $this->Communication->httpPostRequest($expected_url_suffix2, $submerchant_post_request );

    $subMerchantId = $response2["subMerchantId"];
    $expected_url_suffix3 ="/legalentity/0/submerchant/". $subMerchantId;
    try {
        $this->Communication->httpGetRequest($expected_url_suffix3);
    } catch (\Exception $e) {
        $flag = true;
    }
    $this->assertEquals(true,$flag);
    }


public function test1and8and16(){ $this->markTestSkipped("ignoring for travis build");
    $legalEntityType = "INDIVIDUAL_SOLE_PROPRIETORSHIP";
    $taxId = mt_rand(100000000, 999999999);
    $streetAddress1 = "900 Chelmsford St";
    $legalEntityPostRequest = $this->legalEntityPostRequest1 . $legalEntityType . $this->legalEntityPostRequest2 . $taxId . $this->legalEntityPostRequest3 . $streetAddress1 . $this->legalEntityPostRequest4;
    $expected_url_suffix = "/legalentity";
    $response = $this->Communication->httpPostRequest($expected_url_suffix, $legalEntityPostRequest);

    $legalEntityIdFromTest1 = $response["legalEntityId"];
    $pspMerchantId = mt_rand(100,999);
    $submerchant_post_request =$this->submerchant_post_request1. $pspMerchantId . $this->submerchant_post_request2;
    $expected_url_suffix2 = $expected_url_suffix . "/" . $legalEntityIdFromTest1 . "/submerchant";
    $response2 = $this->Communication->httpPostRequest($expected_url_suffix2, $submerchant_post_request );

    $subMerchantId = $response2["subMerchantId"];
    $expected_url_suffix3 = $expected_url_suffix2 . "/0";
    try {
        $this->Communication->httpGetRequest($expected_url_suffix3);
    } catch (\Exception $e) {
        $flag = true;
    }
    $this->assertEquals(true,$flag);
    }

}