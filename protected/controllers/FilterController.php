<?php

class FilterController extends Controller
{
    public function filters()
    {
        return array(
            array(
                'application.filters.AuthFilter'
            ),
        );

    }


    public function actionIndex()
    {

        print "Я действую";
    }



}