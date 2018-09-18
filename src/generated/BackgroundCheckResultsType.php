<?php

namespace src\generated;

/**
 * Class representing BackgroundCheckResultsType
 *
 * 
 * XSD Type: backgroundCheckResults
 */
class BackgroundCheckResultsType
{

    /**
     * @property \src\generated\BusinessResultType $business
     */
    public $business = null;

    /**
     * @property \src\generated\PrincipalResultType $principal
     */
    public $principal = null;

    /**
     * @property \src\generated\BusinessToPrincipalAssociationType $businessToPrincipalAssociation
     */
    public $businessToPrincipalAssociation = null;

    /**
     * @property string $backgroundCheckDecisionNotes
     */
    public $backgroundCheckDecisionNotes = null;

    /**
     * @property \src\generated\BankruptcyResultType $bankruptcyData
     */
    public $bankruptcyData = null;

    /**
     * @property \src\generated\LienResultType $lienResult
     */
    public $lienResult = null;

    /**
     * Gets as business
     *
     * @return \src\generated\BusinessResultType
     */
    public function getBusiness()
    {
        return $this->business;
    }

    /**
     * Sets a new business
     *
     * @param \src\generated\BusinessResultType $business
     * @return self
     */
    public function setBusiness(\src\generated\BusinessResultType $business)
    {
        $this->business = $business;
        return $this;
    }

    /**
     * Gets as principal
     *
     * @return \src\generated\PrincipalResultType
     */
    public function getPrincipal()
    {
        return $this->principal;
    }

    /**
     * Sets a new principal
     *
     * @param \src\generated\PrincipalResultType $principal
     * @return self
     */
    public function setPrincipal(\src\generated\PrincipalResultType $principal)
    {
        $this->principal = $principal;
        return $this;
    }

    /**
     * Gets as businessToPrincipalAssociation
     *
     * @return \src\generated\BusinessToPrincipalAssociationType
     */
    public function getBusinessToPrincipalAssociation()
    {
        return $this->businessToPrincipalAssociation;
    }

    /**
     * Sets a new businessToPrincipalAssociation
     *
     * @param \src\generated\BusinessToPrincipalAssociationType $businessToPrincipalAssociation
     * @return self
     */
    public function setBusinessToPrincipalAssociation(\src\generated\BusinessToPrincipalAssociationType $businessToPrincipalAssociation)
    {
        $this->businessToPrincipalAssociation = $businessToPrincipalAssociation;
        return $this;
    }

    /**
     * Gets as backgroundCheckDecisionNotes
     *
     * @return string
     */
    public function getBackgroundCheckDecisionNotes()
    {
        return $this->backgroundCheckDecisionNotes;
    }

    /**
     * Sets a new backgroundCheckDecisionNotes
     *
     * @param string $backgroundCheckDecisionNotes
     * @return self
     */
    public function setBackgroundCheckDecisionNotes($backgroundCheckDecisionNotes)
    {
        $this->backgroundCheckDecisionNotes = $backgroundCheckDecisionNotes;
        return $this;
    }

    /**
     * Gets as bankruptcyData
     *
     * @return \src\generated\BankruptcyResultType
     */
    public function getBankruptcyData()
    {
        return $this->bankruptcyData;
    }

    /**
     * Sets a new bankruptcyData
     *
     * @param \src\generated\BankruptcyResultType $bankruptcyData
     * @return self
     */
    public function setBankruptcyData(\src\generated\BankruptcyResultType $bankruptcyData)
    {
        $this->bankruptcyData = $bankruptcyData;
        return $this;
    }

    /**
     * Gets as lienResult
     *
     * @return \src\generated\LienResultType
     */
    public function getLienResult()
    {
        return $this->lienResult;
    }

    /**
     * Sets a new lienResult
     *
     * @param \src\generated\LienResultType $lienResult
     * @return self
     */
    public function setLienResult(\src\generated\LienResultType $lienResult)
    {
        $this->lienResult = $lienResult;
        return $this;
    }


}

