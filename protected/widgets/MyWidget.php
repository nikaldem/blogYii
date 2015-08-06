<?php

class MyWidget extends CWidget
{
    public $header;

    public function init()
    {
        if(!$this->header)
        {
            $this->header = "Заголовок моего Widget";

        }

    }

    public function run()
    {
        $model = User::model()->findAll();

        $this->render("index",array("model" => $model, "header"=>$this->header));



    }


}