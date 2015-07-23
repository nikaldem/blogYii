<?php


class Test extends CModel
{

    public $id;
    public $title;
    public $description;

    public function attributeNames()
    {
        return array();
    }

    public function getData()
    {
        return array(
        array("title" => "Новость 1", "description" => "Текст нашей 1 новости"),
        array("title" => "Новость 2", "description" => "Текст нашей 2 новости"),
        array("title" => "Новость 3", "description" => "Текст нашей 3 новости"),

        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'title' => 'Заголовок',
            'description' => 'Основной текст',
        );
    }
}