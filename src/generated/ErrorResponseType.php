<?php

namespace src\generated;

/**
 * Class representing ErrorResponseType
 *
 * 
 * XSD Type: errorResponse
 */
class ErrorResponseType extends ResponseType
{

    /**
     * @property string[] $errors
     */
    private $errors = null;

    /**
     * Adds as error
     *
     * @return self
     * @param string $error
     */
    public function addToErrors($error)
    {
        $this->errors[] = $error;
        return $this;
    }

    /**
     * isset errors
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetErrors($index)
    {
        return isset($this->errors[$index]);
    }

    /**
     * unset errors
     *
     * @param scalar $index
     * @return void
     */
    public function unsetErrors($index)
    {
        unset($this->errors[$index]);
    }

    /**
     * Gets as errors
     *
     * @return string[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Sets a new errors
     *
     * @param string[] $errors
     * @return self
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;
        return $this;
    }


}

