<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
  <title>首页</title>
  <script src="/story1314/Public/static/refreshcode.js"></script>
  <script>
  var URL = <?php echo U(MODULE_NAME.'/Public/verify','','');?>;
  </script>
  
	<link href="/story1314/Public/static/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/story1314/Public/Home/css/style.css" rel="stylesheet">
    <script type="text/javascript" src="/story1314/Public/static/jquery-1.9.1.min.js"></script>
    <script src="/story1314/Public/static/bootstrap/js/bootstrap.min.js"></script>
</head>
<body> 
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
            <a href="#">首页</a>
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
          <li>
            <!-- <a href="" class="nav navbar-nav">登录/注册</a> -->
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li>
            <?php echo ($logininfo); ?>
          </li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
        </ul>
      </div>
      <!-- /.navbar-collapse --> </div>
    <!-- /.container-fluid --> </nav>
  <!-- 导航END -->
	<!-- /头部 -->
	
	<!-- 主体 -->
	
   
  <br>
  <br>
  <br>
  <br>
  <div class="container">
    <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
    Dropdown
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
    <li role="presentation" class="divider"></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
  </ul>
</div>
  </div>

	<!-- /主体 -->

	<!-- 底部 -->
	<!--  -->
	<!-- /底部 --> 
</body>
</html>