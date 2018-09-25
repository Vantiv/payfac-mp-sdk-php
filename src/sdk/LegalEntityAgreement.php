<?php
/**
 * Created by PhpStorm.
 * User: araju
 * Date: 9/20/18
 * Time: 10:53 AM
 */

namespace src\sdk;

use src\exceptions\SchemaErrorHandler;
use src\utils\Communication;
use src\utils\Utils;

class LegalEntityAgreement
{
    const SERVICE_ROUTE1 = "/legalentity/";
    const SERVICE_ROUTE2 = "/agreement";


    public function __construct($treeResponse = false, $overrides = array())
    {
        $this->config = Utils::getConfig($overrides);
        $this->communication = new Communication($treeResponse, $overrides);
        $this->schemaErrorHandler = new SchemaErrorHandler();

        // Enable user error handling
        libxml_use_internal_errors(true);
    }

    public function setCommunication($communication)
    {
        $this->communication = $communication;
    }

    ////////////////////////////////////////////////////////////////////
    //                     LegalEntityAgreement API:                  //
    ////////////////////////////////////////////////////////////////////

    public function postLegalEntityAgreement($legalEntityId, $legalEntityAgreementCreateRequest)
    {
        $url_suffix = self::SERVICE_ROUTE1 . $legalEntityId . self::SERVICE_ROUTE2;
        $request_body = Utils::get_requestbody_from_xml('legalEntityAgreementCreateRequest', $legalEntityAgreementCreateRequest);
        $request_body = Utils::convertDateTime($request_body);
        if (Utils::validateXML($request_body)) {
            return $this->communication->httpPostRequest($url_suffix, $request_body);
        } else {
            $this->schemaErrorHandler->libxml_display_errors();
        }
    }

    public function getLegalEntityAgreement($legalEntityId)
    {
        $url_suffix = self::SERVICE_ROUTE1 . $legalEntityId . self::SERVICE_ROUTE2 ;

        return $this->communication->httpGetRequest($url_suffix);

    }



}