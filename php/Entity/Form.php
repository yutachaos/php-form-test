<?php

namespace Entity;
/**
 * Created by PhpStorm.
 * User: y_kimura
 * Date: 2017/07/20
 * Time: 12:13
 */
class Form
{

    private $name;
    private $address;
    private $age;
    private $note;


    /**
     * @param bool $submitted
     */
    public function setSubmitted($submitted)
    {
        $this->submitted = $submitted;
    }

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
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;

    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param string $age
     *
     * @return $this
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;

    }


    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }


    /**
     * @param string $note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }


    /**
     * @return mixed
     */
    public function getNameError()
    {
        return $this->notBlack($this->name, "名前");
    }

    /**
     * @return mixed
     */
    public function getAddressError()
    {
        return $this->notBlack($this->address, "住所");
    }

    /**
     * @return mixed
     */
    public function getAgeError()
    {
        return $this->notBlack($this->age, "年齢");
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
        if($this->submitted == false){
            return false;
        }

        foreach (get_class_methods($this) as $methodName) {
            if (strpos($methodName, "Error") !== false
                && !empty(call_user_func([$this, $methodName]))) {
                return false;
            }
        }

        return true;
    }

    /**
     * @param $value
     * @param $formName
     *
     * @return string
     */
    private function notBlack($value, $formName)
    {
        if (empty($value) && $this->submitted) {
            return "{$formName}を入力してください";
        }
    }

}