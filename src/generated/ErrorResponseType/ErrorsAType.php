<?php

namespace src\generated\ErrorResponseType;

/**
 * Class representing ErrorsAType
 */
class ErrorsAType
{

    /**
     * @property string[] $error
     */
    private $error = array(
        
    );

    /**
     * Adds as error
     *
     * @return self
     * @param string $error
     */
    public function addToError($error)
    {
        $this->error[] = $error;
        return $this;
    }

    /**
     * isset error
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetError($index)
    {
        return isset($this->error[$index]);
    }

    /**
     * unset error
     *
     * @param scalar $index
     * @return void
     */
    public function unsetError($index)
    {
        unset($this->error[$index]);
    }

    /**
     * Gets as error
     *
     * @return string[]
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Sets a new error
     *
     * @param string[] $error
     * @return self
     */
    public function setError(array $error)
    {
        $this->error = $error;
        return $this;
    }


}

