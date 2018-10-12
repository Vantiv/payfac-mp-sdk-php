<?php
/**
 * Created by PhpStorm.
 * User: cchang
 * Date: 10/12/18
 * Time: 3:13 PM
 */

namespace src\test\unit;


use src\generated\LegalEntityAgreementCreateRequestType;
use src\generated\LegalEntityAgreementType;

class LegalEntityAgreementCreateRequestTypeTests  extends \PHPUnit_Framework_TestCase
{

    private $legalEntityAgreementCreateRequestType;

    public function setUp(){
        $this->legalEntityAgreementCreateRequestType = new LegalEntityAgreementCreateRequestType();
        $this->legalEntityAgreementCreateRequestType->legalEntityAgreement = "123";
    }

    public function testGetLegalEntityAgreement(){
        $this->assertEquals("123",$this->legalEntityAgreementCreateRequestType->getLegalEntityAgreement());

    }

    public function testSetLegalEntityAgreement(){
        $temp = new LegalEntityAgreementType();
        $this->legalEntityAgreementCreateRequestType->setLegalEntityAgreement($temp);
        $this->assertEquals($temp,$this->legalEntityAgreementCreateRequestType->getLegalEntityAgreement());

    }

}