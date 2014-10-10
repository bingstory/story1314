<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$this->display();
    }

    public function c_upload(){ 
		// echo  111111;die;
		 
		$config = array( 
			'exts'          =>  array('jpg', 'gif', 'png', 'jpeg'), //允许上传的文件后缀 
			 'savePath'      =>  'News/', //保存路径
             'autoSub'       =>  true, //自动子目录保存文件
             'subName'       =>  array('date', 'Y-m-d'), //子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组
        );
		$upload = new \Think\Upload($config);
         //$info=$upload->upload() ;
         //p($info);die;
        // echo $info['upfile']['savepath'].$info['upfile']['savename'];die;
        if($info=$upload->upload() ){ 
        	echo json_encode(array(
                   'url'=> $info['upfile']['savepath'].$info['upfile']['savename'],
                   'title' => htmlspecialchars($_POST['pictitle'], ENT_QUOTES),
                   'original' => $info['upfile']['name'],
                   'state' => 'SUCCESS',
        		));
 
		
        }else{
        	echo json_encode($upload->getError());
        }
		/**
     * 向浏览器返回数据json数据
     * {
     *   'url'      :'a.jpg',   //保存后的文件路径
     *   'title'    :'hello',   //文件描述，对图片来说在前端会添加到title属性上
     *   'original' :'b.jpg',   //原始文件名
     *   'state'    :'SUCCESS'  //上传状态，成功时返回SUCCESS,其他任何值将原样返回至图片上传框中
     * }
     */
	}
}