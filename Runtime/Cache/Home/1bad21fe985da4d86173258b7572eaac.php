<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<title>首页</title>
	<script src="/story1314/Public/static/refreshcode.js"></script>
	<script>var URL = <?php echo U(MODULE_NAME.'/Public/verify','','');?>;</script>

	<link href="/story1314/Public/static/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/story1314/Public/Home/css/style.css" rel="stylesheet">
    <script type="text/javascript" src="/story1314/Public/static/jquery-1.9.1.min.js"></script>
    <script src="/story1314/Public/static/bootstrap/js/bootstrap.min.js"></script>
</head>
<body> 
    <!-- 用来解决头部固定所带来的问题 -->
    <div class="container"><div class="row" style="height:52px;"></div></div>
    <!-- ==END== -->
    
    <!-- 头部 -->
	 <!-- 导航START --> 
 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
   <div class="container">
     <!-- 窄屏时右上角显示 --> 
     <div class="navbar-header">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
       <a class="navbar-brand" href="#">Story1314</a>
     </div>
     <!-- 窄屏时右上角显示 END--> 

     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       <ul class="nav navbar-nav">
         <li class="active">
           <a href="/story1314/index.php/Home">首页</a>
         </li>
         <li>
           <a href="#">家人</a>
         </li>
         <li>
           <a href="#">朋友</a>
         </li>
         <li>
           <a href="#">同学</a>
         </li>
         <li>
           <a href="#"></a>
         </li>
         <li>
           <a href="#"></a>
         </li>
         <li>
           <a href="#"></a>
         </li>

       </ul>

       <ul class="nav navbar-nav navbar-right">
         <?php if($_SESSION['uid']): ?><li>
             <a>
               <?php echo $_SESSION['email']; ?></a>
           </li>
           <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown">
               <span class="glyphicon glyphicon-asterisk"></span>
             </a>
             <ul class="dropdown-menu" role="menu">
               <li>
                 <a href="#">Action</a>
               </li>
               <li>
                 <a href="#">Another</a>
               </li>
               <li>
                 <a href="#">Somethinge</a>
               </li>
               <li class="divider"></li>
               <li>
                 <a href="#">Separate</a>
               </li>
               <li class="divider"></li>
               <li>
                 <a href="<?php echo U(MODULE_NAME.'/User/logout');?>">退出</a>
               </li>
             </ul>
           </li>
         
         <?php else: ?> 
           <li>
             <a href="<?php echo U(MODULE_NAME.'/User/login');?>" class="nav navbar-nav">登录</a>
             <a href="<?php echo U(MODULE_NAME.'/User/login');?>" class="nav navbar-nav">注册</a>
           </li><?php endif; ?>
       </ul>
     </div>
     <!-- /.navbar-collapse --> </div>
   <!-- /.container-fluid --> </nav>
 <!-- 导航END --> 
	<!-- /头部 -->
	
	<!-- 主体 -->
	
	<div class="container">

		<div class="row">
			<div class="col-md-2 grayborder">骑着脚踏车穿行在光滑的马路上，一阵笑声带着一股清香从小路传来。骑着脚踏车穿行在光滑的马路上，一阵笑声带着一股清香从小路传来。骑着脚踏车穿行在光滑的马路上，一阵笑声带着一股清香从小路传来。骑着脚踏车穿行在光滑的马路上，一阵笑声带着一股清香从小路传来。骑着脚踏车穿行在光滑的马路上，一阵笑声带着一股清香从小路传来。骑着脚踏车穿行在光滑的马路上，一阵笑声带着一股清香从小路传来。骑着脚踏车穿行在光滑的马路上，一阵笑声带着一股清香从小路传来。骑着脚踏车穿行在光滑的马路上，一阵笑声带着一股清香从小路传来。骑着脚踏车穿行在光滑的马路上，一阵笑声带着一股清香从小路传来。骑着脚踏车穿行在光滑的马路上，一阵笑声带着一股清香从小路传来。骑着脚踏车穿行在光滑的马路上，一阵笑声带着一股清香从小路传来。骑着脚踏车穿行在光滑的马路上，一阵笑声带着一股清香从小路传来。</div>
			<div class="col-md-10 grayborder">
				<span>添加人物</span>
				<form action="" role="form" class="form-horizontal">
					<div class="form-group">
						<label class="col-md-2 control-label" for="">姓名</label>
						<div class="col-md-2">
							<input type="text" class="form-control" id="" placeholder="姓名"></div>
					</div>

					<div class="form-group">
						<label class="col-md-2 control-label" for="">性别</label>
						<div class="col-md-10">
							<label class="radio-inline">
								<input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">男</label>
							<label class="radio-inline">
								<input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">女</label>
							<label class="radio-inline">
								<input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">其他</label>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label" for="">出生年月</label>
						 <div class="col-md-1">
						      <select>
								  <option>1991年</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								  <option>1991</option>
								   
								</select>
                         
						  </div>
						<div class="col-md-1">
						<select> 
							    <option>1月份</option>
								  <option>2月份</option> 
								  <option>3月份</option> 
								  <option>4月份</option> 
								  <option>5月份</option> 
								  <option>6月份</option> 
								  <option>7月份</option> 
								  <option>8月份</option> 
								  <option>9月份</option> 
								  <option>10月份</option> 
								  <option>11月份</option> 
								  <option>12月份</option>  
								</select>
							</div>
						<div class="col-md-1">
							<select> 
							      <option>1日</option>
								  <option>2日</option> 
								  <option>3日</option> 
								  <option>4日</option> 
								  <option>5日</option> 
								  <option>6日</option> 
								  <option>7日</option> 
								  <option>8日</option> 
								  <option>9日</option> 
								  <option>10日</option> 
								  <option>11日</option> 
								  <option>12日</option>
								  <option>13日</option> 
								  <option>14日</option> 
								  <option>15日</option> 
								  <option>16日</option> 
								  <option>17日</option> 
								  <option>18日</option> 
								  <option>19日</option>  
								  <option>20日</option>  
								  <option>21日</option>
								  <option>22日</option> 
								  <option>23日</option> 
								  <option>24日</option> 
								  <option>25日</option> 
								  <option>26日</option> 
								  <option>27日</option> 
								  <option>28日</option> 
								  <option>29日</option> 
								  <option>30日</option> 
								  <option>31日</option> 
								</select>
							</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label" for="">是否在世</label>
						<div class="col-md-10">
							<label class="radio-inline">
								<input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">活着</label>
							<label class="radio-inline">
								<input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">故人</label>
						</div>
					</div>
				    <div class="form-group">
							<label class="col-md-2 control-label" for="">头像</label>
							<div class="col-md-10">
								<img src="/story1314/Public/static/images/2.png" alt="..." class="img-rounded" width="92" height="92"> 
						</div>
					<div class="form-group">
							<label class="col-md-2 control-label" for="">人物封面</label>
							<div class="col-md-10">
								<img src="/story1314/Public/static/images/2.png" alt="..." class="img-rounded" width="752" height="192"> 
						</div>
					<div class="form-group">
							<label class="col-md-2 control-label" for="">人物简介</label>
							<div class="col-md-6">
								<textarea class="form-control" rows="5"></textarea>
						</div>
					</div>
						<div class="form-group">
							<label class="col-md-1 control-label" for=""></label>
							<div class="col-md-6">
								<button type="submit" class="btn btn-primary">提交</button>
						</div>
                    
					</form>

				</div>
			</div>
		</div>
	
	<!-- /主体 -->

	<!-- 底部 -->
	<!--  -->
	<!-- /底部 --> 
</body>
</html>