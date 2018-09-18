<?php

namespace src\generated;

/**
 * Class representing LegalEntityPrincipalCreateResponseWithResponseFieldsType
 *
 * 
 * XSD Type: legalEntityPrincipalCreateResponseWithResponseFields
 */
class LegalEntityPrincipalCreateResponseWithResponseFieldsType
{

    /**
     * @property integer $principalId
     */
    public $principalId = null;

    /**
     * @property string $firstName
     */
    public $firstName = null;

    /**
     * @property string $lastName
     */
    public $lastName = null;

    /**
     * @property integer $responseCode
     */
    public $responseCode = null;

    /**
     * @property string $responseDescription
     */
    public $responseDescription = null;

    /**
     * Gets as principalId
     *
     * @return integer
     */
    public function getPrincipalId()
    {
        return $this->principalId;
    }

    /**
     * Sets a new principalId
     *
     * @param integer $principalId
     * @return self
     */
    public function setPrincipalId($principalId)
    {
        $this->principalId = $principalId;
        return $this;
    }

    /**
     * Gets as firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets a new firstName
     *
     * @param string $firstName
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Gets as lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets a new lastName
     *
     * @param string $lastName
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Gets as responseCode
     *
     * @return integer
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * Sets a new responseCode
     *
     * @param integer $responseCode
     * @return self
     */
    public function setResponseCode($responseCode)
    {
        $this->responseCode = $responseCode;
        return $this;
    }

    /**
     * Gets as responseDescription
     *
     * @return string
     */
    public function getResponseDescription()
    {
        return $this->responseDescription;
    }

    /**
     * Sets a new responseDescription
     *
     * @param string $responseDescription
     * @return self
     */
    public function setResponseDescription($responseDescription)
    {
        $this->responseDescription = $responseDescription;
        return $this;
    }


}

