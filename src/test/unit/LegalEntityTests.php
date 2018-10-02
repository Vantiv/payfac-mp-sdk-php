<?php
/**
 * Created by PhpStorm.
 * User: cchang
 * Date: 9/25/18
 * Time: 10:03 AM
 */

namespace src\test\unit;

require_once ("./../../../vendor/autoload.php");
use src\sdk\LegalEntity;
use src\utils\Utils;

class LegalEntityTests extends \PHPUnit_Framework_TestCase
{
    private $legalEntity;
    private $legalEntityCreateResponse;
    private $legalEntityUpdateResponse;
    private $legalEntityCreateResponseObj;
    private $legalEntityUpdateResponseObj;
    private $legalEntityRetrievalResponse;
    private $legalEntityRetrievalResponseObj;
    private $mock;
    private $mock2;
    private $legalEntityUpdateXml;
    private $legalEntityCreateXml;
    private $legalEntityCreateRequest;
    private $legalEntityUpdateRequest;

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



        $this->legalEntityCreateResponse = "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"yes\"?>
                                            <legalEntityCreateResponse xmlns=\"http://payfac.vantivcnp.com/api/merchant/onboard\">
                                                <transactionId>9671076910</transactionId>
                                                <legalEntityId>02013</legalEntityId>
                                                <responseCode>10</responseCode>
                                                <responseDescription>Approved</responseDescription>
                                                <backgroundCheckResults>
                                                    <business>
                                                        <verificationResult>
                                                            <overallScore>
                                                                <score>40</score>
                                                                <description>Business identity is confirmed at the input address</description>
                                                            </overallScore>
                                                            <nameAddressTaxIdAssociation>
                                                                <code>NAME_ADDRESS_TAX_ID</code>
                                                                <description>Name, address, and Tax Id verified.</description>
                                                            </nameAddressTaxIdAssociation>
                                                            <nameAddressPhoneAssociation>
                                                                <code>NAME_ADDRESS_PHONE</code>
                                                                <description>Name, address, and phone verified.</description>
                                                            </nameAddressPhoneAssociation>
                                                            <verificationIndicators>
                                                                <nameVerified>true</nameVerified>
                                                                <addressVerified>true</addressVerified>
                                                                <cityVerified>true</cityVerified>
                                                                <stateVerified>true</stateVerified>
                                                                <zipVerified>true</zipVerified>
                                                                <phoneVerified>true</phoneVerified>
                                                                <taxIdVerified>true</taxIdVerified>
                                                            </verificationIndicators>
                                                            <riskIndicators>
                                                                <riskIndicator>
                                                                    <code>PHONE_NUMBER_MOBILE</code>
                                                                    <description>The submitted phone number is a mobile number.</description>
                                                                </riskIndicator>
                                                                <riskIndicator>
                                                                    <code>PHONE_NUMBER_MOBILE</code>
                                                                    <description>The submitted phone number is a mobile number.</description>
                                                                </riskIndicator>
                                                            </riskIndicators>
                                                        </verificationResult>
                                                    </business>
                                                    <principal>
                                                        <verificationResult>
                                                            <overallScore>
                                                                <score>50</score>
                                                                <description>Full name, address, phone, and SSN verified.</description>
                                                            </overallScore>
                                                            <nameAddressSsnAssociation>
                                                                <code>FIRST_LAST_ADDRESS_SSN</code>
                                                                <description>First name, last name, address, and SSN verified.</description>
                                                            </nameAddressSsnAssociation>
                                                            <nameAddressPhoneAssociation>
                                                                <code>LAST_ADDRESS_PHONE</code>
                                                                <description>Last name, address, and phone number verified.</description>
                                                            </nameAddressPhoneAssociation>
                                                            <verificationIndicators>
                                                                <nameVerified>true</nameVerified>
                                                                <addressVerified>true</addressVerified>
                                                                <phoneVerified>true</phoneVerified>
                                                                <ssnVerified>true</ssnVerified>
                                                                <dobVerified>true</dobVerified>
                                                            </verificationIndicators>
                                                            <riskIndicators>
                                                                <riskIndicator>
                                                                    <code>PHONE_NUMBER_MOBILE</code>
                                                                    <description>The submitted phone number is a mobile number.</description>
                                                                </riskIndicator>
                                                                <riskIndicator>
                                                                    <code>PHONE_NUMBER_MOBILE</code>
                                                                    <description>The submitted phone number is a mobile number.</description>
                                                                </riskIndicator>
                                                            </riskIndicators>
                                                        </verificationResult>
                                                    </principal>
                                                    <businessToPrincipalAssociation>
                                                        <score>20</score>
                                                        <description>Principal’s verified address matches input Business address.</description>
                                                    </businessToPrincipalAssociation>
                                                    <backgroundCheckDecisionNotes>2TYmo5BCfiB85KtFY4LT</backgroundCheckDecisionNotes>
                                                    <bankruptcyData>
                                                        <bankruptcyType>P81LA</bankruptcyType>
                                                        <bankruptcyCount>0</bankruptcyCount>
                                                        <companyName>Company Name</companyName>
                                                        <streetAddress1>100 Main Street</streetAddress1>
                                                        <streetAddress2>Suite 2</streetAddress2>
                                                        <city>Boston</city>
                                                        <state>MA</state>
                                                        <zip>01150</zip>
                                                        <zip4>2202</zip4>
                                                        <filingDate>2018-07-17</filingDate>
                                                    </bankruptcyData>
                                                    <lienResult>
                                                        <lienType>BKRCIq85xTLZ8mD</lienType>
                                                        <releasedCount>0</releasedCount>
                                                        <unreleasedCount>4</unreleasedCount>
                                                        <companyName>Company Name</companyName>
                                                        <streetAddress1>100 Main Street</streetAddress1>
                                                        <streetAddress2>Suite 2</streetAddress2>
                                                        <city>Boston</city>
                                                        <state>MA</state>
                                                        <zip>01150</zip>
                                                        <zip4>2202</zip4>
                                                        <filingDate>2018-07-17</filingDate>
                                                    </lienResult>
                                                </backgroundCheckResults>
                                                <principal>
                                                    <principalId>93497</principalId>
                                                    <firstName>p_first</firstName>
                                                    <lastName>p_last</lastName>
                                                </principal>
                                            </legalEntityCreateResponse>";
        $this->legalEntityCreateResponseObj = Utils::generateResponseObject($this->legalEntityCreateResponse);


