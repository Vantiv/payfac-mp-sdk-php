<?php


/**
 * Created by PhpStorm.
 * User: araju
 * Date: 9/14/18
 * Time: 1:40 PM
 */

use src\generated\AddressType;
use src\generated\LegalEntityCreateRequestType;
use src\generated\LegalEntityPrincipalType;
use src\generated\PrincipalAddressType;
use src\utils\Communication;

require './../../vendor/autoload.php';
require './../generated/AddressType.php';
require './../generated/LegalEntityCreateRequestType.php';
require './../generated/LegalEntityPrincipalType.php';
require './../generated/PrincipalAddressType.php';
require './../utils/Communication.php';
require './../utils/Utils.php';
require './../utils/XmlParser.php';
require './../PayFac.php';
require 'XML/Serializer.php';


function add_declaration($xml){
    $out = str_replace("<?xml version=\"1.0\" encoding=\"utf-8\"?>", "<?xml version=\"1.0\" encoding=\"utf-8\" standalone=\"yes\"?>",$xml);
    return $out;
}

function convert_object_to_xml($className, $object){

    $root_attributes = array();
    $root_attributes['xmlns'] = 'http://payfac.vantivcnp.com/api/merchant/onboard';

    $options = array(
        XML_SERIALIZER_OPTION_ROOT_NAME            => $className,
        XML_SERIALIZER_OPTION_INDENT               => '    ',
        XML_SERIALIZER_OPTION_LINEBREAKS           => "\n",
        XML_SERIALIZER_OPTION_IGNORE_NULL          => true,
        XML_SERIALIZER_OPTION_CLASSNAME_AS_TAGNAME => $className,
        XML_SERIALIZER_OPTION_XML_DECL_ENABLED     => true,
        XML_SERIALIZER_OPTION_XML_ENCODING         => 'utf-8',
        XML_SERIALIZER_OPTION_ROOT_ATTRIBS         => $root_attributes
    );

    $serializer = &new XML_Serializer($options);

    $result = $serializer->serialize($object);


    if ($result === true) {
        $xml = $serializer->getSerializedData();
    }

    $request_body = add_declaration($xml);
    return $request_body;

}


function generate_address(){
    $address = &new AddressType();

    $address->setStreetAddress1("Street Address 1");
    $address->setStreetAddress2("Street Address 2");
    $address->setCity("City");
    $address->setStateProvince("MA");
    $address->setPostalCode("01730");
    $address->setCountryCode("USA");

    return $address;
}

function generate_principal_address(){
    $address = &new PrincipalAddressType();

    $address->setStreetAddress1("p street_address 1");
    $address->setStreetAddress2("p street_address 2");
    $address->setCity("Boston");
    $address->setStateProvince("MA");
    $address->setPostalCode("01890");
    $address->setCountryCode("USA");

    return $address;
}

function generate_principal(){
    $principal = &new LegalEntityPrincipalType();

    $principal->setFirstName("p first");
    $principal->setLastName("p last");
    $principal->setEmailAddress("emailAddress");
    $principal->setSsn("123459876");
    $principal->setContactPhone("1234567890");
    $principal->setDateOfBirth("1980-10-12");
    $principal->setDriversLicense("892327409832");
    $principal->setDriversLicenseState("MA");
    $principal->setAddress(generate_principal_address());
    $principal->setStakePercent(33);


    return $principal;
}


function generate_legalEntityCreateRequest(){

    $request = &new LegalEntityCreateRequestType();

    $request->setLegalEntityName("Legal Entity Name");
    $request->setLegalEntityType("CORPORATION");
    $request->setLegalEntityOwnershipType("PUBLIC");
    $request->setDoingBusinessAs("Alternate business name");
    $request->setTaxId("123456789");
    $request->setContactPhone("7817659800");
    $request->setAnnualCreditCardSalesVolume("80000000");
    $request->setHasAcceptedCreditCards(true);


    $request->setAddress(generate_address());
    $request->setPrincipal(generate_principal());
    $request->setYearsInBusiness(12);

    return $request;
}


function test_communication_post(){
    $url_suffix = 'legalentity';
    $request_body_raw = generate_legalEntityCreateRequest();
    $request_body = convert_object_to_xml('legalEntityCreateRequest',$request_body_raw);

    $request = &new Communication();
    $response = $request->httpPostRequest($url_suffix,$request_body);



    print_r($response);

    print 'principalId';
    print $response['principal']['principalId'];
}

function test_communication_get(){
    $id = '123';
    $url_suffix = 'legalentity/'.$id;

    $request = &new Communication();
    $response = $request->httpGetRequest($url_suffix);
    print_r($response);
}

//test_communication_post();
test_communication_get();