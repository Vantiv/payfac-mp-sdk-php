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
    private $principal = null;

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


}

