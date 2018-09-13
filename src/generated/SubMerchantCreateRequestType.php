<?php

namespace src\generated;

/**
 * Class representing SubMerchantCreateRequestType
 *
 * 
 * XSD Type: subMerchantCreateRequest
 */
class SubMerchantCreateRequestType
{

    /**
     * @property string $merchantName
     */
    private $merchantName = null;

    /**
     * @property string $amexMid
     */
    private $amexMid = null;

    /**
     * @property string $discoverConveyedMid
     */
    private $discoverConveyedMid = null;

    /**
     * @property string $url
     */
    private $url = null;

    /**
     * @property string $customerServiceNumber
     */
    private $customerServiceNumber = null;

    /**
     * @property string $hardCodedBillingDescriptor
     */
    private $hardCodedBillingDescriptor = null;

    /**
     * @property integer $maxTransactionAmount
     */
    private $maxTransactionAmount = null;

    /**
     * @property string $purchaseCurrency
     */
    private $purchaseCurrency = null;

    /**
     * @property string $merchantCategoryCode
     */
    private $merchantCategoryCode = null;

    /**
     * @property string $taxAuthority
     */
    private $taxAuthority = null;

    /**
     * @property string $taxAuthorityState
     */
    private $taxAuthorityState = null;

    /**
     * @property string $bankRoutingNumber
     */
    private $bankRoutingNumber = null;

    /**
     * @property string $bankAccountNumber
     */
    private $bankAccountNumber = null;

    /**
     * @property string $pspMerchantId
     */
    private $pspMerchantId = null;

    /**
     * @property \src\generated\SubMerchantFraudFeatureType $fraud
     */
    private $fraud = null;

    /**
     * @property \src\generated\SubMerchantAmexAcquiredFeatureType $amexAcquired
     */
    private $amexAcquired = null;

    /**
     * @property \src\generated\AddressType $address
     */
    private $address = null;

    /**
     * @property \src\generated\SubMerchantPrimaryContactType $primaryContact
     */
    private $primaryContact = null;

    /**
     * @property boolean $createCredentials
     */
    private $createCredentials = null;

    /**
     * @property \src\generated\SubMerchantECheckFeatureType $eCheck
     */
    private $eCheck = null;

    /**
     * @property \src\generated\SubMerchantFundingType $subMerchantFunding
     */
    private $subMerchantFunding = null;

    /**
     * @property string $settlementCurrency
     */
    private $settlementCurrency = null;

    /**
     * Gets as merchantName
     *
     * @return string
     */
    public function getMerchantName()
    {
        return $this->merchantName;
    }

    /**
     * Sets a new merchantName
     *
     * @param string $merchantName
     * @return self
     */
    public function setMerchantName($merchantName)
    {
        $this->merchantName = $merchantName;
        return $this;
    }

    /**
     * Gets as amexMid
     *
     * @return string
     */
    public function getAmexMid()
    {
        return $this->amexMid;
    }

    /**
     * Sets a new amexMid
     *
     * @param string $amexMid
     * @return self
     */
    public function setAmexMid($amexMid)
    {
        $this->amexMid = $amexMid;
        return $this;
    }

    /**
     * Gets as discoverConveyedMid
     *
     * @return string
     */
    public function getDiscoverConveyedMid()
    {
        return $this->discoverConveyedMid;
    }

    /**
     * Sets a new discoverConveyedMid
     *
     * @param string $discoverConveyedMid
     * @return self
     */
    public function setDiscoverConveyedMid($discoverConveyedMid)
    {
        $this->discoverConveyedMid = $discoverConveyedMid;
        return $this;
    }

    /**
     * Gets as url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets a new url
     *
     * @param string $url
     * @return self
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Gets as customerServiceNumber
     *
     * @return string
     */
    public function getCustomerServiceNumber()
    {
        return $this->customerServiceNumber;
    }

    /**
     * Sets a new customerServiceNumber
     *
     * @param string $customerServiceNumber
     * @return self
     */
    public function setCustomerServiceNumber($customerServiceNumber)
    {
        $this->customerServiceNumber = $customerServiceNumber;
        return $this;
    }

    /**
     * Gets as hardCodedBillingDescriptor
     *
     * @return string
     */
    public function getHardCodedBillingDescriptor()
    {
        return $this->hardCodedBillingDescriptor;
    }

    /**
     * Sets a new hardCodedBillingDescriptor
     *
     * @param string $hardCodedBillingDescriptor
     * @return self
     */
    public function setHardCodedBillingDescriptor($hardCodedBillingDescriptor)
    {
        $this->hardCodedBillingDescriptor = $hardCodedBillingDescriptor;
        return $this;
    }

    /**
     * Gets as maxTransactionAmount
     *
     * @return integer
     */
    public function getMaxTransactionAmount()
    {
        return $this->maxTransactionAmount;
    }

    /**
     * Sets a new maxTransactionAmount
     *
     * @param integer $maxTransactionAmount
     * @return self
     */
    public function setMaxTransactionAmount($maxTransactionAmount)
    {
        $this->maxTransactionAmount = $maxTransactionAmount;
        return $this;
    }

    /**
     * Gets as purchaseCurrency
     *
     * @return string
     */
    public function getPurchaseCurrency()
    {
        return $this->purchaseCurrency;
    }

    /**
     * Sets a new purchaseCurrency
     *
     * @param string $purchaseCurrency
     * @return self
     */
    public function setPurchaseCurrency($purchaseCurrency)
    {
        $this->purchaseCurrency = $purchaseCurrency;
        return $this;
    }

    /**
     * Gets as merchantCategoryCode
     *
     * @return string
     */
    public function getMerchantCategoryCode()
    {
        return $this->merchantCategoryCode;
    }

