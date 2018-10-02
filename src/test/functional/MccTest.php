<?php
/**
// * Created by PhpStorm.
// * User: cchang
// * Date: 9/25/18
// * Time: 9:47 AM
// */

namespace src\test\functional;

use src\sdk\PayfacMcc;

class MccTest extends \PHPUnit_Framework_TestCase
{
    private $PayfacMcc;

    public function setUp(){
        $this->PayfacMcc= new PayfacMcc();
    }

    public function testGetMCC()
    {
        $response = $this->PayfacMcc->getMCC();
        $this->assertNotNull($response["transactionId"]);
        $this->assertEquals("5967",$response["approvedMccs"]["approvedMcc"][0]);
        $this->assertEquals("5970",$response["approvedMccs"]["approvedMcc"][1]);
    }
}