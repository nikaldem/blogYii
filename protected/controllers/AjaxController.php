<?php

class AjaxController extends Controller
{
    public function actionIndex()
    {
        if(Yii::app()->request->isAjaxRequest)
        {
            print $_POST['name']."<br>".$_POST['tel'];

            Yii::app()->end();

        }

        $this->render("index");

    }

    public function actionDate()
    {
        print date("d-m-Y");


    }

    public function actionJq()
    {
        Yii::app()->clientScript->registerCoreScript("jquery");
        Yii::app()->clientScript->registerCoreScript("jquery.ui");

        $this->render("jq");
    }


    public function actionPackage()
    {
        Yii::app()->clientScript->registerPackage("mypackage");

        $this->render("package");

    }




}