<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller{
    // 生成验证码图片
	public function verify($fontSize = 15,$length = 4,$imageW = 110,$imageH = 33, $useNoise = false,$useCurve = false){
		$Verify = new \Think\Verify();
    	$Verify->fontSize = $fontSize;
    	$Verify->length   = $length;
    	$Verify->imageW   = $imageW;
    	$Verify->imageH   = $imageH;
    	$Verify->useNoise = $useNoise;
    	$Verify->useCurve = $useCurve;
    	$Verify->entry();
	}

    // 验证码 验证
    public function checkCode(){
        $code = I('code');
        $verify = new \Think\Verify();
        if($verify->check($code) != 1){
           return 0;
        }else{
           return 1;
        }
    }
}
