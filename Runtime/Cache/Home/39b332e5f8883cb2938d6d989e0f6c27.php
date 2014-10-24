<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
  <title>首页</title>
  <script src="/story1314/Public/static/refreshcode.js"></script>
  <script>
  var URL = <?php echo U(MODULE_NAME.'/Public/verify','','');?>;
  $(function(){

  });
  </script>
  <style>
  #content{
  	height: 200px;
  }
  </style>
  
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
     <div class="row redborder" id="content">
        <div class="col-md-3 blueborder"></div>
        <div class="col-md-3 blueborder"></div>
        <div class="col-md-3 blueborder"></div>
        <div class="col-md-3 blueborder"></div>
     </div>
 </div>

	<!-- /主体 -->

	<!-- 底部 -->
	<!--  -->
	<!-- /底部 --> 
</body>
</html>