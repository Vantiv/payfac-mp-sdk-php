<?php
/**
 * Created by PhpStorm.
 * User: cchang
 * Date: 9/21/18
 * Time: 1:23 PM
 */

namespace src\test\unit;


use src\generated\AddressType;
use src\generated\AddressUpdatableType;
use src\generated\SubMerchantAmexAcquiredFeatureType;
use src\generated\SubMerchantCreateRequest;
use src\generated\SubMerchantECheckFeature;
use src\generated\SubMerchantECheckFeatureType;
use src\generated\SubMerchantFraudFeature;
use src\generated\SubMerchantPrimaryContactType;
use src\generated\SubMerchantPrimaryContactUpdatableType;
use src\generated\SubMerchantUpdateRequest;
use src\sdk\submerchant;
use src\utils\Utils;

class SubmerchantTests extends \PHPUnit_Framework_TestCase
{
    private $submerchant;
    private $mock;
    private $mock2;

    private $retrievalResponse;
    private $expectedRetrievalResponse;

    private $postResponse;
    private $expectedPostResponse;

    private $putResponse;
    private $expectedPutResponse;


    public function setUp()
    {
        $this->submerchant = new Submerchant();
        $this->mock = $this->getMock('src\utils\Communication');
        $this->mock2 = $this->getMock('src\utils\Utils');
        $this->retrievalResponse =
            '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
             <subMerchantRetrievalResponse xmlns="http://payfac.vantivcnp.com/api/merchant/onboard">
                 <merchantName>Merchant Name</merchantName>
                 <amexMid>1234567890</amexMid>
                 <discoverConveyedMid>123456789012345</discoverConveyedMid>
                 <url>http://merchantUrl.com</url>
                 <customerServiceNumber>8407809000</customerServiceNumber>
                 <hardCodedBillingDescriptor>billingDescriptor</hardCodedBillingDescriptor>
                 <maxTransactionAmount>100000</maxTransactionAmount>
                 <purchaseCurrency>USD</purchaseCurrency>
                 <merchantCategoryCode>5964</merchantCategoryCode>
                 <bankRoutingNumber>840123124</bankRoutingNumber>
                 <bankAccountNumber>XXXXX-3124</bankAccountNumber>
                 <pspMerchantId>123456</pspMerchantId>
                 <fraud enabled="false" />
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
                 <eCheck enabled="true">
                     <eCheckCompanyName>Company Name</eCheckCompanyName>
                     <eCheckBillingDescriptor>9785552222</eCheckBillingDescriptor>
                 </eCheck>
                 <subMerchantFunding enabled="true">
                     <fundingSubmerchantId>12345678901234</fundingSubmerchantId>
                 </subMerchantFunding>
                 <settlementCurrency>USD</settlementCurrency>
                 <subMerchantId>123456</subMerchantId>
                 <amexSellerId>12345678901234</amexSellerId>
                 <disabled>true</disabled>
                 <transactionId>1944734001</transactionId>
                 <merchantIdentString>011000022</merchantIdentString>
                 <credentials>
                     <username>Username</username>
                     <password>Password</password>
                     <passwordExpirationDate>2017-10-03T11:18:23.127-04:00</passwordExpirationDate>
                 </credentials>
                 <paypageCredentials>
                     <paypageCredential>
                         <username>PSPxm1V8</username>
                         <paypageId>Asd23thI974Jpk32</paypageId>
                     </paypageCredential>
                     <paypageCredential>
                         <username>PSPxm1V8Two</username>
                         <paypageId>odzhgcbQX3e3EaKV</paypageId>
                     </paypageCredential>
                     <paypageCredential>
                         <username>PSPxm1V8Three</username>
                         <paypageId>qmnpUBM6G47YJAcq</paypageId>
                     </paypageCredential>
                 </paypageCredentials>
                 <updateDate>2017-09-30T11:18:23.127-04:00</updateDate>
             </subMerchantRetrievalResponse>';
        $this->expectedRetrievalResponse = Utils::generateResponseObject($this->retrievalResponse);

        $this->postResponse =
            '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
             <subMerchantCreateResponse
             	xmlns="http://payfac.vantivcnp.com/api/merchant/onboard" duplicate="true">
             	<transactionId>82821240469914003</transactionId>
             	<subMerchantId>1100003</subMerchantId>
             	<merchantIdentString>01100003</merchantIdentString>
             </subMerchantCreateResponse>';
        $this->expectedPostResponse = Utils::generateResponseObject($this->postResponse);

        $this->putResponse = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
                              <response xmlns="http://payfac.vantivcnp.com/api/merchant/onboard">
                                  <transactionId>8366905079</transactionId>
                              </response>';
        $this->expectedPutResponse = Utils::generateResponseObject($this->putResponse);


    }

    public function testGetSubmerchant()
    {
        $this->mock->expects($this->once())
            ->method('httpGetRequest')
            ->with($this->stringEndsWith("/legalentity/2018/submerchant/123456"))
            ->will($this->returnValue($this->expectedRetrievalResponse));

        $this->submerchant->setCommunication($this->mock);
        $response = $this->submerchant->getSubmerchant("2018","123456");
        $this->assertEquals("840123124",$response["bankRoutingNumber"]);
        $this->assertEquals("100000",$response["maxTransactionAmount"]);
    }

