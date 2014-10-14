<?php 
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller{
	// 注册 表单处理
	public function doRegister(){ 
		
        $data = array(
			'email'    => I('email'),
			'password' => I('password','','md5'),
			'regtime'  => time(),
			'loginip'  => get_client_ip()
        	);
        $email = I('email');
        $check = M('user')->where(array('email'=>$email))->find();
        if(!$check){
	        if(M('user')->add($data)){
	        	$this->redirect(MODULE_NAME.'/Index/index');
	        }
        }else{
        	$this->error('邮箱已注册');
        }
	}

	public function login(){
       $this->display();
	}

	public function doLogin(){
		$email      = I('email');
		$password   = I('password','','md5'); 
		$db = M('user');
		$checkEmail = $db->where(array('email'=>$email))->find();
		$checkAll   = $db->where(array('email'=>$email,'password'=>$password))->find();

		if(!$checkEmail){
			$this->error('邮箱不存在');
		}else{
			if(!$checkAll){
				$this->error('密码不正确');
			}
		}
		// 保存当次登录信息
		$data = array(
			'id'        => $checkAll['id'],
			'logintime' => time(),
			'loginip'   => get_client_ip()
			);
		$db->save($data);

		// 将登录信息保存到session
		session('uid',$checkAll['id']);
		session('email',$checkAll['email']);
		session('logintime',date('Y-m-d H:i:s',$checkAll['logintime']));
		session('loginip',$checkAll['loginip']);
        
        redirect(__MODULE__);  
	}

	// 退出登录
	public function logout(){ 
		session_unset();    // frees all session variables
		session_destroy();  // destroys all of the data associated with the current session
		echo "<script> location.href='".$_SERVER['HTTP_REFERER']."';</script>";  // 跳转回一页
	}
}

 ?>