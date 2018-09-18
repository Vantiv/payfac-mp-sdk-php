<?php

namespace src\generated;

/**
 * Class representing SubMerchantFundingType
 *
 * 
 * XSD Type: subMerchantFunding
 */
class SubMerchantFundingType
{

    /**
     * @property boolean $enabled
     */
    public $enabled = null;

    /**
     * @property string $feeProfile
     */
    public $feeProfile = null;

    /**
     * @property string $fundingSubmerchantId
     */
    public $fundingSubmerchantId = null;

    /**
     * Gets as enabled
     *
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Sets a new enabled
     *
     * @param boolean $enabled
     * @return self
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Gets as feeProfile
     *
     * @return string
     */
    public function getFeeProfile()
    {
        return $this->feeProfile;
    }

    /**
     * Sets a new feeProfile
     *
     * @param string $feeProfile
     * @return self
     */
    public function setFeeProfile($feeProfile)
    {
        $this->feeProfile = $feeProfile;
        return $this;
    }

    /**
     * Gets as fundingSubmerchantId
     *
     * @return string
     */
    public function getFundingSubmerchantId()
    {
        return $this->fundingSubmerchantId;
    }

    /**
     * Sets a new fundingSubmerchantId
     *
     * @param string $fundingSubmerchantId
     * @return self
     */
    public function setFundingSubmerchantId($fundingSubmerchantId)
    {
        $this->fundingSubmerchantId = $fundingSubmerchantId;
        return $this;
    }


}

