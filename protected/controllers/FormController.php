<?php

class FormController extends Controller
{   // Подключение action CAPTCHA (скопировали из SiteControllet.php)
    public function actions()
    {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha'=>array(
                'class'=>'CCaptchaAction',
                'backColor'=>0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            //'page'=>array(
            //    'class'=>'CViewAction',
            //),
        );
    }


    //public function actionLogin()
    public function actionContact()
    {

        $model = new ContactTestForm;

        if(Yii::app()->request->isPostRequest)
        {
            $model->attributes = $_POST['ContactTestForm'];

            if ($model->validate()) {
                print "Отправка выполнена успешно!";

            }

        }



        //$this->render("login", array('model' => $model));
        $this->render("contact", array('model' => $model));

    }

    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax'] === 'contact-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end;
        }
    }






}