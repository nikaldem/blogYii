<?php

class GetsetController extends Controller
{
    public function actionIndex()
    {
        $model = new MyModel;
        $model->name = "Здравствуйте GetSet!!!";

        print $model->name;



    }




}