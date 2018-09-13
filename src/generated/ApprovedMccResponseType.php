<?php

namespace src\generated;

/**
 * Class representing ApprovedMccResponseType
 *
 * 
 * XSD Type: approvedMccResponse
 */
class ApprovedMccResponseType extends ResponseType
{

    /**
     * @property string[] $approvedMccs
     */
    private $approvedMccs = null;

    /**
     * Adds as approvedMcc
     *
     * @return self
     * @param string $approvedMcc
     */
    public function addToApprovedMccs($approvedMcc)
    {
        $this->approvedMccs[] = $approvedMcc;
        return $this;
    }

    /**
     * isset approvedMccs
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetApprovedMccs($index)
    {
        return isset($this->approvedMccs[$index]);
    }

    /**
     * unset approvedMccs
     *
     * @param scalar $index
     * @return void
     */
    public function unsetApprovedMccs($index)
    {
        unset($this->approvedMccs[$index]);
    }

    /**
     * Gets as approvedMccs
     *
     * @return string[]
     */
    public function getApprovedMccs()
    {
        return $this->approvedMccs;
    }

    /**
     * Sets a new approvedMccs
     *
     * @param string[] $approvedMccs
     * @return self
     */
    public function setApprovedMccs(array $approvedMccs)
    {
        $this->approvedMccs = $approvedMccs;
        return $this;
    }


}

