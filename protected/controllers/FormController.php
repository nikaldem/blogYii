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

    public function actionRegister()
    {
        $model = new RegisterForm;

        if(Yii::app()->request->isPostRequest)
        {
            $model->attributes = $_POST['RegisterForm'];
            if($model->validate())
            {
                print "Зарегистрирован успешно";
            }

        }


        $this->render("register", array("model" => $model));

    }

    public function actionLogin()
    {
        $model = new LoginTestForm;

        if(Yii::app()->request->isPostRequest)
        {
            $model->attributes = $_POST['LoginTestForm'];
            if($model->validate())
            {
                print "Авторизован успешно";
            }

        }

        $this->render("login",array("model" => $model));

    }


    public function actionContactconstruct()
    {
        $model = new ContactTestForm;
        $form = new CForm("application.views.formconstruct.contactbuilder",$model);

        //if($form->submitted('contact') && $form->validate()) ???????????????????????????
        if($form->submitted('contact'))
        {
            print "Отправлено удачно";

        }

        $this->render("contactconstruct",array('form' => $form));

    }

    public function actionLoginconstruct()
    {
        $model = new LoginTestForm;
        $form = new CForm("application.views.formconstruct.loginbuilder",$model);

        //if($form->submitted('login') && $form->validate()) //???????????????????????????
        if($form->submitted('login'))
        {
            print "Авторизован удачно";

        }

        $this->render("loginconstruct",array('form' => $form));

    }

    public function actionRegisterconstruct()
    {
        $model = new RegisterTestForm;
        $form = new CForm("application.views.formconstruct.registerbuilder",$model);

        if($form->submitted('register') && $form->validate()) //???????????????????????????
        //if($form->submitted('contact') && $form->validate())
        //if($form->submitted('register'))
        {
            print "Зарегистрирован удачно";

        }

        $this->render("registerconstruct",array('form' => $form));

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