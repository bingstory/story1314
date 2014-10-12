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
            <a href="" class="nav navbar-nav">登录/注册</a>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="" style="color:#FFF;">让历史记住我们的家庭！</a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse --> </div>
    <!-- /.container-fluid --> </nav>
  <!-- 导航END -->
	<!-- /头部 -->
	
	<!-- 主体 -->
	
  <!-- 背景图START -->
  <div id="Layer1" style="position:absolute; width:100%; height:100%; z-index:-1">
    <img src="/story1314/Public/Home/images/bg3.jpg" height="100%" width="100%"/>
  </div>
  <!-- 背景图END -->
  <br>
  <br>
  <br>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4 border">
      <div class="row">
        <ul id="myTab"  role="tablist" class="nav nav-tabs nav-justified">
          <li role="presentation" class="active" style="margin-left:0;">
            <a href="#login" data-toggle="tab">登录</a>
          </li>
          <li role="presentation">
            <a href="#register" data-toggle="tab">注册</a>
          </li> 
        </ul>
      </div>
        <div id="myTabContent" class="tab-content">
          <div class="tab-pane fade in active" id="login">
            <form role="form">
            <div class="row">
              <div class="form-group"> <input name="email" type="email" class="form-control" id="" placeholder="邮箱"></div>

              <div class="form-group"><input name="password" type="password" class="form-control" id="" placeholder="密码"></div>

              <div class="form-group">
                <div class="col-md-8 clearpaddingleft"><input name="code" type="text" class="form-control" id="" placeholder="验证码"></div>
                <div class="col-md-4"><a onclick="refresh-logincode()" href=""><img id="code-login" src="<?php echo U(MODULE_NAME.'/Public/verify',array('useNoise'=>'true','useCurve'=>'true'),'');?>" class=" " alt="验证码图片"></a></div>
              </div> 
            </div>
              <div class="row">
              <div class="form-group"><button type="submit" class="btn btn-info  btn-block">登录</button></div>
              </div>
            </form>
          </div>
          <div class="tab-pane fade" id="register">
            <form role="form" method="post" action="<?php echo U(MODULE_NAME.'/User/doRegister');?>">
            <div class="row">
              <div class="form-group"> <input name="eamil" type="email" class="form-control" id="" placeholder="邮箱"></div>

              <div class="form-group"><input name="password" type="password" class="form-control" id="" placeholder="密码"></div>

              <div class="form-group">
                <div class="col-md-8 clearpaddingleft"><input name="code" type="text" class="form-control" id="" placeholder="验证码"></div>
                <div class="col-md-4"><a onclick="refresh-registercode()" href=""><img id="code-register" src="<?php echo U(MODULE_NAME.'/Public/verify',array('useNoise'=>'true','useCurve'=>'true'),'');?>" class=" " alt="验证码图片"></a></div>
              </div> 
            </div>
              <div class="row">
              <div class="form-group"><button type="submit" class="btn btn-info  btn-block">注册</button></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

	<!-- /主体 -->

	<!-- 底部 -->
	<!--  -->
	<!-- /底部 --> 
</body>
</html>