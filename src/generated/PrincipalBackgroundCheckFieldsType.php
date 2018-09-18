<?php

namespace src\generated;

/**
 * Class representing PrincipalBackgroundCheckFieldsType
 *
 * 
 * XSD Type: principalBackgroundCheckFields
 */
class PrincipalBackgroundCheckFieldsType
{

    /**
     * @property string $firstName
     */
    public $firstName = null;

    /**
     * @property string $lastName
     */
    public $lastName = null;

    /**
     * @property string $ssn
     */
    public $ssn = null;

    /**
     * @property \DateTime $dateOfBirth
     */
    public $dateOfBirth = null;

    /**
     * @property string $driversLicense
     */
    public $driversLicense = null;

    /**
     * @property string $driversLicenseState
     */
    public $driversLicenseState = null;

    /**
     * Gets as firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets a new firstName
     *
     * @param string $firstName
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Gets as lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets a new lastName
     *
     * @param string $lastName
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Gets as ssn
     *
     * @return string
     */
    public function getSsn()
    {
        return $this->ssn;
    }

    /**
     * Sets a new ssn
     *
     * @param string $ssn
     * @return self
     */
    public function setSsn($ssn)
    {
        $this->ssn = $ssn;
        return $this;
    }

    /**
     * Gets as dateOfBirth
     *
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * Sets a new dateOfBirth
     *
     * @param \DateTime $dateOfBirth
     * @return self
     */
    public function setDateOfBirth(\DateTime $dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
        return $this;
    }

    /**
     * Gets as driversLicense
     *
     * @return string
     */
    public function getDriversLicense()
    {
        return $this->driversLicense;
    }

    /**
     * Sets a new driversLicense
     *
     * @param string $driversLicense
     * @return self
     */
    public function setDriversLicense($driversLicense)
    {
        $this->driversLicense = $driversLicense;
        return $this;
    }

    /**
     * Gets as driversLicenseState
     *
     * @return string
     */
    public function getDriversLicenseState()
    {
        return $this->driversLicenseState;
    }

    /**
     * Sets a new driversLicenseState
     *
     * @param string $driversLicenseState
     * @return self
     */
    public function setDriversLicenseState($driversLicenseState)
    {
        $this->driversLicenseState = $driversLicenseState;
        return $this;
    }


}

