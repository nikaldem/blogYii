<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.


Yii::setPathOfAlias("actions",dirname(__FILE__)."/../actions");

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	//'name'=>'Yii Blog Demo',
	'name'=>'Мое приложение',
	'language'=>'ru',
	//'theme' => 'mytheme',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.vendors.*',
		'application.widgets.*',
		'application.validators.*',

	),

	'modules' => array(
		'admin',
		'gii' => array(
			'class' => 'system.gii.GiiModule',
			'password' => '123456',
			// 'ipFilters' => array(...список IP...),
			// 'newFileMode' => 0666,
			// 'newDirMode' => 0777,
		)

	),

	'defaultController'=>'post',

	// application components
	'components'=>array(
		'enableCsrfValidation' => true,
		'enableCockieValidation' => true,

		'clientScript' => array(
			'packages' => array(
				'mypackage' => array(
					'baseUrl' => '/',
					'js' => array("/js/main.js","/js/main2.js","/js/main3.js"),
					'css' => array("/css/main.css","/css/main2.css","/css/main3.css"),
					'depends' => array("jquery"),
				),
			),
		),

		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),

		'url_test' => array(

			'class' => 'application.components.Url'
		),

		'cache' => array(
			'class' => 'CFileCache',

		),
		/*
		'cache1' => array(
			'class' => 'CFileCache',

		),

		'cache2' => array(
			'class' => 'CFileCache',

		),*/

		'file' => array(
			'class' => 'ext.file.CFile'
		),

		/*'db'=>array(
			'connectionString' => 'sqlite:protected/data/blog.db',
			'tablePrefix' => 'tbl_',
		),
		*/
		// uncomment the following to use a MySQL database

		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=blog',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'tablePrefix' => 'tbl_',
			'schemaCachingDuration' => 100,
			'enableProfiling' => true,
			'enableParamLogging' => true,
		),

		'db2'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=blog',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'tablePrefix' => 'tbl_',
			'schemaCachingDuration' => 100,
			'enableProfiling' => true,
			'enableParamLogging' => true,
		),

		'db3'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=blog',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'tablePrefix' => 'tbl_',
			'schemaCachingDuration' => 100,
			'enableProfiling' => true,
			'enableParamLogging' => true,
		),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName' => false,
			'rules'=>array(
				array(
					'class' => 'application.components.MyUrl',
				),
				'url_4648' => 'url/index',
				'post/<id:\d+>/<title:.*?>'=>'post/view',
				'posts/<tag:.*?>'=>'post/index',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
				//'about' => 'index.php/site/page?view=about',
			),
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
					),
				// uncomment the following to show log messages on web pages
				/*array(

					'class'=>'CProfileLogRoute',
					'levels'=>'profile',
					'enabled'=>true,
				),

				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>require(dirname(__FILE__).'/params.php'),
);