<?php
namespace Rules;
use FormBuilder\InputErrors as InputErrors;

class MaxLenght {

    private $maxLenght;
    private $errorMessage;

    public function __construct($maxLenght, $errorMessage)
    {
        $this->maxLenght = $maxLenght;
        $this->errorMessage = $errorMessage;
    }

    public function validate($inputName)
    {
        if (strlen($_POST[$inputName]) > $this->maxLenght) 
        {
            InputErrors::set($inputName, $this->errorMessage);
        }
    }

}