<?php
/**
 * Created by PhpStorm.
 * User: cchang
 * Date: 10/12/18
 * Time: 3:10 PM
 */

namespace src\test\unit;


use src\generated\AddressUpdatableType;

class AddressUpdatableTypeTests extends \PHPUnit_Framework_TestCase
{
    private $addressUpdatableType;

    public function setUp(){
        $this->addressUpdatableType = new AddressUpdatableType();
        $this->addressUpdatableType->setStreetAddress1("Street Address 1");
        $this->addressUpdatableType->setStreetAddress2("Street Address 2");
        $this->addressUpdatableType->setCity("City");
        $this->addressUpdatableType->setStateProvince("MA");
        $this->addressUpdatableType->setPostalCode("01730");
        $this->addressUpdatableType->setCountryCode("USA");
    }

    public function testGetStreetAddress1(){
        $this->assertEquals("Street Address 1",$this->addressUpdatableType->getStreetAddress1());

    }

    public function testGetStreetAddress2(){
        $this->assertEquals("Street Address 2",$this->addressUpdatableType->getStreetAddress2());

    }

    public function testGetCity(){
        $this->assertEquals("City",$this->addressUpdatableType->getCity());

    }

    public function testGetStateProvince(){
        $this->assertEquals("MA",$this->addressUpdatableType->getStateProvince());

    }

    public function testGetPostalCode(){
        $this->assertEquals("01730",$this->addressUpdatableType->getPostalCode());

    }

    public function testGetCountryCode(){
        $this->assertEquals("USA",$this->addressUpdatableType->getCountryCode());

    }
}