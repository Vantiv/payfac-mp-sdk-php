<?php
/**
 * Created by PhpStorm.
 * User: cchang
 * Date: 9/25/18
 * Time: 9:18 AM
 */

namespace src\test\functional;


use src\generated\LegalEntityAgreementCreateRequest;
use src\generated\LegalEntityAgreementType;
use src\sdk\LegalEntityAgreement;
use src\utils\Utils;

class LegalEntityAgreementTests extends \PHPUnit_Framework_TestCase
{
    private $legalEntityAgreement;
    private $legalEntityAgreementCreateRequest;


    private $legalEntityAgreementCreateXml = "<legalEntityAgreementCreateRequest xmlns=\"http://payfac.vantivcnp.com/api/merchant/onboard\">
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

    public function setUp(){
        $this->legalEntityAgreement = new LegalEntityAgreement();
        $this->legalEntityAgreementCreateRequest=new LegalEntityAgreementCreateRequest();
    }
    public function testPostLegalEntityAgreement()
    {
        $legalEntityAgreementCreateRequest = Utils::generateResponseObject($this->legalEntityAgreementCreateXml);
        $response = $this->legalEntityAgreement->postLegalEntityAgreement(2018, $legalEntityAgreementCreateRequest);
        $this->assertNotNull($response["transactionId"]);
    }

    public function testGetLegalEntityAgreement()
    {
        $response = $this->legalEntityAgreement->getLegalEntityAgreement(201003);
        $this->assertEquals("201003",$response["legalEntityId"]);
        $this->assertNotNull($response["transactionId"]);
    }

}