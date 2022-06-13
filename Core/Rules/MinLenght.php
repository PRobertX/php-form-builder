<?php
namespace Rules;
use FormBuilder\InputErrors as InputErrors;

class MinLenght {

    private $minLenght;
    private $errorMessage;

    public function __construct($minLenght, $errorMessage)
    {
        $this->minLenght = $minLenght;
        $this->errorMessage = $errorMessage;
    }

    public function validate($inputName)
    {
        if (strlen($_POST[$inputName]) < $this->minLenght) 
        {
            InputErrors::set($inputName, $this->errorMessage);
        }
    }

}