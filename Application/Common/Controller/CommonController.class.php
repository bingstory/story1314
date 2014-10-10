<?php 
namespace Common\Controller;
use Think\Contorller;
class CommonController{
	public function verify(){
		$Verify = new \Think\Verify();
    	$Verify->fontSize = 13;
    	$Verify->length   = 4;
    	$Verify->imageW   = 90;
    	$Verify->imageH   = 30;
    	$Verify->useNoise = false;
    	$Verify->useCurve = false;
    	$Verify->entry();
	}
}