        $this->legalEntityUpdateResponse = "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"yes\"?>
                                            <legalEntityResponse xmlns=\"http://payfac.vantivcnp.com/api/merchant/onboard\">
                                                <transactionId>0963204802</transactionId>
                                                <legalEntityId>2010</legalEntityId>
                                                <responseCode>10</responseCode>
                                                <responseDescription>Approved</responseDescription>
                                            </legalEntityResponse>";
        $this->legalEntityUpdateResponseObj= Utils::generateResponseObject($this->legalEntityUpdateResponse);

        $this->legalEntityRetrievalResponse = "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"yes\"?>
                                               <legalEntityRetrievalResponse xmlns=\"http://payfac.vantivcnp.com/api/merchant/onboard\" overallStatus=\"Approved\">
                                                   <legalEntityName>Legal Entity Name</legalEntityName>
                                                   <legalEntityType>CORPORATION</legalEntityType>
                                                   <legalEntityOwnershipType>PUBLIC</legalEntityOwnershipType>
                                                   <doingBusinessAs>Alternate Name</doingBusinessAs>
                                                   <taxId>123456789</taxId>
                                                   <contactPhone>7817659800</contactPhone>
                                                   <annualCreditCardSalesVolume>80</annualCreditCardSalesVolume>
                                                   <hasAcceptedCreditCards>true</hasAcceptedCreditCards>
                                                   <address>
                                                       <streetAddress1>12 Norton St</streetAddress1>
                                                       <city>City</city>
                                                       <stateProvince>NH</stateProvince>
                                                       <postalCode>03064</postalCode>
                                                       <countryCode>USA</countryCode>
                                                   </address>
                                                   <principal>
                                                       <principalId>1</principalId>
                                                       <title>CEO</title>
                                                       <firstName>p first</firstName>
                                                       <lastName>p last</lastName>
                                                       <emailAddress>emailAddress</emailAddress>
                                                       <ssn>XXXXX-9876</ssn>
                                                       <contactPhone>7817659800</contactPhone>
                                                       <dateOfBirth>1980-10-12</dateOfBirth>
                                                       <driversLicense>XXXXXXXX-9832</driversLicense>
                                                       <driversLicenseState>MA</driversLicenseState>
                                                       <address>
                                                           <streetAddress1>p street address 1</streetAddress1>
                                                           <streetAddress2>p street address 2</streetAddress2>
                                                           <city>Boston</city>
                                                           <stateProvince>MA</stateProvince>
                                                           <postalCode>01890</postalCode>
                                                           <countryCode>USA</countryCode>
                                                       </address>
                                                       <stakePercent>0</stakePercent>
                                                   </principal>
                                                   <legalEntityId>2018</legalEntityId>
                                                   <responseCode>10</responseCode>
                                                   <responseDescription>Approved</responseDescription>
                                                   <backgroundCheckResults>
                                                       <business>
                                                           <verificationResult>
                                                               <overallScore>
                                                                   <score>10</score>
                                                                   <description>Significant contradictory findings</description>
                                                               </overallScore>
                                                               <nameAddressTaxIdAssociation>
                                                                   <code>NAME_OR_ADDRESS</code>
                                                                   <description>The name or the address is verified.</description>
                                                               </nameAddressTaxIdAssociation>
                                                               <nameAddressPhoneAssociation>
                                                                   <code>NAME_ADDRESS_PHONE</code>
                                                                   <description>Name, address, and phone verified.</description>
                                                               </nameAddressPhoneAssociation>
                                                               <verificationIndicators>
                                                                   <nameVerified>true</nameVerified>
                                                                   <addressVerified>true</addressVerified>
                                                                   <cityVerified>true</cityVerified>
                                                                   <stateVerified>true</stateVerified>
                                                                   <zipVerified>true</zipVerified>
                                                                   <phoneVerified>true</phoneVerified>
                                                                   <taxIdVerified>true</taxIdVerified>
                                                               </verificationIndicators>
                                                               <riskIndicators>
                                                                   <riskIndicator>
                                                                       <code>UNKNOWN</code>
                                                                       <description>Supplied information could not be not verified.</description>
                                                                   </riskIndicator>
                                                               </riskIndicators>
                                                           </verificationResult>
                                                       </business>
                                                       <principal>
                                                           <verificationResult>
                                                               <overallScore>
                                                                   <score>10</score>
                                                                   <description>OFAC matches</description>
                                                               </overallScore>
                                                               <nameAddressSsnAssociation>
                                                                   <code>NOTHING</code>
                                                                   <description>Supplied information could not be not verified.</description>
                                                               </nameAddressSsnAssociation>
                                                               <nameAddressPhoneAssociation>
                                                                   <code>WRONG_PHONE</code>
                                                                   <description>Supplied Phone number is wrong.</description>
                                                               </nameAddressPhoneAssociation>
                                                               <verificationIndicators>
                                                                   <nameVerified>true</nameVerified>
                                                                   <addressVerified>true</addressVerified>
                                                                   <phoneVerified>true</phoneVerified>
                                                                   <ssnVerified>true</ssnVerified>
                                                                   <dobVerified>true</dobVerified>
                                                               </verificationIndicators>
                                                               <riskIndicators>
                                                                   <riskIndicator>
                                                                       <code>UNKNOWN</code>
                                                                       <description>Supplied information could not be not verified.</description>
                                                                   </riskIndicator>
                                                               </riskIndicators>
                                                           </verificationResult>
                                                       </principal>
                                                       <businessToPrincipalAssociation>
                                                           <score>10</score>
                                                           <description>Principalâ€™s verified name partially matches input Business name.</description>
                                                       </businessToPrincipalAssociation>
                                                       <backgroundCheckDecisionNotes>Additional Info About Decision</backgroundCheckDecisionNotes>
                                                       <bankruptcyData>
                                                           <bankruptcyType>none</bankruptcyType>
                                                           <bankruptcyCount>1</bankruptcyCount>
                                                           <companyName>Company Name</companyName>
                                                           <streetAddress1>100 Main Street</streetAddress1>
                                                           <streetAddress2>Suite 2</streetAddress2>
                                                           <city>Boston</city>
                                                           <state>MA</state>
                                                           <zip>01150</zip>
                                                           <zip4>2202</zip4>
                                                           <filingDate>2011-05-13</filingDate>
                                                       </bankruptcyData>
                                                       <lienResult>
                                                           <lienType>Subtype of Lien</lienType>
                                                           <releasedCount>2</releasedCount>
                                                           <unreleasedCount>1</unreleasedCount>
                                                           <companyName>Company Name</companyName>
                                                           <streetAddress1>100 Main Street</streetAddress1>
                                                           <streetAddress2>Suite 2</streetAddress2>
                                                           <city>Boston</city>
                                                           <state>MA</state>
                                                           <zip>01150</zip>
                                                           <zip4>2202</zip4>
                                                           <filingDate>2011-05-13</filingDate>
                                                       </lienResult>
                                                   </backgroundCheckResults>
                                                   <transactionId>82820200338801030</transactionId>
                                                   <tinValidationStatus>Approved</tinValidationStatus>
                                                   <sub_merchant_processing_status>true</sub_merchant_processing_status>
                                               </legalEntityRetrievalResponse>";
        $this->legalEntityRetrievalResponseObj= Utils::generateResponseObject($this->legalEntityRetrievalResponse);

