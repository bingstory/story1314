<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller{
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
}
