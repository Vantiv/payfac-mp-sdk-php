<?php

namespace src\generated;

/**
 * Class representing LegalEntityResponseType
 *
 * 
 * XSD Type: legalEntityResponse
 */
class LegalEntityResponseType extends ResponseType
{

    /**
     * @property boolean $duplicate
     */
    public $duplicate = null;

    /**
     * @property string $legalEntityId
     */
    public $legalEntityId = null;

    /**
     * @property integer $responseCode
     */
    public $responseCode = null;

    /**
     * @property string $responseDescription
     */
    public $responseDescription = null;

    /**
     * @property string $originallegalEntityId
     */
    public $originallegalEntityId = null;

    /**
     * @property string $originallegalEntityStatus
     */
    public $originallegalEntityStatus = null;

    /**
     * @property \src\generated\BackgroundCheckResults $backgroundCheckResults
     */
    public $backgroundCheckResults = null;

    /**
     * Gets as duplicate
     *
     * @return boolean
     */
    public function getDuplicate()
    {
        return $this->duplicate;
    }

    /**
     * Sets a new duplicate
     *
     * @param boolean $duplicate
     * @return self
     */
    public function setDuplicate($duplicate)
    {
        $this->duplicate = $duplicate;
        return $this;
    }

    /**
     * Gets as legalEntityId
     *
     * @return string
     */
    public function getLegalEntityId()
    {
        return $this->legalEntityId;
    }

    /**
     * Sets a new legalEntityId
     *
     * @param string $legalEntityId
     * @return self
     */
    public function setLegalEntityId($legalEntityId)
    {
        $this->legalEntityId = $legalEntityId;
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

    /**
     * Gets as originallegalEntityId
     *
     * @return string
     */
    public function getOriginallegalEntityId()
    {
        return $this->originallegalEntityId;
    }

    /**
     * Sets a new originallegalEntityId
     *
     * @param string $originallegalEntityId
     * @return self
     */
    public function setOriginallegalEntityId($originallegalEntityId)
    {
        $this->originallegalEntityId = $originallegalEntityId;
        return $this;
    }

    /**
     * Gets as originallegalEntityStatus
     *
     * @return string
     */
    public function getOriginallegalEntityStatus()
    {
        return $this->originallegalEntityStatus;
    }

    /**
     * Sets a new originallegalEntityStatus
     *
     * @param string $originallegalEntityStatus
     * @return self
     */
    public function setOriginallegalEntityStatus($originallegalEntityStatus)
    {
        $this->originallegalEntityStatus = $originallegalEntityStatus;
        return $this;
    }

    /**
     * Gets as backgroundCheckResults
     *
     * @return \src\generated\BackgroundCheckResults
     */
    public function getBackgroundCheckResults()
    {
        return $this->backgroundCheckResults;
    }

    /**
     * Sets a new backgroundCheckResults
     *
     * @param \src\generated\BackgroundCheckResults $backgroundCheckResults
     * @return self
     */
    public function setBackgroundCheckResults(\src\generated\BackgroundCheckResults $backgroundCheckResults)
    {
        $this->backgroundCheckResults = $backgroundCheckResults;
        return $this;
    }


}

