<?php

namespace src\generated;

/**
 * Class representing PrincipalCreateResponseType
 *
 * 
 * XSD Type: principalCreateResponse
 */
class PrincipalCreateResponseType
{

    /**
     * @property string $legalEntityId
     */
    public $legalEntityId = null;

    /**
     * @property \src\generated\LegalEntityPrincipalCreateResponseWithResponseFieldsType $principal
     */
    public $principal = null;

    /**
     * @property integer $transactionId
     */
    public $transactionId = null;

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
     * Gets as principal
     *
     * @return \src\generated\LegalEntityPrincipalCreateResponseWithResponseFieldsType
     */
    public function getPrincipal()
    {
        return $this->principal;
    }

    /**
     * Sets a new principal
     *
     * @param \src\generated\LegalEntityPrincipalCreateResponseWithResponseFieldsType $principal
     * @return self
     */
    public function setPrincipal(\src\generated\LegalEntityPrincipalCreateResponseWithResponseFieldsType $principal)
    {
        $this->principal = $principal;
        return $this;
    }

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


}

