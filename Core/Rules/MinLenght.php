<?php
namespace Rules;
use FormBuilder\InputErrors as InputErrors;

class MinLenght {

    private $minLenght;
    private $errorMessage;

    public function __construct(int $minLenght, string $errorMessage)
    {
        $this->minLenght = $minLenght;
        $this->errorMessage = $errorMessage;
    }

    public function validate(string $inputName)
    {
        if (strlen($_POST[$inputName]) < $this->minLenght) 
        {
            InputErrors::set($inputName, $this->errorMessage);
        }
    }

}