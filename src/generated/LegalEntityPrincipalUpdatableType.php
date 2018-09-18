<?php

namespace src\generated;

/**
 * Class representing LegalEntityPrincipalUpdatableType
 *
 * 
 * XSD Type: legalEntityPrincipalUpdatable
 */
class LegalEntityPrincipalUpdatableType
{

    /**
     * @property integer $principalId
     */
    public $principalId = null;

    /**
     * @property string $title
     */
    public $title = null;

    /**
     * @property string $emailAddress
     */
    public $emailAddress = null;

    /**
     * @property string $contactPhone
     */
    public $contactPhone = null;

    /**
     * @property \src\generated\PrincipalAddressType $address
     */
    public $address = null;

    /**
     * @property integer $stakePercent
     */
    public $stakePercent = null;

    /**
     * @property \src\generated\PrincipalBackgroundCheckFieldsType $backgroundCheckFields
     */
    public $backgroundCheckFields = null;

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
     * Gets as backgroundCheckFields
     *
     * @return \src\generated\PrincipalBackgroundCheckFieldsType
     */
    public function getBackgroundCheckFields()
    {
        return $this->backgroundCheckFields;
    }

    /**
     * Sets a new backgroundCheckFields
     *
     * @param \src\generated\PrincipalBackgroundCheckFieldsType $backgroundCheckFields
     * @return self
     */
    public function setBackgroundCheckFields(\src\generated\PrincipalBackgroundCheckFieldsType $backgroundCheckFields)
    {
        $this->backgroundCheckFields = $backgroundCheckFields;
        return $this;
    }


}

