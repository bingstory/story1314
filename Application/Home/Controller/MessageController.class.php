<?php
namespace Home\Controller;
use Think\Controller;
class MessageController extends Controller{
   
    function index(){
        $this->display();   
    }
   
    function add(){
        //ajaxReturn(数据,'提示信息',状态)   
        $m=M('message');
        if($m->add($_GET)){
            $this->ajaxReturn($_GET,'添加信息成功',1);
        }else{
            $this->ajaxReturn(0,'添加信息失败',0);   
        }
    }
 
    

}
