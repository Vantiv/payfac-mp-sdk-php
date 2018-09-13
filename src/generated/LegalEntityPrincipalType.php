<?php

namespace src\generated;

/**
 * Class representing LegalEntityPrincipalType
 *
 * 
 * XSD Type: legalEntityPrincipal
 */
class LegalEntityPrincipalType
{

    /**
     * @property integer $principalId
     */
    private $principalId = null;

    /**
     * @property string $title
     */
    private $title = null;

    /**
     * @property string $firstName
     */
    private $firstName = null;

    /**
     * @property string $lastName
     */
    private $lastName = null;

    /**
     * @property string $emailAddress
     */
    private $emailAddress = null;

    /**
     * @property string $ssn
     */
    private $ssn = null;

    /**
     * @property string $contactPhone
     */
    private $contactPhone = null;

    /**
     * @property \DateTime $dateOfBirth
     */
    private $dateOfBirth = null;

    /**
     * @property string $driversLicense
     */
    private $driversLicense = null;

    /**
     * @property string $driversLicenseState
     */
    private $driversLicenseState = null;

    /**
     * @property \src\generated\PrincipalAddressType $address
     */
    private $address = null;

    /**
     * @property integer $stakePercent
     */
    private $stakePercent = null;

    /**
     * @property \src\generated\PrincipalResultType $principal
     */
    private $principal = null;

    /**
     * Gets as principalId
     *
     * @return integer
     */
    public function getPrincipalId()
    {
        return $this->principalId;
    }

    /**
     * Sets a new principalId
     *
     * @param integer $principalId
     * @return self
     */
    public function setPrincipalId($principalId)
    {
        $this->principalId = $principalId;
        return $this;
    }

    /**
     * Gets as title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

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
     * Gets as emailAddress
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Sets a new emailAddress
     *
     * @param string $emailAddress
     * @return self
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
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
     * Gets as contactPhone
     *
     * @return string
     */
    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    /**
     * Sets a new contactPhone
     *
     * @param string $contactPhone
     * @return self
     */
    public function setContactPhone($contactPhone)
    {
        $this->contactPhone = $contactPhone;
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

    /**
     * Gets as address
     *
     * @return \src\generated\PrincipalAddressType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param \src\generated\PrincipalAddressType $address
     * @return self
     */
    public function setAddress(\src\generated\PrincipalAddressType $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as stakePercent
     *
     * @return integer
     */
    public function getStakePercent()
    {
        return $this->stakePercent;
    }

    /**
     * Sets a new stakePercent
     *
     * @param integer $stakePercent
     * @return self
     */
    public function setStakePercent($stakePercent)
    {
        $this->stakePercent = $stakePercent;
        return $this;
    }

    /**
     * Gets as principal
     *
     * @return \src\generated\PrincipalResultType
     */
    public function getPrincipal()
    {
        return $this->principal;
    }

    /**
     * Sets a new principal
     *
     * @param \src\generated\PrincipalResultType $principal
     * @return self
     */
    public function setPrincipal(\src\generated\PrincipalResultType $principal)
    {
        $this->principal = $principal;
        return $this;
    }


}

