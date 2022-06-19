<?php
namespace FormBuilder;

class FormGenerator {

    private $action;
    private $method;
    private $fields = [];

    public function __construct(string $action, string $method) 
    { 
        $this->action = $action;
        $this->method = $method;
    }

    public function addField(object $field)
    {
        array_push($this->fields, $field);
    }

    public function display()
    {
    
        echo '<form method="', $this->method, '" action="', $this->action, '">';

            foreach ($this->fields as $field)
                $field->generateElement();
        
        echo '<input type="submit" />';

        echo '</form>';

    }

    public function validateForm()
    {
        foreach ($this->fields as $field)
        {
            $field->validateField();
        }
    }

}