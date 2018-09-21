<?php
/**
 * Created by PhpStorm.
 * User: cchang
 * Date: 9/20/18
 * Time: 11:30 AM
 */

namespace src\sdk;

use DOMDocument;
use src\exceptions\SchemaErrorHandler;
use src\utils\Communication;
use src\utils\Utils;

class submerchant{
    const SERVICE_ROUTE1 = "/legalentity/";
    const SERVICE_ROUTE2 = "/submerchant";

    public function __construct($treeResponse = false, $overrides = array())
    {
        $this->config = Utils::getConfig($overrides);
        $this->communication = new Communication($treeResponse, $overrides);
        $this->xml = new DOMDocument();
        $this->schemaErrorHandler = &new SchemaErrorHandler();

        // Enable user error handling
        libxml_use_internal_errors(true);
    }

    public function setCommunication($communication)
    {
        $this->communication = $communication;
    }

    ////////////////////////////////////////////////////////////////////
    //                          Submerchant API:                      //
    ////////////////////////////////////////////////////////////////////

    public function postSubmerchant($legalEntityId, $subMerchantCreateRequest)
    {
        $url_suffix = self::SERVICE_ROUTE1 . $legalEntityId . self::SERVICE_ROUTE2;
        $request_body = Utils::get_requestbody_from_xml('subMerchantCreateRequest', $subMerchantCreateRequest);
        $this->xml->loadXML($request_body);

        if ($this->xml->schemaValidate("./../../schema/merchant-onboard-api-v13.xsd")) {
            return $this->communication->httpPostRequest($url_suffix, $request_body);
        } else {
            $this->schemaErrorHandler->libxml_display_errors();
        }
    }

    public function putSubmerchant($legalEntityId, $submerchantId, $subMerchantUpdateRequest)
    {
        $url_suffix = self::SERVICE_ROUTE1 . $legalEntityId . self::SERVICE_ROUTE2 . "/" . $submerchantId;
        $request_body = Utils::get_requestbody_from_xml('subMerchantUpdateRequest', $subMerchantUpdateRequest);
        $this->xml->loadXML($request_body);

        if ($this->xml->schemaValidate("./../../schema/merchant-onboard-api-v13.xsd")) {
            return $this->communication->httpPutRequest($url_suffix, $request_body);
        } else {
            $this->schemaErrorHandler->libxml_display_errors();
        }
    }

    public function getSubmerchant($legalEntityId, $submerchantId)
    {
        $url_suffix = self::SERVICE_ROUTE1 . $legalEntityId . self::SERVICE_ROUTE2 . "/" . $submerchantId;

        return $this->communication->httpGetRequest($url_suffix);

    }





}