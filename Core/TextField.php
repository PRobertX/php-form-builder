<?php 
namespace FormBuilder;
use FormBuilder\InputErrors as Errors;

class TextField extends Input
{
    public function getElement() 
    {

        $element = '<input type="text"' . $this->attributesToString($this->attributes) . ' />';

        if (Errors::get($this->attributes['name']))
        {
            $element .= '<p>' . Errors::get($this->attributes['name']) . '</p>';
        }

        if ($this->label) 
        {
            $element .= '<label for="' . $this->attributes['name'] . '">' . $this->label . '</label>';
        }

        return $element;

    }
}