    public function testPostSubmerchant()
    {
        $subMerchantCreateRequest = new SubMerchantCreateRequest();
        $subMerchantCreateRequest->setMerchantName("Merchant Name");
        $subMerchantCreateRequest->setAmexMid("1234567890");
        $subMerchantCreateRequest->setDiscoverConveyedMid("12345678901235");
        $subMerchantCreateRequest->setUrl("http://merchantUrl");
        $subMerchantCreateRequest->setCustomerServiceNumber("8407809000");
        $subMerchantCreateRequest->setHardCodedBillingDescriptor("billing Descriptor");
        $subMerchantCreateRequest->setMaxTransactionAmount(840000);
        $subMerchantCreateRequest->setPurchaseCurrency("USD");
        $subMerchantCreateRequest->setMerchantCategoryCode("5964");
        $subMerchantCreateRequest->setBankRoutingNumber("840123124");
        $subMerchantCreateRequest->setBankAccountNumber("84012312415");
        $subMerchantCreateRequest->setPspMerchantId("123456");
        $fraud = &new subMerchantFraudFeature();
        $fraud->setEnabled(true);
        $subMerchantCreateRequest->setFraud($fraud);

        $amexAcquired = &new SubMerchantAmexAcquiredFeatureType();
        $amexAcquired->setEnabled(true);
        $subMerchantCreateRequest->setAmexAcquired($amexAcquired);

        $address = new AddressType();
        $address->setStreetAddress1("Street Address 1");
        $address->setStreetAddress2("Street Address 2");
        $address->setCity("City");
        $address->setStateProvince("MA");
        $address->setPostalCode("01730");
        $address->setCountryCode("USA");

        $subMerchantCreateRequest->setAddress($address);

        $primaryContact = &new SubMerchantPrimaryContactType();
        $primaryContact->setFirstName("John");
        $primaryContact->setLastName("Dow");
        $primaryContact->setEmailAddress("John.Doe@company.com");
        $primaryContact->setPhone("978555222");
        $subMerchantCreateRequest->setPrimaryContact($primaryContact);

        $subMerchantCreateRequest->setCreateCredentials(true);

        $eCkeck = &new SubMerchantECheckFeatureType();
        $eCkeck->setECheckCompanyName("Company Name");
        $eCkeck->setECheckBillingDescriptor("978555222");
        $eCkeck->setEnabled(true);
        $subMerchantCreateRequest->setECheck($eCkeck);

        $subMerchantCreateRequest->setSettlementCurrency("USD");

        $this->mock->expects($this->once())
            ->method('httpPostRequest')
            ->with($this->stringEndsWith("/legalentity/2018/submerchant",self::any()))
            ->will($this->returnValue($this->expectedPostResponse));

        $this->mock2->expects($this->any())
            ->method('validateXML')
            ->will($this->returnValue(true));

        $this->submerchant->setCommunication($this->mock);
        $response = $this->submerchant->postSubmerchant("2018",$subMerchantCreateRequest);

        $this->assertEquals("82821240469914003",$response["transactionId"]);
        $this->assertEquals("1100003",$response["subMerchantId"]);
        $this->assertEquals("01100003",$response["merchantIdentString"]);
    }


    public function testPutSubmerchant()
    {   $subMerchantUpdateRequest = new SubMerchantUpdateRequest();
        $subMerchantUpdateRequest->setAmexMid("1234567890");
        $subMerchantUpdateRequest->setDiscoverConveyedMid("12345678901235");
        $subMerchantUpdateRequest->setUrl("http://merchantUrl");
        $subMerchantUpdateRequest->setCustomerServiceNumber("8407809000");
        $subMerchantUpdateRequest->setHardCodedBillingDescriptor("billing Descriptor");
        $subMerchantUpdateRequest->setMaxTransactionAmount(840000);
        $subMerchantUpdateRequest->setBankRoutingNumber("840123124");
        $subMerchantUpdateRequest->setBankAccountNumber("84012312415");
        $subMerchantUpdateRequest->setPspMerchantId("123456");
        $subMerchantUpdateRequest->setPurchaseCurrency("USD");

        $updateAddress = new AddressUpdatableType();
        $updateAddress->setStreetAddress1("Street Address 1");
        $updateAddress->setStreetAddress2("Street Address 2");
        $updateAddress->setCity("City");
        $updateAddress->setStateProvince("MA");
        $updateAddress->setPostalCode("01730");
        $subMerchantUpdateRequest->setAddress($updateAddress);

        $updatePrimaryContact = &new SubMerchantPrimaryContactUpdatableType();
        $updatePrimaryContact->setFirstName("John");
        $updatePrimaryContact->setLastName("Dow");
        $updatePrimaryContact->setPhone("978555222");
        $subMerchantUpdateRequest->setPrimaryContact($updatePrimaryContact);

        $fraud = &new subMerchantFraudFeature();
        $fraud->setEnabled(true);
        $subMerchantUpdateRequest->setFraud($fraud);

        $amexAcquired = &new SubMerchantAmexAcquiredFeatureType();
        $amexAcquired->setEnabled(true);
        $subMerchantUpdateRequest->setAmexAcquired($amexAcquired);

        $updateECkeck = &new SubMerchantECheckFeature();
        $updateECkeck->setEnabled(true);
        $subMerchantUpdateRequest->setECheck($updateECkeck);

        $this->mock->expects($this->once())
            ->method('httpPutRequest')
            ->with($this->stringEndsWith("/legalentity/2018/submerchant/123456"))
            ->will($this->returnValue($this->expectedPutResponse));

        $this->mock2->expects($this->any())
            ->method('validateXML')
            ->will($this->returnValue(true));

        $this->submerchant->setCommunication($this->mock);
        $response = $this->submerchant->putSubmerchant("2018","123456",$subMerchantUpdateRequest);
        $this->assertNotNull($response["transactionId"]);
    }
}