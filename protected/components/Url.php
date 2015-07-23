<?php


class Url extends CApplicationComponent
{
    /* public function init()
    {
        print "Инициализация ";

    } */


    public function getAlias()
    {

        return array("news" => '/index.php?view=news',
        "contact" => '/index.php?view=contact');
    }
}