<?php
namespace FormBuilder;

class InputErrors {

    private static $errors = [];

    public static function set(string $inputName, string $error)
    {
        self::$errors[$inputName] = $error;
    }

    public static function get(string $inputName)
    {
        return (isset(self::$errors[$inputName])) ? self::$errors[$inputName] : False;
    }

    public static function dump()
    {
        return self::$errors;
    }

}