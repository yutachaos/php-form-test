<?php

use Model\TestForm;

require_once '../Model/RuleAbstract.php';
require_once '../Model/Form.php';
require_once '../Model/Input.php';
require_once '../Rule/NotBlank.php';
require_once '../Form/TestForm.php';

$form = new TestForm();

if (!empty($_POST)) {
    $form->setSubmitted(true);
    foreach ($_POST as $key => $value) {
        $form->setValue($key, $value);
    }
}

if ($form->isValid() && $form->isSubmitted()) {
    require_once('../View/confirm.php');
} else {
    require_once('../View/form.php');
}
