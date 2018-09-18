<?php
/**
 * Created by PhpStorm.
 * User: kdave
 * Date: 9/13/18
 * Time: 4:12 PM
 */

namespace src\exceptions;


class PayFacWebException extends \Exception
{
    public $errorList;

    public function __construct($message, $code = 0, $errorList = null, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->errorList = $errorList;
    }

    public function __toString()
    {
        return "PayFacWebException : [{$this->code}]: {$this->message}\n";
    }
}