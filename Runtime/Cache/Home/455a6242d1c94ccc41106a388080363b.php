<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<script type="text/javascript" src="/s/Public/static/jquery-1.6.2.min.js"></script>
<script type="text/javascript">
    $(function(){ 
        $('input:button').click(function(){
            
            var $title=$('input[name="title"]').val();
            var $message=$('input[name="message"]').val(); 
            $mess=$('#mess');
            $.getJSON("<?php echo U(MODULE_NAME.'/Message/add','','');?>",{title:$title,message:$message},function(json){
                alert(json); 
                if(json.status==1){
                    $mess.slideDown(3000,function(){
                        $mess.css('display','block');   
                    }).html('标题为'+json.data.title+'信息为'+json.data.message);   
                }else{
                    $mess.slideDown(3000,function(){
                        $mess.css('display','block');   
                    }).html('信息添加失败，请检查');   
                }       
            });
            // $.ajax({
            //     url: "<?php echo U(MODULE_NAME.'/Message/add','','');?>",
            //     type: 'GET', 
            //     data: {title:$title,message:$message},
            //     // dataType:'json',
            //     success:function(data){
            //     alert(data);
            //     if(status=='success'){
            //         $mess.slideDown(3000,function(){
            //             $mess.css('display','block');   
            //         }).html('标题为'+json.data.title+'信息为'+json.data.message);   
            //     }else{
            //         $mess.slideDown(3000,function(){
            //             $mess.css('display','block');   
            //         }).html('信息添加失败，请检查');   
            //     }  
            //     }     
            // });

            }); 
    });
</script>
</head>
<body>
<div style="display:none; color:red;" id="mess"></div>
<form action="" method="get">
  标题：<input type="text" name="title" /><br />
  信息：<input type="text" name="message" /><br />
       <input type="button" value="提交" />
</form>
</body>
</html>