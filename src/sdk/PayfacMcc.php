<?php
/**
 * Created by PhpStorm.
 * User: cchang
 * Date: 9/24/18
 * Time: 2:38 PM
 */

namespace src\sdk;


use src\utils\Communication;
use src\utils\Utils;

class PayfacMcc
{
    const SERVICE_ROUTE1 = "/mcc";

    public function __construct($treeResponse = false, $overrides = array())
    {
        $this->config = Utils::getConfig($overrides);
        $this->communication = new Communication($treeResponse, $overrides);

        // Enable user error handling
        libxml_use_internal_errors(true);
    }

    public function setCommunication($communication)
    {
        $this->communication = $communication;
    }

    ////////////////////////////////////////////////////////////////////
    //                            PayfacMcc API:                            //
    ////////////////////////////////////////////////////////////////////

    public function getMCC()
    {
        $url_suffix = self::SERVICE_ROUTE1;

        return $this->communication->httpGetRequest($url_suffix);

    }

}