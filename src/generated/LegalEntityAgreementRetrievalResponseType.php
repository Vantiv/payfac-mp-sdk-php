<?php

namespace src\generated;

/**
 * Class representing LegalEntityAgreementRetrievalResponseType
 *
 * 
 * XSD Type: legalEntityAgreementRetrievalResponse
 */
class LegalEntityAgreementRetrievalResponseType
{

    /**
     * @property string $legalEntityId
     */
    private $legalEntityId = null;

    /**
     * @property integer $transactionId
     */
    private $transactionId = null;

    /**
     * @property \src\generated\LegalEntityAgreementType[] $agreements
     */
    private $agreements = null;

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
     * Adds as legalEntityAgreement
     *
     * @return self
     * @param \src\generated\LegalEntityAgreementType $legalEntityAgreement
     */
    public function addToAgreements(\src\generated\LegalEntityAgreementType $legalEntityAgreement)
    {
        $this->agreements[] = $legalEntityAgreement;
        return $this;
    }

    /**
     * isset agreements
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAgreements($index)
    {
        return isset($this->agreements[$index]);
    }

    /**
     * unset agreements
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAgreements($index)
    {
        unset($this->agreements[$index]);
    }

    /**
     * Gets as agreements
     *
     * @return \src\generated\LegalEntityAgreementType[]
     */
    public function getAgreements()
    {
        return $this->agreements;
    }

    /**
     * Sets a new agreements
     *
     * @param \src\generated\LegalEntityAgreementType[] $agreements
     * @return self
     */
    public function setAgreements(array $agreements)
    {
        $this->agreements = $agreements;
        return $this;
    }


}

