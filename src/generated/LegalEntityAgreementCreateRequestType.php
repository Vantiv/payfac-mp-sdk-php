<?php

namespace src\generated;

/**
 * Class representing LegalEntityAgreementCreateRequestType
 *
 * 
 * XSD Type: legalEntityAgreementCreateRequest
 */
class LegalEntityAgreementCreateRequestType
{

    /**
     * @property \src\generated\LegalEntityAgreementType $legalEntityAgreement
     */
    public $legalEntityAgreement = null;

    /**
     * @property string $sdkVersion
     */
    public $sdkVersion = null;

    /**
     * @property string $language
     */
    public $language = null;

    /**
     * Gets as legalEntityAgreement
     *
     * @return \src\generated\LegalEntityAgreementType
     */
    public function getLegalEntityAgreement()
    {
        return $this->legalEntityAgreement;
    }

    /**
     * Sets a new legalEntityAgreement
     *
     * @param \src\generated\LegalEntityAgreementType $legalEntityAgreement
     * @return self
     */
    public function setLegalEntityAgreement(\src\generated\LegalEntityAgreementType $legalEntityAgreement)
    {
        $this->legalEntityAgreement = $legalEntityAgreement;
        return $this;
    }

    /**
     *Gets as sdkVersion
     *
     * @return string
     */
    public function getSdkVersion()
    {
        return $this->sdkVersion;
    }

    /**
     * Sets a new sdkVersion
     *
     * @param string $sdkVersion
     * @return self
     */
    public function setSdkVersion($sdkVersion)
    {
        $this->sdkVersion = $sdkVersion;
        return $this;
    }

    /**
     *Gets as language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }


}

