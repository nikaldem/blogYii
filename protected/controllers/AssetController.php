<?php

class AssetController extends Controller
{
    public function actionIndex()
    {
        $path = Yii::getPathOfAlias("application.frontend");
        $asset = Yii::app()->assetManager->publish($path);

        //Yii::app()->clientScript->registerScriptFile($asset."/js/main.js",CClientScript::POS_BEGIN);
        Yii::app()->clientScript->registerScriptFile($asset."/js/main.js",CClientScript::POS_END);
        //Yii::app()->clientScript->registerScriptFile($asset."/css/style.css",CClientScript::POS_BEGIN);
        Yii::app()->clientScript->registerScriptFile($asset."/css/style.css");

        //print $asset;
        //$this->render("index",array("asset" => $asset));
        $this->render("index");


    }




}