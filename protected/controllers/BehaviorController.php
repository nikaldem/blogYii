<?php

class BehaviorController extends Controller
{
    public function behaviors()
    {
        return array(
          'my' => array(
            'class' => 'application.behaviors.MyBehavior',
            'header' => 'Новая дата',
          ),

        );

    }


    public function actionIndex()
    {
        //$this->attachBehavior("my","application.behaviors.MyBehavior");

        print $this->getDate();


    }





}