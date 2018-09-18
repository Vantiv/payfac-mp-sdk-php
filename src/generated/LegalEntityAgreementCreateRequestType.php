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


}

