<?php

namespace src\generated;

/**
 * Class representing SubMerchantFraudFeatureType
 *
 * 
 * XSD Type: subMerchantFraudFeature
 */
class SubMerchantFraudFeatureType
{

    /**
     * @property boolean $enabled
     */
    private $enabled = null;

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


}

