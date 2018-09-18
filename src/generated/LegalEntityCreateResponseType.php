<?php

namespace src\generated;

/**
 * Class representing LegalEntityCreateResponseType
 *
 * 
 * XSD Type: legalEntityCreateResponse
 */
class LegalEntityCreateResponseType extends LegalEntityResponseType
{

    /**
     * @property \src\generated\LegalEntityPrincipalCreateResponseType $principal
     */
    public $principal = null;

    /**
     * Gets as principal
     *
     * @return \src\generated\LegalEntityPrincipalCreateResponseType
     */
    public function getPrincipal()
    {
        return $this->principal;
    }

    /**
     * Sets a new principal
     *
     * @param \src\generated\LegalEntityPrincipalCreateResponseType $principal
     * @return self
     */
    public function setPrincipal(\src\generated\LegalEntityPrincipalCreateResponseType $principal)
    {
        $this->principal = $principal;
        return $this;
    }


}

