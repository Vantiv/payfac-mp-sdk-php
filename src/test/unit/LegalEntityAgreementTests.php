<?php
/**
 * Created by PhpStorm.
 * User: cchang
 * Date: 9/25/18
 * Time: 10:50 AM
 */

namespace src\test\unit;

use src\sdk\LegalEntityAgreement;
use src\utils\Utils;

class LegalEntityAgreementTests extends \PHPUnit_Framework_TestCase
{
    private $legalEntityAgreement;
    private $legalEntityAgreementCreateRequest;
    private $legalEntityAgreementCreateXml ;
    private $legalEntityAgreementCreateResponse;
    private $legalEntityAgreementCreateResponseObj;
    private $legalEntityAgreementRetrievalResponse;
    private $legalEntityAgreementRetrievalResponseOjb;
    private $mock;
    private $mock2;


    public function setUp(){
        $this->legalEntityAgreement = new LegalEntityAgreement();
        $this->mock = $this->getMock('src\utils\Communication');
        $this->mock2 = $this->getMock('src\utils\Utils');

        $this->legalEntityAgreementCreateXml = "<legalEntityAgreementCreateRequest xmlns=\"http://payfac.vantivcnp.com/api/merchant/onboard\">
                                                	<legalEntityAgreement>
                                                		<legalEntityAgreementType>MERCHANT_AGREEMENT</legalEntityAgreementType>
                                                		<agreementVersion>agreementVersion1</agreementVersion>
                                                		<userFullName>userFullName</userFullName>
                                                		<userSystemName>systemUserName</userSystemName>
                                                		<userIPAddress>196.198.100.100</userIPAddress>
                                                		<manuallyEntered>false</manuallyEntered>
                                                		<acceptanceDateTime>2017-02-11T12:00:00-06:00</acceptanceDateTime>
                                                	</legalEntityAgreement>
                                                </legalEntityAgreementCreateRequest>";
        $this->legalEntityAgreementCreateRequest= Utils::generateResponseObject($this->legalEntityAgreementCreateXml);

        $this->legalEntityAgreementCreateResponse = "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"yes\"?>
                                                     <legalEntityAgreementCreateResponse xmlns=\"http://payfac.vantivcnp.com/api/merchant/onboard\">
                                                         <transactionId>0238570470</transactionId>
                                                     </legalEntityAgreementCreateResponse>";
        $this->legalEntityAgreementCreateResponseObj = Utils::generateResponseObject($this->legalEntityAgreementCreateResponse);

        $this->legalEntityAgreementRetrievalResponse = "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"yes\"?>
                                                        <legalEntityAgreementRetrievalResponse xmlns=\"http://payfac.vantivcnp.com/api/merchant/onboard\">
                                                            <legalEntityId>201003</legalEntityId>
                                                            <transactionId>8524972465</transactionId>
                                                            <agreements>
                                                                <legalEntityAgreement>
                                                                    <legalEntityAgreementType>MERCHANT_AGREEMENT</legalEntityAgreementType>
                                                                    <agreementVersion>agreementVersion1</agreementVersion>
                                                                    <userFullName>userFullName1</userFullName>
                                                                    <userSystemName>userSystemName1</userSystemName>
                                                                    <userIPAddress>196.198.100.100</userIPAddress>
                                                                    <manuallyEntered>false</manuallyEntered>
                                                                    <acceptanceDateTime>2017-06-11T13:00:00-05:00</acceptanceDateTime>
                                                                </legalEntityAgreement>
                                                                <legalEntityAgreement>
                                                                    <legalEntityAgreementType>MERCHANT_AGREEMENT</legalEntityAgreementType>
                                                                    <agreementVersion>agreementVersion2</agreementVersion>
                                                                    <userFullName>userFullName2</userFullName>
                                                                    <userSystemName>userSystemName2</userSystemName>
                                                                    <userIPAddress>196.198.100.100</userIPAddress>
                                                                    <manuallyEntered>false</manuallyEntered>
                                                                    <acceptanceDateTime>2017-06-11T13:00:00-05:00</acceptanceDateTime>
                                                                </legalEntityAgreement>
                                                                <legalEntityAgreement>
                                                                    <legalEntityAgreementType>MERCHANT_AGREEMENT</legalEntityAgreementType>
                                                                    <agreementVersion>agreementVersion3</agreementVersion>
                                                                    <userFullName>userFullName3</userFullName>
                                                                    <userSystemName>userSystemName3</userSystemName>
                                                                    <userIPAddress>196.198.100.100</userIPAddress>
                                                                    <manuallyEntered>false</manuallyEntered>
                                                                    <acceptanceDateTime>2017-06-11T13:00:00-05:00</acceptanceDateTime>
                                                                </legalEntityAgreement>
                                                            </agreements>
                                                        </legalEntityAgreementRetrievalResponse>";
        $this->legalEntityAgreementRetrievalResponseOjb = Utils::generateResponseObject($this->legalEntityAgreementRetrievalResponse);

    }
    public function testPostLegalEntityAgreement()
    {
        $this->mock->expects($this->once())
            ->method('httpPostRequest')
            ->with($this->stringEndsWith("/legalentity/2018/agreement",self::any()))
            ->will($this->returnValue($this->legalEntityAgreementCreateResponseObj));

        $this->mock2->expects($this->any())
            ->method('validateXML')
            ->will($this->returnValue(true));
        $this->legalEntityAgreement->setCommunication($this->mock);
        $response = $this->legalEntityAgreement->postLegalEntityAgreement(2018, $this->legalEntityAgreementCreateRequest);
        $this->assertNotNull($response["transactionId"]);
    }

    public function testGetLegalEntityAgreement()
    {
        $this->mock->expects($this->once())
            ->method('httpGetRequest')
            ->with($this->stringEndsWith("/legalentity/201003/agreement"))
            ->will($this->returnValue($this->legalEntityAgreementRetrievalResponseOjb));
        $this->legalEntityAgreement->setCommunication($this->mock);

        $response = $this->legalEntityAgreement->getLegalEntityAgreement(201003);
        $this->assertEquals("201003",$response["legalEntityId"]);
        $this->assertNotNull($response["transactionId"]);
    }
}