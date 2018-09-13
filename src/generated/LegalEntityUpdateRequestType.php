<?php

namespace src\generated;

/**
 * Class representing LegalEntityUpdateRequestType
 *
 * 
 * XSD Type: legalEntityUpdateRequest
 */
class LegalEntityUpdateRequestType
{

    /**
     * @property \src\generated\AddressUpdatableType $address
     */
    private $address = null;

    /**
     * @property string $contactPhone
     */
    private $contactPhone = null;

    /**
     * @property string $doingBusinessAs
     */
    private $doingBusinessAs = null;

    /**
     * @property integer $annualCreditCardSalesVolume
     */
    private $annualCreditCardSalesVolume = null;

    /**
     * @property boolean $hasAcceptedCreditCards
     */
    private $hasAcceptedCreditCards = null;

    /**
     * @property \src\generated\LegalEntityPrincipalUpdatableType $principal
     */
    private $principal = null;

    /**
     * @property \src\generated\LegalEntityBackgroundCheckFieldsType $backgroundCheckFields
     */
    private $backgroundCheckFields = null;

    /**
     * @property string $legalEntityOwnershipType
     */
    private $legalEntityOwnershipType = null;

    /**
     * @property string $yearsInBusiness
     */
    private $yearsInBusiness = null;

    /**
     * Gets as address
     *
     * @return \src\generated\AddressUpdatableType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param \src\generated\AddressUpdatableType $address
     * @return self
     */
    public function setAddress(\src\generated\AddressUpdatableType $address)
    {
        $this->address = $address;
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
     * Gets as doingBusinessAs
     *
     * @return string
     */
    public function getDoingBusinessAs()
    {
        return $this->doingBusinessAs;
    }

    /**
     * Sets a new doingBusinessAs
     *
     * @param string $doingBusinessAs
     * @return self
     */
    public function setDoingBusinessAs($doingBusinessAs)
    {
        $this->doingBusinessAs = $doingBusinessAs;
        return $this;
    }

    /**
     * Gets as annualCreditCardSalesVolume
     *
     * @return integer
     */
    public function getAnnualCreditCardSalesVolume()
    {
        return $this->annualCreditCardSalesVolume;
    }

    /**
     * Sets a new annualCreditCardSalesVolume
     *
     * @param integer $annualCreditCardSalesVolume
     * @return self
     */
    public function setAnnualCreditCardSalesVolume($annualCreditCardSalesVolume)
    {
        $this->annualCreditCardSalesVolume = $annualCreditCardSalesVolume;
        return $this;
    }

    /**
     * Gets as hasAcceptedCreditCards
     *
     * @return boolean
     */
    public function getHasAcceptedCreditCards()
    {
        return $this->hasAcceptedCreditCards;
    }

    /**
     * Sets a new hasAcceptedCreditCards
     *
     * @param boolean $hasAcceptedCreditCards
     * @return self
     */
    public function setHasAcceptedCreditCards($hasAcceptedCreditCards)
    {
        $this->hasAcceptedCreditCards = $hasAcceptedCreditCards;
        return $this;
    }

    /**
     * Gets as principal
     *
     * @return \src\generated\LegalEntityPrincipalUpdatableType
     */
    public function getPrincipal()
    {
        return $this->principal;
    }

    /**
     * Sets a new principal
     *
     * @param \src\generated\LegalEntityPrincipalUpdatableType $principal
     * @return self
     */
    public function setPrincipal(\src\generated\LegalEntityPrincipalUpdatableType $principal)
    {
        $this->principal = $principal;
        return $this;
    }

    /**
     * Gets as backgroundCheckFields
     *
     * @return \src\generated\LegalEntityBackgroundCheckFieldsType
     */
    public function getBackgroundCheckFields()
    {
        return $this->backgroundCheckFields;
    }

    /**
     * Sets a new backgroundCheckFields
     *
     * @param \src\generated\LegalEntityBackgroundCheckFieldsType $backgroundCheckFields
     * @return self
     */
    public function setBackgroundCheckFields(\src\generated\LegalEntityBackgroundCheckFieldsType $backgroundCheckFields)
    {
        $this->backgroundCheckFields = $backgroundCheckFields;
        return $this;
    }

    /**
     * Gets as legalEntityOwnershipType
     *
     * @return string
     */
    public function getLegalEntityOwnershipType()
    {
        return $this->legalEntityOwnershipType;
    }

    /**
     * Sets a new legalEntityOwnershipType
     *
     * @param string $legalEntityOwnershipType
     * @return self
     */
    public function setLegalEntityOwnershipType($legalEntityOwnershipType)
    {
        $this->legalEntityOwnershipType = $legalEntityOwnershipType;
        return $this;
    }

    /**
     * Gets as yearsInBusiness
     *
     * @return string
     */
    public function getYearsInBusiness()
    {
        return $this->yearsInBusiness;
    }

    /**
     * Sets a new yearsInBusiness
     *
     * @param string $yearsInBusiness
     * @return self
     */
    public function setYearsInBusiness($yearsInBusiness)
    {
        $this->yearsInBusiness = $yearsInBusiness;
        return $this;
    }


}

