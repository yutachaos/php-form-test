<?php

namespace Model;

class Input
{
    const TYPE_TEXT = 'text';
    const TYPE_TEXTAREA = 'textarea';

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
    public function __construct($name, $type = self::TYPE_TEXT, array $rules = [])
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
            return;
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