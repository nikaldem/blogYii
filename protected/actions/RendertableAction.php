<?php

class RendertableAction extends CAction
{
    public $pageSize = 10;

    public function run(){

        //print "Выполнение action из папки action";
        //Yii::app()->controller->render("rendertable");
        Yii::app()->controller->render("application.actions.views.rendertable", array("pageSize" => $this->pageSize));

    }





}