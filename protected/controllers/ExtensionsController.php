<?php

class ExtensionsController extends Controller
{
    public function actionIndex()
    {
        /*$file = Yii::app()->file->set("webroot.upload",true);// Создание папки в корневом каталоге
        $file->CreateDir();*/

        $path = Yii::getPathOfAlias("webroot");
        $myfile = Yii::app()->file->set($path .'/dependency.txt',true);
        //var_dump($myfile);

        print $myfile->size . "<br>";
        print $myfile->timeModified;

    }


    public function actionFancy()
    {
        $this->render("fancy");

    }


    public function actionMyWidget()
    {
        $this->render("mywidget");

    }

}