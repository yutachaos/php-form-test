<?php

/**
 * Created by PhpStorm.
 * User: y_kimura
 * Date: 2017/07/20
 * Time: 15:56
 */
class NotBlank
{
    /**
     * @param $value
     * @param $formName
     *
     * @return string
     */
    public static function getError($value, $formName)
    {
        if (empty($value)) {
            return "{$formName}を入力してください";
        }
    }
}