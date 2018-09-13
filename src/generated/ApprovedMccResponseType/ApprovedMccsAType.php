<?php

namespace src\generated\ApprovedMccResponseType;

/**
 * Class representing ApprovedMccsAType
 */
class ApprovedMccsAType
{

    /**
     * @property string[] $approvedMcc
     */
    private $approvedMcc = array(
        
    );

    /**
     * Adds as approvedMcc
     *
     * @return self
     * @param string $approvedMcc
     */
    public function addToApprovedMcc($approvedMcc)
    {
        $this->approvedMcc[] = $approvedMcc;
        return $this;
    }

    /**
     * isset approvedMcc
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetApprovedMcc($index)
    {
        return isset($this->approvedMcc[$index]);
    }

    /**
     * unset approvedMcc
     *
     * @param scalar $index
     * @return void
     */
    public function unsetApprovedMcc($index)
    {
        unset($this->approvedMcc[$index]);
    }

    /**
     * Gets as approvedMcc
     *
     * @return string[]
     */
    public function getApprovedMcc()
    {
        return $this->approvedMcc;
    }

    /**
     * Sets a new approvedMcc
     *
     * @param string[] $approvedMcc
     * @return self
     */
    public function setApprovedMcc(array $approvedMcc)
    {
        $this->approvedMcc = $approvedMcc;
        return $this;
    }


}

