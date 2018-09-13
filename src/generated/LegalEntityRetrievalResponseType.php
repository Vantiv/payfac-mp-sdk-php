<?php

namespace src\generated;

/**
 * Class representing LegalEntityRetrievalResponseType
 *
 * 
 * XSD Type: legalEntityRetrievalResponse
 */
class LegalEntityRetrievalResponseType extends LegalEntityCreateRequestType
{

    /**
     * @property string $overallStatus
     */
    private $overallStatus = null;

    /**
     * @property \src\generated\LegalEntityPrincipalType $legalEntityPrincipal
     */
    private $legalEntityPrincipal = null;

    /**
     * @property string $legalEntityId
     */
    private $legalEntityId = null;

    /**
     * @property integer $responseCode
     */
    private $responseCode = null;

    /**
     * @property string $responseDescription
     */
    private $responseDescription = null;

    /**
     * @property \src\generated\BackgroundCheckResults $backgroundCheckResults
     */
    private $backgroundCheckResults = null;

    /**
     * @property string $transactionId
     */
    private $transactionId = null;

    /**
     * @property \DateTime $updateDate
     */
    private $updateDate = null;

    /**
     * @property \DateTime $decisionDate
     */
    private $decisionDate = null;

    /**
     * @property string $tinValidationStatus
     */
    private $tinValidationStatus = null;

    /**
     * @property boolean $subMerchantProcessingStatus
     */
    private $subMerchantProcessingStatus = null;

    /**
     * Gets as overallStatus
     *
     * @return string
     */
    public function getOverallStatus()
    {
        return $this->overallStatus;
    }

    /**
     * Sets a new overallStatus
     *
     * @param string $overallStatus
     * @return self
     */
    public function setOverallStatus($overallStatus)
    {
        $this->overallStatus = $overallStatus;
        return $this;
    }

    /**
     * Gets as legalEntityPrincipal
     *
     * @return \src\generated\LegalEntityPrincipalType
     */
    public function getLegalEntityPrincipal()
    {
        return $this->legalEntityPrincipal;
    }

    /**
     * Sets a new legalEntityPrincipal
     *
     * @param \src\generated\LegalEntityPrincipalType $legalEntityPrincipal
     * @return self
     */
    public function setLegalEntityPrincipal(\src\generated\LegalEntityPrincipalType $legalEntityPrincipal)
    {
        $this->legalEntityPrincipal = $legalEntityPrincipal;
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

    /**
     * Gets as transactionId
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * Sets a new transactionId
     *
     * @param string $transactionId
     * @return self
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    /**
     * Gets as updateDate
     *
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * Sets a new updateDate
     *
     * @param \DateTime $updateDate
     * @return self
     */
    public function setUpdateDate(\DateTime $updateDate)
    {
        $this->updateDate = $updateDate;
        return $this;
    }

    /**
     * Gets as decisionDate
     *
     * @return \DateTime
     */
    public function getDecisionDate()
    {
        return $this->decisionDate;
    }

    /**
     * Sets a new decisionDate
     *
     * @param \DateTime $decisionDate
     * @return self
     */
    public function setDecisionDate(\DateTime $decisionDate)
    {
        $this->decisionDate = $decisionDate;
        return $this;
    }

    /**
     * Gets as tinValidationStatus
     *
     * @return string
     */
    public function getTinValidationStatus()
    {
        return $this->tinValidationStatus;
    }

    /**
     * Sets a new tinValidationStatus
     *
     * @param string $tinValidationStatus
     * @return self
     */
    public function setTinValidationStatus($tinValidationStatus)
    {
        $this->tinValidationStatus = $tinValidationStatus;
        return $this;
    }

    /**
     * Gets as subMerchantProcessingStatus
     *
     * @return boolean
     */
    public function getSubMerchantProcessingStatus()
    {
        return $this->subMerchantProcessingStatus;
    }

    /**
     * Sets a new subMerchantProcessingStatus
     *
     * @param boolean $subMerchantProcessingStatus
     * @return self
     */
    public function setSubMerchantProcessingStatus($subMerchantProcessingStatus)
    {
        $this->subMerchantProcessingStatus = $subMerchantProcessingStatus;
        return $this;
    }


}

