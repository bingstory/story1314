<?php 
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller{
	// 注册 表单处理
	public function doRegister(){ 
		
        $data = array(
			'email'     => I('email'),
			'password'  => I('password'),
			'regtime' => time(),
			'loginip'   => get_client_ip()
        	);
        if(M('user')->add($data)){
        	$this->redirect(MODULE_NAME.'/Index/index');
        }
	}

	public function login(){
       $this->display();
	}

	public function doLogin(){
		
	}
}

 ?>