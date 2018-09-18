<?php

namespace src\generated;

/**
 * Class representing SubMerchantECheckFeatureType
 *
 * 
 * XSD Type: subMerchantECheckFeature
 */
class SubMerchantECheckFeatureType
{

    /**
     * @property boolean $enabled
     */
    public $enabled = null;

    /**
     * @property string $eCheckCompanyName
     */
    public $eCheckCompanyName = null;

    /**
     * @property string $eCheckBillingDescriptor
     */
    public $eCheckBillingDescriptor = null;

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
     * Gets as eCheckCompanyName
     *
     * @return string
     */
    public function getECheckCompanyName()
    {
        return $this->eCheckCompanyName;
    }

    /**
     * Sets a new eCheckCompanyName
     *
     * @param string $eCheckCompanyName
     * @return self
     */
    public function setECheckCompanyName($eCheckCompanyName)
    {
        $this->eCheckCompanyName = $eCheckCompanyName;
        return $this;
    }

    /**
     * Gets as eCheckBillingDescriptor
     *
     * @return string
     */
    public function getECheckBillingDescriptor()
    {
        return $this->eCheckBillingDescriptor;
    }

    /**
     * Sets a new eCheckBillingDescriptor
     *
     * @param string $eCheckBillingDescriptor
     * @return self
     */
    public function setECheckBillingDescriptor($eCheckBillingDescriptor)
    {
        $this->eCheckBillingDescriptor = $eCheckBillingDescriptor;
        return $this;
    }


}

