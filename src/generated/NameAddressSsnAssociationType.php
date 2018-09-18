<?php

namespace src\generated;

/**
 * Class representing NameAddressSsnAssociationType
 *
 * 
 * XSD Type: nameAddressSsnAssociation
 */
class NameAddressSsnAssociationType
{

    /**
     * @property string $code
     */
    public $code = null;

    /**
     * @property string $description
     */
    public $description = null;

    /**
     * Gets as code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

