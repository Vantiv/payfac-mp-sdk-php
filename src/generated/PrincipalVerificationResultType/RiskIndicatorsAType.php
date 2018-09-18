<?php

namespace src\generated\PrincipalVerificationResultType;

/**
 * Class representing RiskIndicatorsAType
 */
class RiskIndicatorsAType
{

    /**
     * @property \src\generated\PotentialRiskIndicatorType[] $riskIndicator
     */
    public $riskIndicator = array(
        
    );

    /**
     * Adds as riskIndicator
     *
     * @return self
     * @param \src\generated\PotentialRiskIndicatorType $riskIndicator
     */
    public function addToRiskIndicator(\src\generated\PotentialRiskIndicatorType $riskIndicator)
    {
        $this->riskIndicator[] = $riskIndicator;
        return $this;
    }

    /**
     * isset riskIndicator
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRiskIndicator($index)
    {
        return isset($this->riskIndicator[$index]);
    }

    /**
     * unset riskIndicator
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRiskIndicator($index)
    {
        unset($this->riskIndicator[$index]);
    }

    /**
     * Gets as riskIndicator
     *
     * @return \src\generated\PotentialRiskIndicatorType[]
     */
    public function getRiskIndicator()
    {
        return $this->riskIndicator;
    }

    /**
     * Sets a new riskIndicator
     *
     * @param \src\generated\PotentialRiskIndicatorType[] $riskIndicator
     * @return self
     */
    public function setRiskIndicator(array $riskIndicator)
    {
        $this->riskIndicator = $riskIndicator;
        return $this;
    }


}

