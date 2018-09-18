<?php

namespace src\generated;

/**
 * Class representing LegalEntityAgreementCreateResponseType
 *
 * 
 * XSD Type: legalEntityAgreementCreateResponse
 */
class LegalEntityAgreementCreateResponseType extends ResponseType
{

    /**
     * @property boolean $duplicate
     */
    public $duplicate = null;

    /**
     * Gets as duplicate
     *
     * @return boolean
     */
    public function getDuplicate()
    {
        return $this->duplicate;
    }

    /**
     * Sets a new duplicate
     *
     * @param boolean $duplicate
     * @return self
     */
    public function setDuplicate($duplicate)
    {
        $this->duplicate = $duplicate;
        return $this;
    }


}

