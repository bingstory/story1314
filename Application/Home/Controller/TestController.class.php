<?php 
namespace Home\Controller;
use Think\Controller;
class TestController extends Controller{
	//新闻列表
	public function index(){
		 
		$count = M('news')->count();
		$page = new \Think\Page($count,5); 
		$limit = $page->firstRow.','.$page->listRows; 
		$this->news = M('news')->order("pubtime desc")->where($where)->limit($limit)->select();
		// p($count);die;
		$this->page = $page->show();
		$this->pagecount = $count/$page->listRows; 
		$this->display(); 
	}

	public function show(){
		$this->banner = M('banner')->where(array('city_id'=>C('CITY_ID'),'type'=>'news'))->find();
		$id = I('id');
		$this->activity = M('news')->find($id); 
		$cate_id = $this->activity['cate_id'];
		// p($cate_id);die;
		if($cate_id == 6){
           $this->btag = 'xwdt1';
           $this->navname = '新闻动态';
        }elseif($cate_id == 11){
           $this->btag = 'jzzn1';
           $this->navname = '家装指南';
        }else{
           $this->btag = 'mtbd1';
           $this->navname = '媒体报道';
        }
		$this->display();
    
	}
        // 最新活动列表
		public function activity(){
			$this->banner = M('banner')->where(array('city_id'=>C('CITY_ID'),'type'=>'news'))->find();
			$this->btag = 'activity';
			$city_id = C('CITY_ID');
			$where = array('city_id'=>$city_id);
			$count = M('activity')->where($where)->count();
			$page = new \Think\Page($count,6);
			$limit = $page->firstRow.','.$page->listRows;
			$this->activity = M('activity')->where($where)->limit($limit)->order('pubtime desc')->select(); 
	        $this->page = $page->show();
	        $this->pagecount = $count/$page->listRows;
			$this->display();
		}
		
		// 最新活动 详细页
		public function actShow(){
			$this->banner = M('banner')->where(array('city_id'=>C('CITY_ID'),'type'=>'news'))->find();
			$this->btag = 'activity';
			$this->catename = '最新活动';
			$id = I('id');
			$this->activity = M('activity')->find($id);
			$this->display('show');
		}
}

?>