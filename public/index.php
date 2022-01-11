<?php
require __DIR__.'/../boot.php';
$fn = APP_PATH. "/app/controller/{$_GET['c']}.php";
if(file_exists($fn)){
	require($fn);
	$class = "app\\controller\\{$_GET['c']}";
	call_user_func([(new $class),$_GET['a']]);
}else {
	echo "$class->{$_GET['a']} not exists";
}