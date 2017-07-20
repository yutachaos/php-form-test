<?php

namespace Model;

class Input
{
    private $name;
    private $submitted;
    private $value;
    private $rules;

    /**
     * Input constructor.
     *
     * @param $name
     * @param $rules
     */
    public function __construct($name, array $rules = [])
    {
        $this->name = $name;
        $this->rules = $rules;
        $this->submitted = false;
    }

    /**
     *
     */
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getRules()
    {
        return $this->rules;
    }


    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
        $this->submitted = true;
    }

    /**
     * @return mixed
     */
    public function getErrors()
    {
        if ($this->submitted === false) {
            return;
        }

        $errors = '';
        foreach ($this->rules as $rule) {
            $errors .= $rule::getError($this->value, $this->name);
        }

        return $errors;
    }

    /**
     */
    public function isValid()
    {
        return empty($this->getErrors());
    }
}