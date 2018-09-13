<?php

namespace src\generated;

/**
 * Class representing BusinessVerificationResultType
 *
 * 
 * XSD Type: businessVerificationResult
 */
class BusinessVerificationResultType
{

    /**
     * @property \src\generated\BusinessScoreType $overallScore
     */
    private $overallScore = null;

    /**
     * @property \src\generated\NameAddressTaxIdAssociationType $nameAddressTaxIdAssociation
     */
    private $nameAddressTaxIdAssociation = null;

    /**
     * @property \src\generated\BusinessNameAddressPhoneAssociationType $nameAddressPhoneAssociation
     */
    private $nameAddressPhoneAssociation = null;

    /**
     * @property \src\generated\BusinessVerificationIndicatorsType $verificationIndicators
     */
    private $verificationIndicators = null;

    /**
     * @property \src\generated\PotentialRiskIndicatorType[] $riskIndicators
     */
    private $riskIndicators = null;

    /**
     * Gets as overallScore
     *
     * @return \src\generated\BusinessScoreType
     */
    public function getOverallScore()
    {
        return $this->overallScore;
    }

    /**
     * Sets a new overallScore
     *
     * @param \src\generated\BusinessScoreType $overallScore
     * @return self
     */
    public function setOverallScore(\src\generated\BusinessScoreType $overallScore)
    {
        $this->overallScore = $overallScore;
        return $this;
    }

    /**
     * Gets as nameAddressTaxIdAssociation
     *
     * @return \src\generated\NameAddressTaxIdAssociationType
     */
    public function getNameAddressTaxIdAssociation()
    {
        return $this->nameAddressTaxIdAssociation;
    }

    /**
     * Sets a new nameAddressTaxIdAssociation
     *
     * @param \src\generated\NameAddressTaxIdAssociationType $nameAddressTaxIdAssociation
     * @return self
     */
    public function setNameAddressTaxIdAssociation(\src\generated\NameAddressTaxIdAssociationType $nameAddressTaxIdAssociation)
    {
        $this->nameAddressTaxIdAssociation = $nameAddressTaxIdAssociation;
        return $this;
    }

    /**
     * Gets as nameAddressPhoneAssociation
     *
     * @return \src\generated\BusinessNameAddressPhoneAssociationType
     */
    public function getNameAddressPhoneAssociation()
    {
        return $this->nameAddressPhoneAssociation;
    }

    /**
     * Sets a new nameAddressPhoneAssociation
     *
     * @param \src\generated\BusinessNameAddressPhoneAssociationType $nameAddressPhoneAssociation
     * @return self
     */
    public function setNameAddressPhoneAssociation(\src\generated\BusinessNameAddressPhoneAssociationType $nameAddressPhoneAssociation)
    {
        $this->nameAddressPhoneAssociation = $nameAddressPhoneAssociation;
        return $this;
    }

    /**
     * Gets as verificationIndicators
     *
     * @return \src\generated\BusinessVerificationIndicatorsType
     */
    public function getVerificationIndicators()
    {
        return $this->verificationIndicators;
    }

    /**
     * Sets a new verificationIndicators
     *
     * @param \src\generated\BusinessVerificationIndicatorsType $verificationIndicators
     * @return self
     */
    public function setVerificationIndicators(\src\generated\BusinessVerificationIndicatorsType $verificationIndicators)
    {
        $this->verificationIndicators = $verificationIndicators;
        return $this;
    }

    /**
     * Adds as riskIndicator
     *
     * @return self
     * @param \src\generated\PotentialRiskIndicatorType $riskIndicator
     */
    public function addToRiskIndicators(\src\generated\PotentialRiskIndicatorType $riskIndicator)
    {
        $this->riskIndicators[] = $riskIndicator;
        return $this;
    }

    /**
     * isset riskIndicators
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRiskIndicators($index)
    {
        return isset($this->riskIndicators[$index]);
    }

    /**
     * unset riskIndicators
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRiskIndicators($index)
    {
        unset($this->riskIndicators[$index]);
    }

    /**
     * Gets as riskIndicators
     *
     * @return \src\generated\PotentialRiskIndicatorType[]
     */
    public function getRiskIndicators()
    {
        return $this->riskIndicators;
    }

    /**
     * Sets a new riskIndicators
     *
     * @param \src\generated\PotentialRiskIndicatorType[] $riskIndicators
     * @return self
     */
    public function setRiskIndicators(array $riskIndicators)
    {
        $this->riskIndicators = $riskIndicators;
        return $this;
    }


}

