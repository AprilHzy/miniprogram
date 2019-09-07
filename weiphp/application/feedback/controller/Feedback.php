<?php

namespace app\feedback\controller;
use app\common\controller\WebBase;

//PC运营管理端的控制器
class Feedback extends WebBase{
	public function addFeedback(){
		dump($_GET);
// DOEBZ-O3EAP-WF3DZ-LUAWG-DYEJS-BSFSK
		$data["username"] = I('username');
		$data["product"] = str_replace(array('"','[',']'),'',I('product'));
		$data["channel"] = I('channel');
		$data["area"] = str_replace(array('"','[',']'),'',I('area'));
		$data["score"] = I('score',0,'intval');
		$data["is_dev"] = I('is_dev') == 'true' ? 1: 0;
		$data['cTime'] = NOW_TIME;

		$res = M('feedback') -> insert($data);
		dump($res);
		echo intval($res);
	}
}
