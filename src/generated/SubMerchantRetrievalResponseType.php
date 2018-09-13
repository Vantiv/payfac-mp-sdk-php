<?php

namespace src\generated;

/**
 * Class representing SubMerchantRetrievalResponseType
 *
 * 
 * XSD Type: subMerchantRetrievalResponse
 */
class SubMerchantRetrievalResponseType extends SubMerchantCreateRequestType
{

    /**
     * @property string $subMerchantId
     */
    private $subMerchantId = null;

    /**
     * @property string $amexSellerId
     */
    private $amexSellerId = null;

    /**
     * @property boolean $disabled
     */
    private $disabled = null;

    /**
     * @property string $transactionId
     */
    private $transactionId = null;

    /**
     * @property string $merchantIdentString
     */
    private $merchantIdentString = null;

    /**
     * @property \src\generated\SubMerchantCredentialsType $credentials
     */
    private $credentials = null;

    /**
     * @property \src\generated\PaypageCredentialType[] $paypageCredentials
     */
    private $paypageCredentials = null;

    /**
     * @property \DateTime $updateDate
     */
    private $updateDate = null;

    /**
     * Gets as subMerchantId
     *
     * @return string
     */
    public function getSubMerchantId()
    {
        return $this->subMerchantId;
    }

    /**
     * Sets a new subMerchantId
     *
     * @param string $subMerchantId
     * @return self
     */
    public function setSubMerchantId($subMerchantId)
    {
        $this->subMerchantId = $subMerchantId;
        return $this;
    }

    /**
     * Gets as amexSellerId
     *
     * @return string
     */
    public function getAmexSellerId()
    {
        return $this->amexSellerId;
    }

    /**
     * Sets a new amexSellerId
     *
     * @param string $amexSellerId
     * @return self
     */
    public function setAmexSellerId($amexSellerId)
    {
        $this->amexSellerId = $amexSellerId;
        return $this;
    }

    /**
     * Gets as disabled
     *
     * @return boolean
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * Sets a new disabled
     *
     * @param boolean $disabled
     * @return self
     */
    public function setDisabled($disabled)
    {
        $this->disabled = $disabled;
        return $this;
    }

    /**
     * Gets as transactionId
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * Sets a new transactionId
     *
     * @param string $transactionId
     * @return self
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    /**
     * Gets as merchantIdentString
     *
     * @return string
     */
    public function getMerchantIdentString()
    {
        return $this->merchantIdentString;
    }

    /**
     * Sets a new merchantIdentString
     *
     * @param string $merchantIdentString
     * @return self
     */
    public function setMerchantIdentString($merchantIdentString)
    {
        $this->merchantIdentString = $merchantIdentString;
        return $this;
    }

    /**
     * Gets as credentials
     *
     * @return \src\generated\SubMerchantCredentialsType
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * Sets a new credentials
     *
     * @param \src\generated\SubMerchantCredentialsType $credentials
     * @return self
     */
    public function setCredentials(\src\generated\SubMerchantCredentialsType $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * Adds as paypageCredential
     *
     * @return self
     * @param \src\generated\PaypageCredentialType $paypageCredential
     */
    public function addToPaypageCredentials(\src\generated\PaypageCredentialType $paypageCredential)
    {
        $this->paypageCredentials[] = $paypageCredential;
        return $this;
    }

    /**
     * isset paypageCredentials
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPaypageCredentials($index)
    {
        return isset($this->paypageCredentials[$index]);
    }

    /**
     * unset paypageCredentials
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPaypageCredentials($index)
    {
        unset($this->paypageCredentials[$index]);
    }

    /**
     * Gets as paypageCredentials
     *
     * @return \src\generated\PaypageCredentialType[]
     */
    public function getPaypageCredentials()
    {
        return $this->paypageCredentials;
    }

    /**
     * Sets a new paypageCredentials
     *
     * @param \src\generated\PaypageCredentialType[] $paypageCredentials
     * @return self
     */
    public function setPaypageCredentials(array $paypageCredentials)
    {
        $this->paypageCredentials = $paypageCredentials;
        return $this;
    }

    /**
     * Gets as updateDate
     *
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * Sets a new updateDate
     *
     * @param \DateTime $updateDate
     * @return self
     */
    public function setUpdateDate(\DateTime $updateDate)
    {
        $this->updateDate = $updateDate;
        return $this;
    }


}

