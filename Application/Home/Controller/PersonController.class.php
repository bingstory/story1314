<?php 
namespace Home\Controller;
use Think\Controller;
class PersonController extends Controller{
	// 人物列表
	public function index(){
		$this->display();
	}

	// 添加人物
	public function addPerson(){
		$this->display();
	}

	// 添加人物 表单处理
	public function doAddPerson(){
		$data = array();
	}
}
