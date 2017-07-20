<?php

use Model\TestForm;

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
    require_once('../confirm.php');
} else {
    require_once('../form.php');
}
