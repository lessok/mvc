<?php
// 定义常量APP_PATH(根目录:绝对路径)
define('APP_PATH', dirname(__FILE__));
//require '/data/www/vendor/autoload.php';
require APP_PATH.'/config/config.dev.php';
require APP_PATH.'/config/route.php';

spl_autoload_register(function($class){
	$class = trim($class,'/,\\');
	if(strncmp($class,'app\\',4)==0){
		$fn = APP_PATH. '/'.$class.'.php';
		if(is_file($fn)){
			require ($fn);
		}
	}
});

