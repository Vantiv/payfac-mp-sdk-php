<?php

namespace src\generated;

/**
 * Class representing PaypageCredentialType
 *
 * 
 * XSD Type: paypageCredential
 */
class PaypageCredentialType
{

    /**
     * @property string $username
     */
    public $username = null;

    /**
     * @property string $paypageId
     */
    public $paypageId = null;

    /**
     * Gets as username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets a new username
     *
     * @param string $username
     * @return self
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Gets as paypageId
     *
     * @return string
     */
    public function getPaypageId()
    {
        return $this->paypageId;
    }

    /**
     * Sets a new paypageId
     *
     * @param string $paypageId
     * @return self
     */
    public function setPaypageId($paypageId)
    {
        $this->paypageId = $paypageId;
        return $this;
    }


}

