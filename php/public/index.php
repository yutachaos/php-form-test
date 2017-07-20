<?php

use Entity\Form;

require_once '../Entity/Form.php';

if (empty($_POST)) {
    $form = new Form();
} else {
    $form = new Form(true);
    $form->setName($_POST['name'])
        ->setAddress($_POST['address'])
        ->setNote($_POST['note']);
}

if ($form->isValid()) {
    require_once('../confirm.php');
} else {
    require_once('../form.php');
}
