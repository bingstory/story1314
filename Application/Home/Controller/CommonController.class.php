<?php 
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller{
	public function _initialize(){
		// p(session());die;
         $uid = session('uid');
         // $this->global_userinfo = M('user')->find($uid);
    }

}