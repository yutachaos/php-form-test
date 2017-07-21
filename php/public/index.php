<?php

use Model\TestForm;

require_once '../Impl/RuleInterface.php';
require_once '../Rule/NotBlank.php';
require_once '../Model/Form.php';
require_once '../Model/Input.php';
require_once '../Model/TestForm.php';


if (empty($_POST)) {
    $form = new TestForm();
} else {
    $form = new TestForm(true);
    foreach ($_POST as $key => $value){
        $form->setValue($key,$value);
    }
}

if ($form->isValid() && $form->isSubmitted()) {
    require_once('../View/confirm.php');
} else {
    require_once('../View/form.php');
}
