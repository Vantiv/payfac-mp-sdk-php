<?php

namespace src\generated;

/**
 * Class representing PrincipalDeleteResponseType
 *
 * 
 * XSD Type: principalDeleteResponse
 */
class PrincipalDeleteResponseType
{

    /**
     * @property integer $transactionId
     */
    public $transactionId = null;

    /**
     * @property string $legalEntityId
     */
    public $legalEntityId = null;

    /**
     * @property integer $principalId
     */
    public $principalId = null;

    /**
     * @property string $responseDescription
     */
    public $responseDescription = null;

    /**
     * Gets as transactionId
     *
     * @return integer
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * Sets a new transactionId
     *
     * @param integer $transactionId
     * @return self
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
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

