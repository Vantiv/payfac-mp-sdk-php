<?php
/**
 * Created by PhpStorm.
 * User: cchang
 * Date: 9/24/18
 * Time: 2:34 PM
 */

namespace src\sdk;


use src\exceptions\SchemaErrorHandler;
use src\utils\Communication;
use src\utils\Utils;

class LegalEntity
{
    const SERVICE_ROUTE1 = "/legalentity";

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
    //                          LegalEntity API:                      //
    ////////////////////////////////////////////////////////////////////

    public function postLegalEntity($legalEntityCreateRequest )
    {
        $url_suffix = self::SERVICE_ROUTE1;
        $request_body = Utils::get_requestbody_from_xml('legalEntityCreateRequest ', $legalEntityCreateRequest );
        $request_body = Utils::convertDateTime($request_body);
        if (Utils::validateXML($request_body)) {
            return $this->communication->httpPostRequest($url_suffix, $request_body);
        } else {
            $this->schemaErrorHandler->libxml_display_errors();
        }
    }

    public function putLegalEntity($legalEntityId, $legalEntityUpdateRequest)
    {
        $url_suffix = self::SERVICE_ROUTE1 ."/" . $legalEntityId;
        $request_body = Utils::get_requestbody_from_xml('legalEntityUpdateRequest', $legalEntityUpdateRequest);
        $request_body = Utils::convertDateTime($request_body);
        if (Utils::validateXML($request_body)) {
            return $this->communication->httpPutRequest($url_suffix, $request_body);
        } else {
            $this->schemaErrorHandler->libxml_display_errors();
        }
    }


    public function getLegalEntity($legalEntityId)
    {
        $url_suffix = self::SERVICE_ROUTE1 ."/". $legalEntityId;

        return $this->communication->httpGetRequest($url_suffix);

    }

}