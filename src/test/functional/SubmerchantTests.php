<?php
/**
 * Created by PhpStorm.
 * User: cchang
 * Date: 9/21/18
 * Time: 11:22 AM
 */

namespace src\test\functional;


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

require './../../../vendor/autoload.php';


class SubmerchantTests extends \PHPUnit_Framework_TestCase
{
    private $submerchant;
    private $subMerchantCreateRequest;
    private $subMerchantUpdateRequest;
    private $fraud;
    private $amexAcquired;
    private $address;
    private $updateAddress;
    private $primaryContact;
    private $updatePrimaryContact;
    private $eCkeck;
    private $updateECkeck;

    public function setUp()
    {
        $this->submerchant = new Submerchant();
        //===================== setup subMerchantCreateRequest =====================
        $this->subMerchantCreateRequest = new SubMerchantCreateRequest();
        $this->subMerchantCreateRequest->setMerchantName("Merchant Name");
        $this->subMerchantCreateRequest->setAmexMid("1234567890");
        $this->subMerchantCreateRequest->setDiscoverConveyedMid("12345678901235");
        $this->subMerchantCreateRequest->setUrl("http://merchantUrl");
        $this->subMerchantCreateRequest->setCustomerServiceNumber("8407809000");
        $this->subMerchantCreateRequest->setHardCodedBillingDescriptor("billing Descriptor");
        $this->subMerchantCreateRequest->setMaxTransactionAmount(840000);
        $this->subMerchantCreateRequest->setPurchaseCurrency("USD");
        $this->subMerchantCreateRequest->setMerchantCategoryCode("5964");
        $this->subMerchantCreateRequest->setBankRoutingNumber("840123124");
        $this->subMerchantCreateRequest->setBankAccountNumber("84012312415");
        $this->subMerchantCreateRequest->setPspMerchantId("123456");
        $this->fraud = &new subMerchantFraudFeature();
        $this->fraud->setEnabled(true);
        $this->subMerchantCreateRequest->setFraud($this->fraud);

        $this->amexAcquired = &new SubMerchantAmexAcquiredFeatureType();
        $this->amexAcquired->setEnabled(true);
        $this->subMerchantCreateRequest->setAmexAcquired($this->amexAcquired);

        $this->address = new AddressType();
        $this->address->setStreetAddress1("Street Address 1");
        $this->address->setStreetAddress2("Street Address 2");
        $this->address->setCity("City");
        $this->address->setStateProvince("MA");
        $this->address->setPostalCode("01730");
        $this->address->setCountryCode("USA");

        $this->subMerchantCreateRequest->setAddress($this->address);

        $this->primaryContact = &new SubMerchantPrimaryContactType();
        $this->primaryContact->setFirstName("John");
        $this->primaryContact->setLastName("Dow");
        $this->primaryContact->setEmailAddress("John.Doe@company.com");
        $this->primaryContact->setPhone("978555222");
        $this->subMerchantCreateRequest->setPrimaryContact($this->primaryContact);

        $this->subMerchantCreateRequest->setCreateCredentials(true);

        $this->eCkeck = &new SubMerchantECheckFeatureType();
        $this->eCkeck->setECheckCompanyName("Company Name");
        $this->eCkeck->setECheckBillingDescriptor("978555222");
        $this->eCkeck->setEnabled(true);
        $this->subMerchantCreateRequest->setECheck($this->eCkeck);

        $this->subMerchantCreateRequest->setSettlementCurrency("USD");


        //===================== setup subMerchantCreateRequest =====================
        $this->subMerchantUpdateRequest = new SubMerchantUpdateRequest();
        $this->subMerchantUpdateRequest->setAmexMid("1234567890");
        $this->subMerchantUpdateRequest->setDiscoverConveyedMid("12345678901235");
        $this->subMerchantUpdateRequest->setUrl("http://merchantUrl");
        $this->subMerchantUpdateRequest->setCustomerServiceNumber("8407809000");
        $this->subMerchantUpdateRequest->setHardCodedBillingDescriptor("billing Descriptor");
        $this->subMerchantUpdateRequest->setMaxTransactionAmount(840000);
        $this->subMerchantUpdateRequest->setBankRoutingNumber("840123124");
        $this->subMerchantUpdateRequest->setBankAccountNumber("84012312415");
        $this->subMerchantUpdateRequest->setPspMerchantId("123456");
        $this->subMerchantUpdateRequest->setPurchaseCurrency("USD");

        $this->updateAddress = new AddressUpdatableType();
        $this->updateAddress->setStreetAddress1("Street Address 1");
        $this->updateAddress->setStreetAddress2("Street Address 2");
        $this->updateAddress->setCity("City");
        $this->updateAddress->setStateProvince("MA");
        $this->updateAddress->setPostalCode("01730");
        $this->subMerchantUpdateRequest->setAddress($this->updateAddress);

        $this->updatePrimaryContact = &new SubMerchantPrimaryContactUpdatableType();
        $this->updatePrimaryContact->setFirstName("John");
        $this->updatePrimaryContact->setLastName("Dow");
        $this->updatePrimaryContact->setPhone("978555222");
        $this->subMerchantUpdateRequest->setPrimaryContact($this->updatePrimaryContact);

        $this->subMerchantUpdateRequest->setFraud($this->fraud);
        $this->subMerchantUpdateRequest->setAmexAcquired($this->amexAcquired);

        $this->updateECkeck = &new SubMerchantECheckFeature();
        $this->updateECkeck->setEnabled(true);
        $this->subMerchantUpdateRequest->setECheck($this->updateECkeck);

    }


    public function testPostSubmerchant()
    {
        $response = $this->submerchant->postSubmerchant(2018, $this->subMerchantCreateRequest);
        $this->assertNotNull($response["transactionId"]);
        $this->assertNotNull($response["subMerchantId"]);
        $this->assertNotNull($response["merchantIdentString"]);
    }

    public function testPutSubmerchant()
    {
        $response = $this->submerchant->putSubmerchant(2018, 123456, $this->subMerchantUpdateRequest);
        $this->assertNotNull($response["transactionId"]);
    }

    public function testGetSubmerchant()
    {
        $response = $this->submerchant->getSubmerchant(2018, 123456);
        $this->assertEquals("840123124",$response["bankRoutingNumber"]);
        $this->assertEquals("100000",$response["maxTransactionAmount"]);
    }

}