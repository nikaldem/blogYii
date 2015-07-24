<?php

class DefaultController extends Controller
{
	public $layout = "main";

	public function actionIndex()
	{
		$this -> layout = "main2";

		$this->render('index');
	}
}