        $this->mock = $this->getMock('src\utils\Communication');
        $this->mock2 = $this->getMock('src\utils\Utils');
    }



    public function testGetLegalEntity()
    {
        $this->mock->expects($this->once())
            ->method('httpGetRequest')
            ->with($this->stringEndsWith("/legalentity/1000293"))
            ->will($this->returnValue($this->legalEntityRetrievalResponseObj));
        $this->legalEntity->setCommunication($this->mock);
        $response = $this->legalEntity->getLegalEntity(1000293);
        $this->assertEquals("123456789",$response["taxId"]);
        $this->assertEquals("Legal Entity Name",$response["legalEntityName"]);
        $this->assertEquals("2018",$response["legalEntityId"]);
        $this->assertEquals("10",$response["responseCode"]);
        $this->assertEquals("Approved",$response["responseDescription"]);
    }


    public function testPostLegalEntity()
    {
        $this->mock->expects($this->once())
            ->method('httpPostRequest')
            ->with($this->stringEndsWith("/legalentity"))
            ->will($this->returnValue($this->legalEntityCreateResponseObj));

        $this->mock2->expects($this->any())
            ->method('validateXML')
            ->will($this->returnValue(true));

        $this->legalEntity->setCommunication($this->mock);

        $response = $this->legalEntity->postLegalEntity($this->legalEntityCreateRequest);
        $this->assertNotNull($response["transactionId"]);
        $this->assertNotNull($response["legalEntityId"]);
        $this->assertEquals("10",$response["responseCode"]);
        $this->assertEquals("Approved",$response["responseDescription"]);

    }

    public function testPutLegalEntity()
    {
        $this->mock->expects($this->once())
            ->method('httpPutRequest')
            ->with($this->stringEndsWith("/legalentity/1000293"))
            ->will($this->returnValue($this->legalEntityUpdateResponseObj));

        $this->mock2->expects($this->any())
            ->method('validateXML')
            ->will($this->returnValue(true));

        $this->legalEntity->setCommunication($this->mock);

        $response = $this->legalEntity->putLegalEntity(1000293,$this->legalEntityUpdateRequest);
        $this->assertNotNull($response["transactionId"]);
        $this->assertEquals("2010",$response["legalEntityId"]);
        $this->assertEquals("10",$response["responseCode"]);
        $this->assertEquals("Approved",$response["responseDescription"]);
    }

}