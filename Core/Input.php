<?php
namespace FormBuilder;

Abstract class Input {

    protected $attributes = [];
    protected $rules = [];
    protected $label = null;
    protected $content = null;

    public function __construct(string $nameAttribute)
    {
        $this->attributes['name'] = $nameAttribute;
    }

    public function setAttribute(string $name, string $value = null)
    {
        if ($value) 
            $this->attributes[$name] = $value;
        else
            $this->attributes[$name] = null;
    
        return $this;
    }

    public function addRule(object $rule)
    {
        array_push($this->rules, $rule);
        return $this;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
        return $this;
    }

    public function validateField() 
    {
        foreach ($this->rules as $rule)
        {
            $rule->validate($this->attributes['name']);
        }
    }

    protected function attributesToString(array $attributes) 
    {
        $string = '';
        
        foreach($attributes as $name => $value) 
        {
            if ($value)
                $string .= ' ' . $name . '="' . $value . '"';
            else
                $string .= ' ' . $name . ' ';
        }

        return $string;
    }

    abstract public function getElement();

}