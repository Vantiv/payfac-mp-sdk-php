<?php
/**
 * Created by PhpStorm.
 * User: cchang
 * Date: 9/25/18
 * Time: 9:47 AM
 */

namespace src\test\functional;


use src\sdk\Mcc;

class MccTest extends \PHPUnit_Framework_TestCase
{
    private $MCC;

    public function setUp(){
        $this->MCC= new Mcc();
    }

    public function testGetMCC()
    {
        $response = $this->MCC->getMCC();
        $this->assertNotNull($response["transactionId"]);
        $this->assertEquals("5967",$response["approvedMccs"]["approvedMcc"][0]);
        $this->assertEquals("5970",$response["approvedMccs"]["approvedMcc"][1]);
    }
}