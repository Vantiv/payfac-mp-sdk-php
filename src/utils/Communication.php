<?php
/**
 * Created by PhpStorm.
 * User: kdave
 * Date: 9/13/18
 * Time: 3:56 PM
 */

namespace src\utils;

use src\exceptions\PayFacWebException;
use Symfony\Component\Debug\Exception\FatalErrorException;
use Symfony\Component\Debug\Exception\FatalThrowableError;

class Communication
{

    private $config;
    private $url;
    private $useSimpleXml;
    private $printXml;
    private $neuterXml;

    public function __construct($treeResponse = false, $overrides = array())
    {
        $this->useSimpleXml = $treeResponse;
        $this->config = Utils::getConfig($overrides);
        $this->url = $this->config['url'];
        $this->printXml = $this->config['printXml'];
        $this->neuterXml = $this->config['neuterXml'];;
    }

    public function setConf($overrideConf)
    {
        $this->config = $overrideConf;
        $this->url = $overrideConf['url'];
    }

    public function getConf()
    {
        return $this->config;
    }

    public function httpGetRequest($urlSuffix)
    {
        $requestUrl = $this->url . $urlSuffix;
        Utils::printToConsole("\nGET request to: ", $requestUrl, $this->printXml, $this->neuterXml);
        $headers = array("Content-Type: " . CONTENT_TYPE, "Accept: " . ACCEPT);
        return $this->getHttpResponse($requestUrl, "GET", $headers);
    }

    public function httpPutRequest($urlSuffix, $requestBody)
    {
        $requestUrl = $this->url . $urlSuffix;
        Utils::printToConsole("\nPUT request to: ", $requestUrl, $this->printXml, $this->neuterXml);
        $headers = array("Content-Type: " . CONTENT_TYPE, "Accept: " . ACCEPT);
        Utils::printToConsole("\nRequest body: ", $requestBody, $this->printXml, $this->neuterXml);
        $options = array(CURLOPT_POSTFIELDS => $requestBody);
        return $this->getHttpResponse($requestUrl, "PUT", $headers, $options);
    }

    public function httpPostRequest($urlSuffix, $requestBody)
    {
        $requestUrl = $this->url.$urlSuffix;
        Utils::printToConsole("\nPOST request to: ", $requestUrl, $this->printXml, $this->neuterXml);
        $headers = array("Content-Type: " . CONTENT_TYPE, "Accept: " . ACCEPT);
        Utils::printToConsole("\nRequest body: ", $requestBody, $this->printXml, $this->neuterXml);
        $options = array(CURLOPT_POSTFIELDS => $requestBody);
        return $this->getHttpResponse($requestUrl, "POST", $headers, $options);
    }

    public function httpDeleteRequest($urlSuffix)
    {
        $requestUrl = $this->url . $urlSuffix;
        Utils::printToConsole("\nDELETE request to: ", $requestUrl, $this->printXml, $this->neuterXml);
        $headers = array("Content-Type: " . CONTENT_TYPE, "Accept: " . ACCEPT);
        return $this->getHttpResponse($requestUrl, "DELETE", $headers);
    }



    private function getHttpResponse($requestUrl, $requestType, $headers = array(), $options = array())
    {
        $responseArray = $this->execHttpRequest($requestUrl, $requestType, $headers, $options);
        $response = $responseArray['response'];
        $statusCode = $responseArray['statusCode'];
        $contentType = $responseArray['contentType'];
        $this->validateResponse($response, $statusCode, $contentType);
        Utils::printToConsole("\nResponse: ", $response, $this->printXml, $this->neuterXml);
        return Utils::generateResponseObject($response, $this->useSimpleXml);
    }

    private function execHttpRequest($requestUrl, $requestType, $headers = array(), $options = array())
    {
        $ch = $this->generateBaseCurlHandler($requestUrl, $requestType, $headers, $options);
        $response = curl_exec($ch);
        $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $contentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);

        curl_close($ch);
        return array('response' => $response, 'statusCode' => $statusCode, 'contentType' => $contentType);
    }

    private function isInValidStatus($responseCode){
        if($responseCode == 200 || $responseCode == 201)
            return false;
        return true;
    }

    private function validateResponse($httpResponse, $statusCode, $contentType)
    {
        if (!$httpResponse) {
            throw new PayFacWebException("There was an exception while fetching the response.");
        } else if ($this->isInValidStatus($statusCode)) {
            if (strpos($contentType, CONTENT_TYPE) !== false) {
                Utils::printToConsole("\nError Response: ", $httpResponse, $this->printXml, $this->neuterXml);
                $errorResponse = XmlParser::domParser($httpResponse);
                $errorMessageList = XmlParser::getValueListByTagName($errorResponse, 'error');
                $errorMessage = $this->generateErrorMessage($errorMessageList);
                throw new PayFacWebException($errorMessage, $statusCode, $errorMessageList);
            }
            throw new PayFacWebException($httpResponse, $statusCode);
        }
    }

    private function generateBaseCurlHandler($requestUrl, $type, $headers, $options = array())
    {
        $auth_header = $this->generateAuthHeader();
        array_push($headers, $auth_header);
        $proxy = $this->config['proxy'];
        $timeout = $this->config['timeout'];
        $ch = curl_init();
        $defaultOptions = array(
            CURLOPT_PROXY => $proxy,
            CURLOPT_CUSTOMREQUEST => $type,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_URL => $requestUrl,
            CURLOPT_HTTPPROXYTUNNEL => true,
            CURLOPT_TIMEOUT => $timeout,
            CURLOPT_SSL_VERIFYPEER => true,
            CURLOPT_SSL_VERIFYHOST => 2,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSLVERSION => 6);

        curl_setopt_array($ch, $defaultOptions + $options);

        return $ch;
    }

    private function generateAuthHeader()
    {
        $username = $this->config['username'];
        $password = $this->config['password'];
        return "Authorization: Basic " . base64_encode($username . ":" . $password);
    }

    private function generateErrorMessage($errorMessageList)
    {
        $errorMessage = "";
        $prefix = "";
        foreach ($errorMessageList as $error){
            $errorMessage .= $prefix . $error;
            $prefix = "\n";
        }
        return $errorMessage;
    }

}