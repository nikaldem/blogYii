<?php

class MyModel extends CModel
{
    /*public $name;
    public $fname;*/
    public $name_temp;

    public function attributeNames()
    {
        return array();
    }

    public function getName()
    {
        return $this->name_temp;

    }

    public function setName($value)
    {
        $this->name_temp = $value;

    }



}