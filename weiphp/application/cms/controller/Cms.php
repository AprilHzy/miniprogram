<?php

namespace app\cms\controller;
use app\common\controller\WebBase;

//PC运营管理端的控制器
class Cms extends WebBase{
	function getList(){
		// set_time_limit(0);
		// sleep(10);
		$limit  = I('limit',10,'intval');
		$lastid = I('lastid',1,'intval');
		$list = M('cms') -> where( 'id','>=',$lastid ) -> order('id asc') -> field('id,title,img,cTime') -> limit(2) -> select();
		foreach ($list as &$vo) {
			$vo['img'] = get_cover_url($vo['img']);
			$vo['cTime'] = time_format($vo['cTime']);
		}
		// dump($list);
		$this -> ajaxReturn($list);
	}
	function getDetail(){
		$map['id'] = I('id',0,'intval');
		$info = M('cms') -> where($map) -> find();

		$info['img'] = get_cover_url($info['img']);
		$info['cTime'] = time_format($info['cTime']);

		// dump($info);
		$this -> ajaxReturn($info);
	}
}
