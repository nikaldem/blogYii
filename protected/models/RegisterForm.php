<?php

class RegisterForm extends CFormModel
{
    public $login;
    public $password;
    public $compare_password;
    public $email;
    public $gender;

    public function rules()
    {
        return array(
            array('login,password,email', 'required'),
            array('email', 'email'),
            array('password', 'compare', 'compareAttribute' => 'compare_password'),
            array('gender,compare_password', 'safe'),

        );

    }

    public function attributeLabels()
    {
        return array(
            'login' => 'Login',
            'password' => 'Password',
            'compare_password' => 'Compare_password',
            'email' => 'Email',
            'gender' => 'Gender',



        );




    }


}