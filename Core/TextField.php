<?php 
namespace FormBuilder;
use FormBuilder\InputErrors as Errors;

class TextField extends Input
{
    public function generateElement() 
    {

        echo '<input type="text"' . $this->attributesToString($this->attributes) . '>';

        if (Errors::get($this->attributes['name']))
        {
            echo '<p>' . Errors::get($this->attributes['name']) . '</p>';
        }

        if ($this->label) 
        {
            echo '<label for="' . $this->attributes['name'] . '">' . $this->label . '</label>';
        }

    }
}
