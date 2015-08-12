<?php

class DatabaseController extends Controller
{
    /* public function actionDao()
    {
        $connection = Yii::app()->db; // подключение к базе db

        // запрос для ДОБАВЛЕНИЯ данных
        /* $connection->createCommand("
                      insert into tbl_user set
                      username = 'test1',
                      password = '1234',
                      email = 'test1@domain.com',
                      name = 'Test1',
                      fname = 'Test1 Test1'
                      ")->execute(); */


        // запрос на ВЫБОРКУ данных
        /*$result = $connection->createCommand(
            "select username,email,active from tbl_user where active = 1 "
            )->queryAll();

         foreach($result as $data)
        {
            print $data['username']. " -- ".$data['email']. " -- ".$data['active']."<br>";

        } */


        // запрос на ВЫБОРКУ данных
        /* $result = $connection->createCommand(
            "select username,email,active from tbl_user where active = 1 "
        )->query();

        while(($data = $result->read()) !== false)
        {
            print $data['username']. " __ ".$data['email']. " __ ".$data['active']."<br>";

        } */


        // запрос на ВЫБОРКУ данных
        /*$result = $connection->createCommand(
            "select username,email,active from tbl_user where active = 1"
        )->queryRow();

            print $result['username']; */


        // запрос для ИЗМЕНЕНИЯ данных UPDATE
        /* $connection->createCommand("
                      update tbl_user set
                      username = 'test9',
                      password = '123456789',
                      email = 'test9@domain.com',
                      name = 'Test9',
                      fname = 'Test9 Test9'
                      where id = 3
                      ")->execute(); */

        /*
        $transaction = Yii::app()->db->beginTransaction;

        try{
        $model = new User;
        $model->username = "Test10";
        $model->password = $password;
        $model->name = $name;
        $model->fname = $fname;
        $model->save();

        $model = new User;
        $model->username = "Test12";
        $model->password = $password;
        $model->name = $name;
        $model->fname = $fname;
        $model->save();

        $transaction->commit(); // записываем переменные

        }catch(Exception $e)
        {
            $transaction->rollback();  // в случае неудачи ОТКАТЫВАЕМ на исходные позиции

        }
        */


    // Использование Актив Рекорд
    /*public function actionAr(){

        /*$model = User::model()->findAll('active = 0');

        foreach($model as $data)
        {
            print $data["username"] . "<br>";

        } */

        //$criteria = new CDbCriteria;
        /*$criteria->select = "username,email,now() as now";
        $criteria->condition = "active = 1";

        $data = User::model()->find($criteria);

        print $data->now; */

        /* $criteria->select = "username,email";
        $criteria->scopes = array("active","id");

        $model = User::model()->findAll($criteria);

        foreach($model as $data)
        {
            print $data['username'] . "<br>";


        } */

    //}

    public function actionProvider()
    {
        $dataProvider = new CActiveDataProvider("User",
            array(
                'pagination' => array('pageSize' => 1), //разбивка на страницы
                'criteria'=> array(
                    'condition' => 'active = 1',
                    'order' => 'id desc',
                ),
        ));

        $this->render("provider",array("dataProvider" => $dataProvider));

    }

    public function actionProfile()
    {
        $model = User::model()->findAll();

        foreach($model as $data)
        {
            print $data->email."<br>";
        }

    }

}

