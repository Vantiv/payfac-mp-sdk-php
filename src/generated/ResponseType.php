<?php

namespace src\generated;

/**
 * Class representing ResponseType
 *
 * 
 * XSD Type: response
 */
class ResponseType
{

    /**
     * @property integer $transactionId
     */
    public $transactionId = null;

    /**
     * Gets as transactionId
     *
     * @return integer
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * Sets a new transactionId
     *
     * @param integer $transactionId
     * @return self
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
        return $this;
    }


}

