<?php

namespace Model;

class Input
{
    private $name;
    private $type;
    private $rules;
    private $submitted;
    private $value;

    /**
     * Input constructor.
     *
     * @param       $name
     * @param       $type
     * @param array $rules
     */
    public function __construct($name, $type, array $rules = [])
    {
        $this->name = $name;
        $this->type = $type;
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
    public function getType()
    {
        return $this->type;
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
            return false;
        }

        $errors = '';
        foreach ($this->rules as $rule) {
            $obj = new $rule ($this->value, $this->name);
            $errors .= $obj->getError();
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