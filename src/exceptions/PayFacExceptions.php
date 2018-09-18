<?php
/**
 * Created by PhpStorm.
 * User: kdave
 * Date: 9/13/18
 * Time: 3:28 PM
 */

namespace src\exceptions;


class PayFacExceptions extends \Exception
{
    public function __construct($message, $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function __toString()
    {
        return "PayFacException : [{$this->code}]: {$this->message}\n";
    }

}