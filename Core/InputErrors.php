<?php
namespace FormBuilder;

class InputErrors {

    private static $errors = [];

    public static function set($inputName, $error)
    {
        self::$errors[$inputName] = $error;
    }

    public static function get($inputName)
    {
        return (isset(self::$errors[$inputName])) ? self::$errors[$inputName] : False;
    }

    public static function dump()
    {
        return self::$errors;
    }

}