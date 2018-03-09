<?php

class NotFoundException extends Exception
{

    public function __construct($message, $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    /**
     * Custom error method with message
     * & special message when debugging
     */
    public function errorMessage()
    {
        $message = $this->getMessage();

        if (Debug::DEBUG) {
            $message .= "<br/><br/>Error in line: ".$this->getLine()
                ." in file: ".$this->getFile()
                ."<br/><br/> stacktrace: ".$this->getTraceAsString();
        }

        require 'views/exceptions/notFoundException.php';
    }
}