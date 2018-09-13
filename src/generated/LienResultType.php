<?php

namespace src\generated;

/**
 * Class representing LienResultType
 *
 * 
 * XSD Type: lienResult
 */
class LienResultType
{

    /**
     * @property string $lienType
     */
    private $lienType = null;

    /**
     * @property integer $releasedCount
     */
    private $releasedCount = null;

    /**
     * @property integer $unreleasedCount
     */
    private $unreleasedCount = null;

    /**
     * @property string $companyName
     */
    private $companyName = null;

    /**
     * @property string $streetAddress1
     */
    private $streetAddress1 = null;

    /**
     * @property string $streetAddress2
     */
    private $streetAddress2 = null;

    /**
     * @property string $city
     */
    private $city = null;

    /**
     * @property string $state
     */
    private $state = null;

    /**
     * @property string $zip
     */
    private $zip = null;

    /**
     * @property string $zip4
     */
    private $zip4 = null;

    /**
     * @property \DateTime $filingDate
     */
    private $filingDate = null;

    /**
     * Gets as lienType
     *
     * @return string
     */
    public function getLienType()
    {
        return $this->lienType;
    }

    /**
     * Sets a new lienType
     *
     * @param string $lienType
     * @return self
     */
    public function setLienType($lienType)
    {
        $this->lienType = $lienType;
        return $this;
    }

    /**
     * Gets as releasedCount
     *
     * @return integer
     */
    public function getReleasedCount()
    {
        return $this->releasedCount;
    }

    /**
     * Sets a new releasedCount
     *
     * @param integer $releasedCount
     * @return self
     */
    public function setReleasedCount($releasedCount)
    {
        $this->releasedCount = $releasedCount;
        return $this;
    }

    /**
     * Gets as unreleasedCount
     *
     * @return integer
     */
    public function getUnreleasedCount()
    {
        return $this->unreleasedCount;
    }

    /**
     * Sets a new unreleasedCount
     *
     * @param integer $unreleasedCount
     * @return self
     */
    public function setUnreleasedCount($unreleasedCount)
    {
        $this->unreleasedCount = $unreleasedCount;
        return $this;
    }

    /**
     * Gets as companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * @param string $companyName
     * @return self
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * Gets as streetAddress1
     *
     * @return string
     */
    public function getStreetAddress1()
    {
        return $this->streetAddress1;
    }

    /**
     * Sets a new streetAddress1
     *
     * @param string $streetAddress1
     * @return self
     */
    public function setStreetAddress1($streetAddress1)
    {
        $this->streetAddress1 = $streetAddress1;
        return $this;
    }

    /**
     * Gets as streetAddress2
     *
     * @return string
     */
    public function getStreetAddress2()
    {
        return $this->streetAddress2;
    }

    /**
     * Sets a new streetAddress2
     *
     * @param string $streetAddress2
     * @return self
     */
    public function setStreetAddress2($streetAddress2)
    {
        $this->streetAddress2 = $streetAddress2;
        return $this;
    }

    /**
     * Gets as city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets a new city
     *
     * @param string $city
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Gets as state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets a new state
     *
     * @param string $state
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * Gets as zip
     *
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Sets a new zip
     *
     * @param string $zip
     * @return self
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
        return $this;
    }

    /**
     * Gets as zip4
     *
     * @return string
     */
    public function getZip4()
    {
        return $this->zip4;
    }

    /**
     * Sets a new zip4
     *
     * @param string $zip4
     * @return self
     */
    public function setZip4($zip4)
    {
        $this->zip4 = $zip4;
        return $this;
    }

    /**
     * Gets as filingDate
     *
     * @return \DateTime
     */
    public function getFilingDate()
    {
        return $this->filingDate;
    }

    /**
     * Sets a new filingDate
     *
     * @param \DateTime $filingDate
     * @return self
     */
    public function setFilingDate(\DateTime $filingDate)
    {
        $this->filingDate = $filingDate;
        return $this;
    }


}

