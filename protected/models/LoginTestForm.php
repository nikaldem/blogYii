<?php

class LoginTestForm extends CFormModel
{
    public $email;
    public $password;

    public function rules()
    {
        return array(
        array('email,password', 'required'),
        array('password', 'auth')
        );
    }

    public function auth($attribute,$params)
    {
        if($this->email == 'admin@domain.com' && $this->password == '123') {

            return true;

        }else{

            $this->addError('password', "Некорректный логин или пароль");


        }

    }


}