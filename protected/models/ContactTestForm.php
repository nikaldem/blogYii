<?php

class ContactTestForm extends CFormModel
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;

    // функция проверка валидации следующих полей формы
    public function rules()
    {
        return array(
            // name, email, subject, body поля обязательные для заполнения
            array('name, email, subject, body', 'required'),
            // проверка на валидацию email адреса
            array('email', 'email'),
            array('name', 'safe'),
            // проверка на правильность ввода verifyCode
            array('verifyCode', 'captcha', 'allowEmpty' => !CCaptcha::checkRequirements()),

        );

    }


    public function attributeLabels()
    {
        return array(
            'name' => 'Name',
            'email' => 'Email',
            'subject' => 'Subject',
            'body' => 'Body',

        );



    }





}