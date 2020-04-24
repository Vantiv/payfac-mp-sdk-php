<?php

namespace src\generated;

/**
 * Class representing LegalEntityPrincipalCreateRequestType
 *
 * 
 * XSD Type: legalEntityPrincipalCreateRequest
 */
class LegalEntityPrincipalCreateRequestType
{

    /**
     * @property \src\generated\LegalEntityPrincipalType $principal
     */
    public $principal = null;

    /**
     * @property string $sdkVersion
     */
    public $sdkVersion = null;

    /**
     * @property string $language
     */
    public $language = null;

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

