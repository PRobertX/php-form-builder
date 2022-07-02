<?php
namespace Rules;
use FormBuilder\InputErrors as InputErrors;

class MinLength {

    private $minLength;
    private $errorMessage;

    public function __construct(int $minLength, string $errorMessage)
    {
        $this->minLength = $minLength;
        $this->errorMessage = $errorMessage;
    }

    public function validate(string $inputName)
    {
        if (strlen($_POST[$inputName]) < $this->minLength) 
        {
            InputErrors::set($inputName, $this->errorMessage);
        }
    }

}