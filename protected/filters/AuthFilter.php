<?php

class AuthFilter extends CFilter
{
    protected function preFilter($filterChain)
    {
        if(Yii::app()->user->isGuest)
        {
            print "Вы не авторизовались!!!";

            return false;

        }else {
            return true;
        }

    }

    protected function postFilter($filterChain)
    {
        if(!Yii::app()->user->isGuest)
        {
            print "Успешно авторизовались";

        }
    return true;
    }




}