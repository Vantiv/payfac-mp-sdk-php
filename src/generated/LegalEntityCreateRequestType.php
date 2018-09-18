<?php

namespace src\generated;

/**
 * Class representing LegalEntityCreateRequestType
 *
 * 
 * XSD Type: legalEntityCreateRequest
 */
class LegalEntityCreateRequestType
{

    /**
     * @property string $legalEntityName
     */
    public $legalEntityName = null;

    /**
     * @property string $legalEntityType
     */
    public $legalEntityType = null;

    /**
     * @property string $legalEntityOwnershipType
     */
    public $legalEntityOwnershipType = null;

    /**
     * @property string $doingBusinessAs
     */
    public $doingBusinessAs = null;

    /**
     * @property string $taxId
     */
    public $taxId = null;

    /**
     * @property string $contactPhone
     */
    public $contactPhone = null;

    /**
     * @property string $annualCreditCardSalesVolume
     */
    public $annualCreditCardSalesVolume = null;

    /**
     * @property boolean $hasAcceptedCreditCards
     */
    public $hasAcceptedCreditCards = null;

    /**
     * @property \src\generated\AddressType $address
     */
    public $address = null;

    /**
     * @property \src\generated\LegalEntityPrincipalType $principal
     */
    public $principal = null;

    /**
     * @property string $yearsInBusiness
     */
    public $yearsInBusiness = null;

    /**
     * Gets as legalEntityName
     *
     * @return string
     */
    public function getLegalEntityName()
    {
        return $this->legalEntityName;
    }

    /**
     * Sets a new legalEntityName
     *
     * @param string $legalEntityName
     * @return self
     */
    public function setLegalEntityName($legalEntityName)
    {
        $this->legalEntityName = $legalEntityName;
        return $this;
    }

    /**
     * Gets as legalEntityType
     *
     * @return string
     */
    public function getLegalEntityType()
    {
        return $this->legalEntityType;
    }

    /**
     * Sets a new legalEntityType
     *
     * @param string $legalEntityType
     * @return self
     */
    public function setLegalEntityType($legalEntityType)
    {
        $this->legalEntityType = $legalEntityType;
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
     * Gets as taxId
     *
     * @return string
     */
    public function getTaxId()
    {
        return $this->taxId;
    }

    /**
     * Sets a new taxId
     *
     * @param string $taxId
     * @return self
     */
    public function setTaxId($taxId)
    {
        $this->taxId = $taxId;
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
     * Gets as annualCreditCardSalesVolume
     *
     * @return string
     */
    public function getAnnualCreditCardSalesVolume()
    {
        return $this->annualCreditCardSalesVolume;
    }

    /**
     * Sets a new annualCreditCardSalesVolume
     *
     * @param string $annualCreditCardSalesVolume
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
     * Gets as address
     *
     * @return \src\generated\AddressType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param \src\generated\AddressType $address
     * @return self
     */
    public function setAddress(\src\generated\AddressType $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as principal
     *
     * @return \src\generated\LegalEntityPrincipalType
     */
    public function getPrincipal()
    {
        return $this->principal;
    }

    /**
     * Sets a new principal
     *
     * @param \src\generated\LegalEntityPrincipalType $principal
     * @return self
     */
    public function setPrincipal(\src\generated\LegalEntityPrincipalType $principal)
    {
        $this->principal = $principal;
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

