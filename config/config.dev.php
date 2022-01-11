<?php
namespace lessok;
// 配置文件
class Config
{
	 //对称加密串
	private  $key="i5%e()|^&,\\"; 
	//PDO链接参数    
	private  $mysql = array (
		'dsn'=> 'mysql:host=s02;port=3306;dbname=zbian',
		'user'=>'yubing',
		'pass'=>'123qwe',
		'options'=>array(
		    \PDO::ATTR_ERRMODE=>\PDO::ERRMODE_EXCEPTION,
	      	\PDO::ATTR_TIMEOUT => 5,
		),
	);
	//memcache
	private $memcached = [ 
      'host' => '127.0.0.1',
      'port' => '11211'
    ];
	//redis
    private $redis=[
		'host' => '127.0.0.1',
        'port' => '6379',
		'auth'=>''
	];
	//获取类成员
	public static function get($key){
		$obj = new self();
		return $obj->$key;
   }
}

