<?php

namespace Rule;

use Impl\RuleInterface;

/**
 * Created by PhpStorm.
 * User: y_kimura
 * Date: 2017/07/20
 * Time: 15:56
 */
class NotBlank implements RuleInterface
{

    private $value;
    private $name;

    /**
     * NotBlank constructor.
     *
     * @param $value
     * @param $name
     */
    public function __construct($value, $name)
    {
        $this->value = $value;
        $this->name = $name;
    }


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