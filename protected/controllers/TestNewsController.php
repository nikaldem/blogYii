<?php

class TestNewsController extends Controller
{
    public function actionData()
    {
        $model = new Test;

        //print_r ($model->getData());

        //$output = $this->render("data", array("model" => $model),true);
        //print $output;
        $this->render("data", array("model" => $model),false);
    }

    public function actionIndex()
    {
        $model=new News;

        // uncomment the following code to enable ajax-based validation
        /*
        if(isset($_POST['ajax']) && $_POST['ajax']==='news-index-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
        */

        if(isset($_POST['News']))
        {
            $model->attributes=$_POST['News'];
            if($model->validate())
            {
                // form inputs are valid, do something here
                return;
            }
        }
        $this->render('index',array('model'=>$model));
    }

    public function actions()
    {
        return array(
            'rendertable' => array(
                'class' => 'application.actions.RendertableAction',
                'pageSize' => 25,
            )
        );

    }

    public function actionPath()
    {
        // webroot
        // application
        // ext (extensions)
        // system

        $path_app = Yii::getPathOfAlias('actions');

        print $path_app;


    }

    public function actionUrl()
    {
        //$url = new Url;
        $url = Yii::app()->url_test;
        print_r($url->getAlias());


    }

    public function actionVendor()
    {
        //Yii::import("application.vendors.*");

        $image = new Image;
        $image->renderImage();
    }

    public function actionFile()
    {
        $this->render("file");

    }




}