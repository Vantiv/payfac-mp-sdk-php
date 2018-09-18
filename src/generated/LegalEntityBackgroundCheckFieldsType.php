<?php

namespace src\generated;

/**
 * Class representing LegalEntityBackgroundCheckFieldsType
 *
 * 
 * XSD Type: legalEntityBackgroundCheckFields
 */
class LegalEntityBackgroundCheckFieldsType
{

    /**
     * @property string $legalEntityName
     */
    public $legalEntityName = null;

    /**
     * @property string $legalEntityType
     */
    public $legalEntityType = null;

    /**
     * @property string $taxId
     */
    public $taxId = null;

    /**
     * Gets as legalEntityName
     *
     * @return string
     */
    public function getLegalEntityName()
    {
        return $this->legalEntityName;
    }

    /**
     * Sets a new legalEntityName
     *
     * @param string $legalEntityName
     * @return self
     */
    public function setLegalEntityName($legalEntityName)
    {
        $this->legalEntityName = $legalEntityName;
        return $this;
    }

    /**
     * Gets as legalEntityType
     *
     * @return string
     */
    public function getLegalEntityType()
    {
        return $this->legalEntityType;
    }

    /**
     * Sets a new legalEntityType
     *
     * @param string $legalEntityType
     * @return self
     */
    public function setLegalEntityType($legalEntityType)
    {
        $this->legalEntityType = $legalEntityType;
        return $this;
    }

    /**
     * Gets as taxId
     *
     * @return string
     */
    public function getTaxId()
    {
        return $this->taxId;
    }

    /**
     * Sets a new taxId
     *
     * @param string $taxId
     * @return self
     */
    public function setTaxId($taxId)
    {
        $this->taxId = $taxId;
        return $this;
    }


}