    /**
     * Sets a new merchantCategoryCode
     *
     * @param string $merchantCategoryCode
     * @return self
     */
    public function setMerchantCategoryCode($merchantCategoryCode)
    {
        $this->merchantCategoryCode = $merchantCategoryCode;
        return $this;
    }

    /**
     * Gets as taxAuthority
     *
     * @return string
     */
    public function getTaxAuthority()
    {
        return $this->taxAuthority;
    }

    /**
     * Sets a new taxAuthority
     *
     * @param string $taxAuthority
     * @return self
     */
    public function setTaxAuthority($taxAuthority)
    {
        $this->taxAuthority = $taxAuthority;
        return $this;
    }

    /**
     * Gets as taxAuthorityState
     *
     * @return string
     */
    public function getTaxAuthorityState()
    {
        return $this->taxAuthorityState;
    }

    /**
     * Sets a new taxAuthorityState
     *
     * @param string $taxAuthorityState
     * @return self
     */
    public function setTaxAuthorityState($taxAuthorityState)
    {
        $this->taxAuthorityState = $taxAuthorityState;
        return $this;
    }

    /**
     * Gets as bankRoutingNumber
     *
     * @return string
     */
    public function getBankRoutingNumber()
    {
        return $this->bankRoutingNumber;
    }

    /**
     * Sets a new bankRoutingNumber
     *
     * @param string $bankRoutingNumber
     * @return self
     */
    public function setBankRoutingNumber($bankRoutingNumber)
    {
        $this->bankRoutingNumber = $bankRoutingNumber;
        return $this;
    }

    /**
     * Gets as bankAccountNumber
     *
     * @return string
     */
    public function getBankAccountNumber()
    {
        return $this->bankAccountNumber;
    }

    /**
     * Sets a new bankAccountNumber
     *
     * @param string $bankAccountNumber
     * @return self
     */
    public function setBankAccountNumber($bankAccountNumber)
    {
        $this->bankAccountNumber = $bankAccountNumber;
        return $this;
    }

    /**
     * Gets as pspMerchantId
     *
     * @return string
     */
    public function getPspMerchantId()
    {
        return $this->pspMerchantId;
    }

    /**
     * Sets a new pspMerchantId
     *
     * @param string $pspMerchantId
     * @return self
     */
    public function setPspMerchantId($pspMerchantId)
    {
        $this->pspMerchantId = $pspMerchantId;
        return $this;
    }

    /**
     * Gets as fraud
     *
     * @return \src\generated\SubMerchantFraudFeatureType
     */
    public function getFraud()
    {
        return $this->fraud;
    }

    /**
     * Sets a new fraud
     *
     * @param \src\generated\SubMerchantFraudFeatureType $fraud
     * @return self
     */
    public function setFraud(\src\generated\SubMerchantFraudFeatureType $fraud)
    {
        $this->fraud = $fraud;
        return $this;
    }

    /**
     * Gets as amexAcquired
     *
     * @return \src\generated\SubMerchantAmexAcquiredFeatureType
     */
    public function getAmexAcquired()
    {
        return $this->amexAcquired;
    }

    /**
     * Sets a new amexAcquired
     *
     * @param \src\generated\SubMerchantAmexAcquiredFeatureType $amexAcquired
     * @return self
     */
    public function setAmexAcquired(\src\generated\SubMerchantAmexAcquiredFeatureType $amexAcquired)
    {
        $this->amexAcquired = $amexAcquired;
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
     * Gets as primaryContact
     *
     * @return \src\generated\SubMerchantPrimaryContactType
     */
    public function getPrimaryContact()
    {
        return $this->primaryContact;
    }

    /**
     * Sets a new primaryContact
     *
     * @param \src\generated\SubMerchantPrimaryContactType $primaryContact
     * @return self
     */
    public function setPrimaryContact(\src\generated\SubMerchantPrimaryContactType $primaryContact)
    {
        $this->primaryContact = $primaryContact;
        return $this;
    }

    /**
     * Gets as createCredentials
     *
     * @return boolean
     */
    public function getCreateCredentials()
    {
        return $this->createCredentials;
    }

    /**
     * Sets a new createCredentials
     *
     * @param boolean $createCredentials
     * @return self
     */
    public function setCreateCredentials($createCredentials)
    {
        $this->createCredentials = $createCredentials;
        return $this;
    }

    /**
     * Gets as eCheck
     *
     * @return \src\generated\SubMerchantECheckFeatureType
     */
    public function getECheck()
    {
        return $this->eCheck;
    }

    /**
     * Sets a new eCheck
     *
     * @param \src\generated\SubMerchantECheckFeatureType $eCheck
     * @return self
     */
    public function setECheck(\src\generated\SubMerchantECheckFeatureType $eCheck)
    {
        $this->eCheck = $eCheck;
        return $this;
    }

    /**
     * Gets as subMerchantFunding
     *
     * @return \src\generated\SubMerchantFundingType
     */
    public function getSubMerchantFunding()
    {
        return $this->subMerchantFunding;
    }

    /**
     * Sets a new subMerchantFunding
     *
     * @param \src\generated\SubMerchantFundingType $subMerchantFunding
     * @return self
     */
    public function setSubMerchantFunding(\src\generated\SubMerchantFundingType $subMerchantFunding)
    {
        $this->subMerchantFunding = $subMerchantFunding;
        return $this;
    }

    /**
     * Gets as settlementCurrency
     *
     * @return string
     */
    public function getSettlementCurrency()
    {
        return $this->settlementCurrency;
    }

    /**
     * Sets a new settlementCurrency
     *
     * @param string $settlementCurrency
     * @return self
     */
    public function setSettlementCurrency($settlementCurrency)
    {
        $this->settlementCurrency = $settlementCurrency;
        return $this;
    }


}

