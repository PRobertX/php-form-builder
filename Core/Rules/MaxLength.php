<?php
namespace Rules;
use FormBuilder\InputErrors as InputErrors;

class MaxLength {

    private $maxLength;
    private $errorMessage;

    public function __construct(int $maxLength, string $errorMessage)
    {
        $this->maxLength = $maxLength;
        $this->errorMessage = $errorMessage;
    }

    public function validate(string $inputName)
    {
        if (strlen($_POST[$inputName]) > $this->maxLength) 
        {
            InputErrors::set($inputName, $this->errorMessage);
        }
    }

}