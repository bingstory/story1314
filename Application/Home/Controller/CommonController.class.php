<?php 
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller{
	public function c_upload(){ 
		$upload = new \Think\Upload();
		$upload->exts = array('jpg', 'gif', 'png', 'jpeg');
		$upload->savePath = '';
		$upload->autoSub = true;
		$upload->subName = array('date', 'Y-m-d');
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