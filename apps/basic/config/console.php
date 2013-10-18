<?php
$params = require(__DIR__ . '/params.php');
return array(
	'id' => 'bootstrap-console',
	'basePath' => dirname(__DIR__),
	'preload' => array('log'),
	'controllerPath' => dirname(__DIR__) . '/commands',
	'controllerNamespace' => 'app\commands',
	'modules' => array(
	),
	'components' => array(
		'cache' => array(
			'class' => 'yii\caching\FileCache',
		),
		'log' => array(
			'targets' => array(
				array(
					'class' => 'yii\log\FileTarget',
					'levels' => array('error', 'warning'),
				),
			),
		),
	),
	'params' => $params,
);
