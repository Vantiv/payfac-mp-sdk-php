<?php
/**
 * Created by PhpStorm.
 * User: araju
 * Date: 9/14/18
 * Time: 10:58 AM
 */

//namespace src\test;
//use src\generated\AddressType;
//use XML_Serializer;
use src\generated\AddressType;

include 'XML/Serializer.php';
include 'src/generated/AddressType.php';



class test_sample
{
    private $options = array(
        XML_SERIALIZER_OPTION_INDENT     => '',
        XML_SERIALIZER_OPTION_LINEBREAKS => '',
    );


    public function test(){
        $s = new XML_Serializer($this->options);
        $test_object = new AddressType();
        $s->serialize($test_object);
        print $s->getSerializedData();
    }



}