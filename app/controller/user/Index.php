<?php
namespace app\controller\user;
class Index {
	public function index(){
		echo 'user->index'.json_encode($_GET);
	}

	public function info(){
		$m = new \app\model\User();
		$info = $m->info();
		echo json_encode($info);
	}

}