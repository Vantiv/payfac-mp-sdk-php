<?php
/**
 * Created by PhpStorm.
 * User: cchang
 * Date: 10/12/18
 * Time: 2:52 PM
 */

namespace src\test\unit;


use src\utils\Communication;

class CommunicationTests extends \PHPUnit_Framework_TestCase
{
    private $Communication;

    public function setUp(){
        $this->Communication = new Communication(false,false);

    }

    public function testSetConf(){
        $conf = $this->Communication->getConf();
        $newConf = array('username'=>"user123",
                'password'=>"pass",
                'currency_merchant_map [\'DEFAULT\']'=>123,
                'url'=>'https://www.testvantivcnp.com/sandbox/payfac/',
                'proxy'=>"websenseproxy:8080",
                'printXml'=>0,
                'neuterXml'=>0,
                'timeout'=>500,
                );
        $this->Communication->setConf($newConf);
        $conf = $this->Communication->getConf();
        $this->assertEquals("user123",$conf["username"]);
    }


}