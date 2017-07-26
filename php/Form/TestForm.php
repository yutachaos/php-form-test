<?php
/**
 * Created by PhpStorm.
 * User: y_kimura
 * Date: 2017/07/20
 * Time: 16:49
 */

namespace Model;

use Rule\NotBlank;

class TestForm extends Form
{

    /**
     * TestForm constructor.
     *
     **/
    public function __construct()
    {

        $this->addInput('name', 'text',[NotBlank::class]);
        $this->addInput('address', 'text',[NotBlank::class]);
        $this->addInput('age', 'text',[NotBlank::class]);
        $this->addInput('note','textarea');
    }
}