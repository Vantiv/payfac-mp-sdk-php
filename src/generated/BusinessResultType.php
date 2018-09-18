<?php

namespace src\generated;

/**
 * Class representing BusinessResultType
 *
 * 
 * XSD Type: businessResult
 */
class BusinessResultType
{

    /**
     * @property \src\generated\BusinessVerificationResultType $verificationResult
     */
    public $verificationResult = null;

    /**
     * Gets as verificationResult
     *
     * @return \src\generated\BusinessVerificationResultType
     */
    public function getVerificationResult()
    {
        return $this->verificationResult;
    }

    /**
     * Sets a new verificationResult
     *
     * @param \src\generated\BusinessVerificationResultType $verificationResult
     * @return self
     */
    public function setVerificationResult(\src\generated\BusinessVerificationResultType $verificationResult)
    {
        $this->verificationResult = $verificationResult;
        return $this;
    }


}

