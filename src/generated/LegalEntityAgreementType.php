<?php

namespace src\generated;

/**
 * Class representing LegalEntityAgreementType
 *
 * 
 * XSD Type: legalEntityAgreement
 */
class LegalEntityAgreementType
{

    /**
     * @property string $legalEntityAgreementType
     */
    public $legalEntityAgreementType = null;

    /**
     * @property string $agreementVersion
     */
    public $agreementVersion = null;

    /**
     * @property string $userFullName
     */
    public $userFullName = null;

    /**
     * @property string $userSystemName
     */
    public $userSystemName = null;

    /**
     * @property string $userIPAddress
     */
    public $userIPAddress = null;

    /**
     * @property boolean $manuallyEntered
     */
    public $manuallyEntered = null;

    /**
     * @property \DateTime $acceptanceDateTime
     */
    public $acceptanceDateTime = null;

    /**
     * Gets as legalEntityAgreementType
     *
     * @return string
     */
    public function getLegalEntityAgreementType()
    {
        return $this->legalEntityAgreementType;
    }

    /**
     * Sets a new legalEntityAgreementType
     *
     * @param string $legalEntityAgreementType
     * @return self
     */
    public function setLegalEntityAgreementType($legalEntityAgreementType)
    {
        $this->legalEntityAgreementType = $legalEntityAgreementType;
        return $this;
    }

    /**
     * Gets as agreementVersion
     *
     * @return string
     */
    public function getAgreementVersion()
    {
        return $this->agreementVersion;
    }

    /**
     * Sets a new agreementVersion
     *
     * @param string $agreementVersion
     * @return self
     */
    public function setAgreementVersion($agreementVersion)
    {
        $this->agreementVersion = $agreementVersion;
        return $this;
    }

    /**
     * Gets as userFullName
     *
     * @return string
     */
    public function getUserFullName()
    {
        return $this->userFullName;
    }

    /**
     * Sets a new userFullName
     *
     * @param string $userFullName
     * @return self
     */
    public function setUserFullName($userFullName)
    {
        $this->userFullName = $userFullName;
        return $this;
    }

    /**
     * Gets as userSystemName
     *
     * @return string
     */
    public function getUserSystemName()
    {
        return $this->userSystemName;
    }

    /**
     * Sets a new userSystemName
     *
     * @param string $userSystemName
     * @return self
     */
    public function setUserSystemName($userSystemName)
    {
        $this->userSystemName = $userSystemName;
        return $this;
    }

    /**
     * Gets as userIPAddress
     *
     * @return string
     */
    public function getUserIPAddress()
    {
        return $this->userIPAddress;
    }

    /**
     * Sets a new userIPAddress
     *
     * @param string $userIPAddress
     * @return self
     */
    public function setUserIPAddress($userIPAddress)
    {
        $this->userIPAddress = $userIPAddress;
        return $this;
    }

    /**
     * Gets as manuallyEntered
     *
     * @return boolean
     */
    public function getManuallyEntered()
    {
        return $this->manuallyEntered;
    }

    /**
     * Sets a new manuallyEntered
     *
     * @param boolean $manuallyEntered
     * @return self
     */
    public function setManuallyEntered($manuallyEntered)
    {
        $this->manuallyEntered = $manuallyEntered;
        return $this;
    }

    /**
     * Gets as acceptanceDateTime
     *
     * @return \DateTime
     */
    public function getAcceptanceDateTime()
    {
        return $this->acceptanceDateTime;
    }

    /**
     * Sets a new acceptanceDateTime
     *
     * @param \DateTime $acceptanceDateTime
     * @return self
     */
    public function setAcceptanceDateTime(\DateTime $acceptanceDateTime)
    {
        $this->acceptanceDateTime = $acceptanceDateTime;
        return $this;
    }


}

