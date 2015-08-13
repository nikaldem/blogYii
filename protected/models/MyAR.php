<?php

class MyAR extends CActiveRecord
{
    public function getDbConnection()
    {
        if(Yii_DEBUG)
        {
            return Yii::app()->db3;
        }

        return Yii::app()->db;

    }

}