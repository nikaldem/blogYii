<?php

class TestCommand extends CConsoleCommand
{
    /*public function run($args)
    {
        print_r($args);


    }*/

    public function actionIndex($id,$name)
    {
        print $id . ' ' . $name;
    }

    public function actionType(array $types)
    {
        print_r($types);


    }

}