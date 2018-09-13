<?php

namespace src\generated\LegalEntityAgreementRetrievalResponseType;

/**
 * Class representing AgreementsAType
 */
class AgreementsAType
{

    /**
     * @property \src\generated\LegalEntityAgreementType[] $legalEntityAgreement
     */
    private $legalEntityAgreement = array(
        
    );

    /**
     * Adds as legalEntityAgreement
     *
     * @return self
     * @param \src\generated\LegalEntityAgreementType $legalEntityAgreement
     */
    public function addToLegalEntityAgreement(\src\generated\LegalEntityAgreementType $legalEntityAgreement)
    {
        $this->legalEntityAgreement[] = $legalEntityAgreement;
        return $this;
    }

    /**
     * isset legalEntityAgreement
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLegalEntityAgreement($index)
    {
        return isset($this->legalEntityAgreement[$index]);
    }

    /**
     * unset legalEntityAgreement
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLegalEntityAgreement($index)
    {
        unset($this->legalEntityAgreement[$index]);
    }

    /**
     * Gets as legalEntityAgreement
     *
     * @return \src\generated\LegalEntityAgreementType[]
     */
    public function getLegalEntityAgreement()
    {
        return $this->legalEntityAgreement;
    }

    /**
     * Sets a new legalEntityAgreement
     *
     * @param \src\generated\LegalEntityAgreementType[] $legalEntityAgreement
     * @return self
     */
    public function setLegalEntityAgreement(array $legalEntityAgreement)
    {
        $this->legalEntityAgreement = $legalEntityAgreement;
        return $this;
    }


}

