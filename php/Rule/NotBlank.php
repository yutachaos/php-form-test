<?php

namespace Rule;

use Model\RuleAbstract;

/**
 * Created by PhpStorm.
 * User: y_kimura
 * Date: 2017/07/20
 * Time: 15:56
 */
class NotBlank extends RuleAbstract
{
    /**
     * @return string
     */
    public function getError()
    {
        if (empty($this->value)) {
            return "{$this->name}を入力してください";
        }
    }
}