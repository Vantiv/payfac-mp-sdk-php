<?php

namespace src\generated;

/**
 * Class representing AddressType
 *
 * 
 * XSD Type: address
 */
class AddressType
{

    /**
     * @property string $streetAddress1
     */
    public $streetAddress1 = null;

    /**
     * @property string $streetAddress2
     */
    public $streetAddress2 = null;

    /**
     * @property string $city
     */
    public $city = null;

    /**
     * @property string $stateProvince
     */
    public $stateProvince = null;

    /**
     * @property string $postalCode
     */
    public $postalCode = null;

    /**
     * @property string $countryCode
     */
    public $countryCode = null;

    /**
     * Gets as streetAddress1
     *
     * @return string
     */
    public function getStreetAddress1()
    {
        return $this->streetAddress1;
    }

    /**
     * Sets a new streetAddress1
     *
     * @param string $streetAddress1
     * @return self
     */
    public function setStreetAddress1($streetAddress1)
    {
        $this->streetAddress1 = $streetAddress1;
        return $this;
    }

    /**
     * Gets as streetAddress2
     *
     * @return string
     */
    public function getStreetAddress2()
    {
        return $this->streetAddress2;
    }

    /**
     * Sets a new streetAddress2
     *
     * @param string $streetAddress2
     * @return self
     */
    public function setStreetAddress2($streetAddress2)
    {
        $this->streetAddress2 = $streetAddress2;
        return $this;
    }

    /**
     * Gets as city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets a new city
     *
     * @param string $city
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Gets as stateProvince
     *
     * @return string
     */
    public function getStateProvince()
    {
        return $this->stateProvince;
    }

    /**
     * Sets a new stateProvince
     *
     * @param string $stateProvince
     * @return self
     */
    public function setStateProvince($stateProvince)
    {
        $this->stateProvince = $stateProvince;
        return $this;
    }

    /**
     * Gets as postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sets a new postalCode
     *
     * @param string $postalCode
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * Gets as countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets a new countryCode
     *
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }


}

