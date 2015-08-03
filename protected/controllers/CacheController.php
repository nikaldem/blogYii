<?php

class CacheController extends Controller
{
    public function filters()
    {
        return array(
            array(
                'COutputCache',
                'duration' => 5000,

            )

        );


    }


    public function actionIndex()
    {

        //$cache = Yii::app()->cache->set("cache1", "Привет кэш !!!"); //Установили кэш

        /*$path = Yii::getPathOfAlias("webroot")."/dependency.txt";

        $dependency = new CFileCacheDependency($path);

        $content = file_get_contents($path);

        $cache = Yii::app()->cache->set("cache1",$content,300,$dependency);

        print Yii::app()->cache->get("cache1");*/



        /*Yii::app()->cache->flush();  //Кеш базы данных

        $db = Yii::app()->db;

        $dependency = new CFileCacheDependency("selct max(id) from tbl_user");

        $result = $db->cache(1000,$dependency)->createCommand("select email,username from tbl_user")->queryAll();

        foreach($result as $row)
        {
            print $row['email']. " -- ".$row['username']."<br>";
        }*/


    }


    public function actionPage()
    {
        $this->render("page");

    }


}