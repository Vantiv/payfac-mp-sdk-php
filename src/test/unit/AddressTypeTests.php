<?php
/**
 * Created by PhpStorm.
 * User: cchang
 * Date: 10/12/18
 * Time: 3:05 PM
 */

namespace src\test\unit;


use src\generated\AddressType;

class AddressTypeTests extends \PHPUnit_Framework_TestCase
{

    private $addressType;

    public function setUp(){
        $this->addressType = new AddressType();
        $this->addressType->setStreetAddress1("Street Address 1");
        $this->addressType->setStreetAddress2("Street Address 2");
        $this->addressType->setCity("City");
        $this->addressType->setStateProvince("MA");
        $this->addressType->setPostalCode("01730");
        $this->addressType->setCountryCode("USA");
    }

    public function testGetStreetAddress1(){
        $this->assertEquals("Street Address 1",$this->addressType->getStreetAddress1());

    }

    public function testGetStreetAddress2(){
        $this->assertEquals("Street Address 2",$this->addressType->getStreetAddress2());

    }

    public function testGetCity(){
        $this->assertEquals("City",$this->addressType->getCity());

    }

    public function testGetStateProvince(){
        $this->assertEquals("MA",$this->addressType->getStateProvince());

    }

    public function testGetPostalCode(){
        $this->assertEquals("01730",$this->addressType->getPostalCode());

    }

    public function testGetCountryCode(){
        $this->assertEquals("USA",$this->addressType->getCountryCode());

    }
}