<?php

namespace src\generated;

/**
 * Class representing PrincipalVerificationResultType
 *
 * 
 * XSD Type: principalVerificationResult
 */
class PrincipalVerificationResultType
{

    /**
     * @property \src\generated\PrincipalScoreType $overallScore
     */
    private $overallScore = null;

    /**
     * @property \src\generated\NameAddressSsnAssociationType $nameAddressSsnAssociation
     */
    private $nameAddressSsnAssociation = null;

    /**
     * @property \src\generated\PrincipalNameAddressPhoneAssociationType $nameAddressPhoneAssociation
     */
    private $nameAddressPhoneAssociation = null;

    /**
     * @property \src\generated\PrincipalVerificationIndicatorsType $verificationIndicators
     */
    private $verificationIndicators = null;

    /**
     * @property \src\generated\PotentialRiskIndicatorType[] $riskIndicators
     */
    private $riskIndicators = null;

    /**
     * Gets as overallScore
     *
     * @return \src\generated\PrincipalScoreType
     */
    public function getOverallScore()
    {
        return $this->overallScore;
    }

    /**
     * Sets a new overallScore
     *
     * @param \src\generated\PrincipalScoreType $overallScore
     * @return self
     */
    public function setOverallScore(\src\generated\PrincipalScoreType $overallScore)
    {
        $this->overallScore = $overallScore;
        return $this;
    }

    /**
     * Gets as nameAddressSsnAssociation
     *
     * @return \src\generated\NameAddressSsnAssociationType
     */
    public function getNameAddressSsnAssociation()
    {
        return $this->nameAddressSsnAssociation;
    }

    /**
     * Sets a new nameAddressSsnAssociation
     *
     * @param \src\generated\NameAddressSsnAssociationType $nameAddressSsnAssociation
     * @return self
     */
    public function setNameAddressSsnAssociation(\src\generated\NameAddressSsnAssociationType $nameAddressSsnAssociation)
    {
        $this->nameAddressSsnAssociation = $nameAddressSsnAssociation;
        return $this;
    }

    /**
     * Gets as nameAddressPhoneAssociation
     *
     * @return \src\generated\PrincipalNameAddressPhoneAssociationType
     */
    public function getNameAddressPhoneAssociation()
    {
        return $this->nameAddressPhoneAssociation;
    }

    /**
     * Sets a new nameAddressPhoneAssociation
     *
     * @param \src\generated\PrincipalNameAddressPhoneAssociationType $nameAddressPhoneAssociation
     * @return self
     */
    public function setNameAddressPhoneAssociation(\src\generated\PrincipalNameAddressPhoneAssociationType $nameAddressPhoneAssociation)
    {
        $this->nameAddressPhoneAssociation = $nameAddressPhoneAssociation;
        return $this;
    }

    /**
     * Gets as verificationIndicators
     *
     * @return \src\generated\PrincipalVerificationIndicatorsType
     */
    public function getVerificationIndicators()
    {
        return $this->verificationIndicators;
    }

    /**
     * Sets a new verificationIndicators
     *
     * @param \src\generated\PrincipalVerificationIndicatorsType $verificationIndicators
     * @return self
     */
    public function setVerificationIndicators(\src\generated\PrincipalVerificationIndicatorsType $verificationIndicators)
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

