<?php

$errors = validate($_POST);

if (empty($errors)) {
    require_once('../confirm.php');
} else {
    require_once('../form.php');
}


function validate($post)
{
    if (empty($post)) {
        $errors['name'] = '';
        $errors['age'] = '';
        $errors['address'] = '';
    } else {
        if (empty($post['name'])) {
            $errors['name'] = '名前を入力してください';
        }
        if (empty($post['age'])) {
            $errors['age'] = '年齢を入力してください';
        }
        if (empty($post['address'])) {
            $errors['address'] = '住所を入力してください';
        }
    }

    return $errors;
}