<?php
require __DIR__ . '/vendor/autoload.php';

use FormBuilder\FormGenerator as Form;
use FormBuilder\TextField as TextField;
use FormBuilder\InputErrors as Errors;

$action = '/index.php';
$method = 'POST';
$form = new Form($action, $method);


$form->addField((new TextField('name'))->addRule(new Rules\MinLength(3, 'Name too short'))
                                        ->addRule(new Rules\MaxLength(13, 'Name too long'))
                                        ->setAttribute('required'));
$form->addField(new TextField('phone_number'));
$form->addField(new TextField('email_address'));


if (!empty($_POST))
    $form->validateForm();

$form->display();