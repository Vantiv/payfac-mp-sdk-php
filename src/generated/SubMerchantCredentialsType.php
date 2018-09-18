<?php

namespace src\generated;

/**
 * Class representing SubMerchantCredentialsType
 *
 * 
 * XSD Type: subMerchantCredentials
 */
class SubMerchantCredentialsType
{

    /**
     * @property string $username
     */
    public $username = null;

    /**
     * @property string $password
     */
    public $password = null;

    /**
     * @property \DateTime $passwordExpirationDate
     */
    public $passwordExpirationDate = null;

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
     * Gets as password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets a new password
     *
     * @param string $password
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Gets as passwordExpirationDate
     *
     * @return \DateTime
     */
    public function getPasswordExpirationDate()
    {
        return $this->passwordExpirationDate;
    }

    /**
     * Sets a new passwordExpirationDate
     *
     * @param \DateTime $passwordExpirationDate
     * @return self
     */
    public function setPasswordExpirationDate(\DateTime $passwordExpirationDate)
    {
        $this->passwordExpirationDate = $passwordExpirationDate;
        return $this;
    }


}

