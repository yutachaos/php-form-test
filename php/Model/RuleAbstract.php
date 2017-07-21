<?php

namespace Model;

/**
 * Created by PhpStorm.
 * User: y_kimura
 * Date: 2017/07/21
 * Time: 11:39
 */
abstract class RuleAbstract
{
    protected $value;
    protected $name;

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

    abstract public function getError();
}