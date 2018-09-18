<?php

namespace src\generated;

/**
 * Class representing SubMerchantAmexAcquiredFeatureType
 *
 * 
 * XSD Type: subMerchantAmexAcquiredFeature
 */
class SubMerchantAmexAcquiredFeatureType
{

    /**
     * @property boolean $enabled
     */
    public $enabled = null;

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

