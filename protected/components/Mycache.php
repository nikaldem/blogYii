<?php

class Mycache extends CApplicationComponent implement ICache{

    private $data = array();

    public function get($id)
    {
        return $this->data[$id];
    }


    public function mget($ids)
    {
        return;
    }

    public function set($id,$value,$expire=0,$dependency=null)
    {
        $this->data[$id] = $value;

        return true;

    }

    public function add($id,$value,$expire=0,$dependency=null)
    {
        return;

    }

    public function delete($id)
    {
        unset($this->data[$id]);
    }

    public function flush()
    {
        $this->data = array();
    }




}
