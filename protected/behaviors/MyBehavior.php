<?php

class MyBehavior extends CBehavior
{
    public $header;

    public function getDate()
    {
        return $this->header ." : ".date("d-m-Y");
    }

}