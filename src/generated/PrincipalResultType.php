<?php

namespace src\generated;

/**
 * Class representing PrincipalResultType
 *
 * 
 * XSD Type: principalResult
 */
class PrincipalResultType
{

    /**
     * @property \src\generated\PrincipalVerificationResultType $verificationResult
     */
    private $verificationResult = null;

    /**
     * @property string $backgroundCheckDecisionNotes
     */
    private $backgroundCheckDecisionNotes = null;

    /**
     * Gets as verificationResult
     *
     * @return \src\generated\PrincipalVerificationResultType
     */
    public function getVerificationResult()
    {
        return $this->verificationResult;
    }

    /**
     * Sets a new verificationResult
     *
     * @param \src\generated\PrincipalVerificationResultType $verificationResult
     * @return self
     */
    public function setVerificationResult(\src\generated\PrincipalVerificationResultType $verificationResult)
    {
        $this->verificationResult = $verificationResult;
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


}

