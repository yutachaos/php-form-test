<?php
/**
 * Created by PhpStorm.
 * User: y_kimura
 * Date: 2017/07/20
 * Time: 16:49
 */

namespace Model;


class TestForm extends Form
{

    /**
     * TestForm constructor.
     *
     * @param bool $submitted
     */
    public function __construct($submitted = false)
    {
        parent::__construct($submitted);

        $this->addInput("name", ['NotBlank']);
        $this->addInput("address", ['NotBlank']);
        $this->addInput("age", ['NotBlank']);
        $this->addInput("note");
    }
}