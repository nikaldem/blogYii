<?php

class MyWidget extends CWidget
{
    public function run()
    {
        $model = User::model()->findAll();

        $this->render("index",array("model" => $model));



    }


}