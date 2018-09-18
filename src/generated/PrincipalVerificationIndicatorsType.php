<?php

namespace src\generated;

/**
 * Class representing PrincipalVerificationIndicatorsType
 *
 * 
 * XSD Type: principalVerificationIndicators
 */
class PrincipalVerificationIndicatorsType
{

    /**
     * @property boolean $nameVerified
     */
    public $nameVerified = null;

    /**
     * @property boolean $addressVerified
     */
    public $addressVerified = null;

    /**
     * @property boolean $phoneVerified
     */
    public $phoneVerified = null;

    /**
     * @property boolean $ssnVerified
     */
    public $ssnVerified = null;

    /**
     * @property boolean $dobVerified
     */
    public $dobVerified = null;

    /**
     * Gets as nameVerified
     *
     * @return boolean
     */
    public function getNameVerified()
    {
        return $this->nameVerified;
    }

    /**
     * Sets a new nameVerified
     *
     * @param boolean $nameVerified
     * @return self
     */
    public function setNameVerified($nameVerified)
    {
        $this->nameVerified = $nameVerified;
        return $this;
    }

    /**
     * Gets as addressVerified
     *
     * @return boolean
     */
    public function getAddressVerified()
    {
        return $this->addressVerified;
    }

    /**
     * Sets a new addressVerified
     *
     * @param boolean $addressVerified
     * @return self
     */
    public function setAddressVerified($addressVerified)
    {
        $this->addressVerified = $addressVerified;
        return $this;
    }

    /**
     * Gets as phoneVerified
     *
     * @return boolean
     */
    public function getPhoneVerified()
    {
        return $this->phoneVerified;
    }

    /**
     * Sets a new phoneVerified
     *
     * @param boolean $phoneVerified
     * @return self
     */
    public function setPhoneVerified($phoneVerified)
    {
        $this->phoneVerified = $phoneVerified;
        return $this;
    }

    /**
     * Gets as ssnVerified
     *
     * @return boolean
     */
    public function getSsnVerified()
    {
        return $this->ssnVerified;
    }

    /**
     * Sets a new ssnVerified
     *
     * @param boolean $ssnVerified
     * @return self
     */
    public function setSsnVerified($ssnVerified)
    {
        $this->ssnVerified = $ssnVerified;
        return $this;
    }

    /**
     * Gets as dobVerified
     *
     * @return boolean
     */
    public function getDobVerified()
    {
        return $this->dobVerified;
    }

    /**
     * Sets a new dobVerified
     *
     * @param boolean $dobVerified
     * @return self
     */
    public function setDobVerified($dobVerified)
    {
        $this->dobVerified = $dobVerified;
        return $this;
    }


}

