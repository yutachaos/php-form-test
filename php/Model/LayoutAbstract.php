<?php
/**
 * Created by PhpStorm.
 * User: y_kimura
 * Date: 2017/07/21
 * Time: 11:44
 */

namespace Model;


abstract class LayoutAbstract
{
    protected $type;
    protected $name;

    /**
     * NotBlank constructor.
     *
     * @param $type
     * @param $name
     */
    public function __construct($type, $name)
    {
        $this->type = $type;
        $this->name = $name;
    }

    abstract public function export();
}