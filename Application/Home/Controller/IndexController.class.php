<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $uid = session('uid');
        // p(session('email'));die;
        if(!isset($uid)){
            $this->logininfo = '<a href="" class="">登录/注册</a>';
        }else{
            $this->logininfo = '<a href="" class="">'.session('email').'</a>';
        }
    	$this->display();
    }


}