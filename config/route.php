<?php
//路由模式
if(empty($_GET['c'])){
	$arr = explode('/',trim($_SERVER['REQUEST_URI'],'/'));
	$_GET['c'] = !empty($arr[0])?$arr[0]:'Index';
	$_GET['a'] = !empty($arr[1])?$arr[1]:'index';
	if(($cnt=count($arr))>2){
		for($i=2;$i<$cnt;$i+=2){
			$_GET[$arr[$i]] = $arr[$i+1];
		}
	}
}
//控制器
$_GET['c']=preg_match('/^[a-zA-Z0-9\.]+$/',$_GET['c'])?str_replace('.','\\',$_GET['c']):'Index';
//函数
$_GET['a'] = !empty($_GET['a'])?$_GET['a']:'index';