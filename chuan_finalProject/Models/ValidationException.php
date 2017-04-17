<?php

/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 4/5/2017
 * Time: 12:15 PM
 */
class ValidationException extends Exception
{
    private $errors = NULL;

    public function __construct($errors)
    {
        parent::__construct("Validation Error.");
        $this->errors = $errors;
    }

    public function getErrors(){
        return $this->errors;
    }

}