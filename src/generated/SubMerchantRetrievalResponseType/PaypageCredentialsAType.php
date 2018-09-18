<?php

namespace src\generated\SubMerchantRetrievalResponseType;

/**
 * Class representing PaypageCredentialsAType
 */
class PaypageCredentialsAType
{

    /**
     * @property \src\generated\PaypageCredentialType[] $paypageCredential
     */
    public $paypageCredential = array(
        
    );

    /**
     * Adds as paypageCredential
     *
     * @return self
     * @param \src\generated\PaypageCredentialType $paypageCredential
     */
    public function addToPaypageCredential(\src\generated\PaypageCredentialType $paypageCredential)
    {
        $this->paypageCredential[] = $paypageCredential;
        return $this;
    }

    /**
     * isset paypageCredential
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPaypageCredential($index)
    {
        return isset($this->paypageCredential[$index]);
    }

    /**
     * unset paypageCredential
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPaypageCredential($index)
    {
        unset($this->paypageCredential[$index]);
    }

    /**
     * Gets as paypageCredential
     *
     * @return \src\generated\PaypageCredentialType[]
     */
    public function getPaypageCredential()
    {
        return $this->paypageCredential;
    }

    /**
     * Sets a new paypageCredential
     *
     * @param \src\generated\PaypageCredentialType[] $paypageCredential
     * @return self
     */
    public function setPaypageCredential(array $paypageCredential)
    {
        $this->paypageCredential = $paypageCredential;
        return $this;
    }


}

