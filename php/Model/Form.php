<?php

namespace Model;

/**
 * Created by PhpStorm.
 * User: y_kimura
 * Date: 2017/07/20
 * Time: 12:13
 */
abstract class Form
{

    protected $inputs = array();
    private $submitted;

    /**
     * form constructor.
     *
     * @param bool $submitted
     */
    public function __construct($submitted = false)
    {
        $this->submitted = $submitted;
    }

    /**
     * @param string $name
     * @param string $type
     * @param array  $rules
     *
     * @return mixed
     */
    public function addInput($name, $type, $rules = [])
    {
        $this->inputs[$name] = new Input($name, $type, $rules);
    }

    /**
     * @param $name
     *
     * @return mixed
     */
    public function getInput($name)
    {
        $input = $this->inputs[$name];

        return $input;
    }


    public function setValue($name, $value)
    {
        $input = $this->inputs[$name];
        $input->setValue($value);
    }

    /**
     *
     * @return mixed
     */
    public function getErrors()
    {
        $errors = '';
        foreach ($this->inputs as $input) {
            $errors .= $input->getName().':'.$input->getError()."\n";
        }

        return $errors;
    }

    /**
     * @return bool
     */
    public function isSubmitted()
    {
        return $this->submitted;
    }

    public function isValid()
    {
        foreach ($this->inputs as $input) {
            if ($input->isValid() === false) {
                return false;
            }
        }

        return true;
    }

}
