<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>透明化</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link href="/Qh_tpc/public/admin/css/css.css" rel="stylesheet" type="text/css"/>	
    <link href="/Qh_tpc/public/admin/css/table.css" rel="stylesheet" type="text/css"/>     
    
</head>
<body >
<header>
<!-- 头部 -->
<div class="header-BOX">
	<div class="h-logo"><img src="/Qh_tpc/public/admin/image/h-logo.jpg"/></div>
	<div class="h-con">
		<div class="h-title">您当前的位置：
		<?php if($titleName){ ?>
		<span><?php echo $titleName;?></span>
		<?php }else{ ?>
		<span>????</span>
		<?php } ?></div>
		<ul class="h-nav">
			
			<li class="warning"></li>
		</ul>
	</div>
</div>
<script src="/Qh_tpc/public/admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script >
$('.h-nav li').click(function(){


	location.href="";
})

</script> 
</header>

<div class="mainBox">
	<div class="menu">
		<!-- 左侧目录 -->
		
	<div class="leftsidebar_box">
		
		<dl class="home">
			<dt >财富中心</dt>
			
		</dl>
	
		<dl class="results-situation">
			<dt >业绩情况</dt>
			
		</dl>
		<dl class="receivable-situation">
			<dt >回款情况</dt>
			
		</dl>
		<dl class="project-situation">
			<dt >项目情况</dt>
		</dl>
		
		
		<dl class="department-situation">
			<dt >部门情况</dt>
		</dl>
		<!--<dl class="pro-details">
			<dt >项目列表</dt>
		</dl>
		<dl class="pre_sale_list">
			<dt >售前列表</dt>
		</dl>-->
		
		<dl class="set-up">
			<dt >其它设置<img src="/Qh_tpc/public/admin/image/select_xl01.png"></dt>
			<dd class="target"><a href="set_target.html">业绩目标</a></dd>
			<!--<dd class="custom-Per-list"><a href="per_list.html">人员列表</a></dd>-->
			<!--<dd class="Pos-management"><a href="Pos_management.html">职位管理</a></dd>-->
			<dd class="information"><a href="Information_added_import.html">补充导入</a></dd>
		</dl>
	</div>

<script src="/Qh_tpc/public/admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>
	<!-- 左侧目录 jq-->
<script type="text/javascript">

	$('.home dt').click(function(){
		location.href = "index.html"
	});
	$('.results-situation dt').click(function(){
		location.href = "results_project.html"
	});
	$('.receivable-situation dt').click(function(){
		//location.href = "receivable.html"
		location.href = "project.html"
	});
	$('.project-situation dt').click(function(){
		location.href = "receivable_project.html"
	});
   $('.custom-pre-sale dt').click(function(){
		location.href = "pre_sale_chart.html"
	});
     $('.department-situation dt').click(function(){
		location.href = "department.html"
	});
  	$('.pro-details dt').click(function(){
		location.href = "project.html"
	});
    $('.pre_sale_list dt').click(function(){
		location.href = "pre_sale_list.html"
	});
	


</script>


	</div>
	<div class="main">
     <div class="target-con">
       <p>请选择公司</p>
       <p><select id='com'><option value=1 >沈阳分公司</option><option value=2 >广州分公司</option><option value=3 >北京分公司</option><option value=4 >上海分公司</option><option value=5 >大连分公司</option></select></p>
       <p>请填写目标年份</p>
       <p><input id='year' onblur="check_year(this)"/></p>
       <p>请填写目标金额</p>
       <p><input id='money' onblur="check_money(this)"/></p>
     </div>
     <input type="button" value="提交" id='add_ok' class="target-btn"/>
	</div>
</div>


  <input type="hidden" id="add_target" value="<?php echo U('Admin/Project/addComTatgetInfo');?>"/>

<script src="/Qh_tpc/public/admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>

<!-- 左侧目录 jq-->
<script type="text/javascript">
$(".leftsidebar_box dt").css({"background-color":"#4f5051"});
$(".leftsidebar_box dt img").attr("src","/Qh_tpc/public/admin/image/select_xl01.png");
$(function(){
    $('.main').css('min-height',$(window).height()-45);
    $(".leftsidebar_box dd").hide();
    $(".leftsidebar_box dt").click(function(){
        $(".leftsidebar_box dt").css({"background-color":"#4f5051"})
        $(".leftsidebar_box dt").css({"color":"white"})
        $(this).css({"background-color": "#333"});
        
        $(this).parent().find('dd').removeClass("menu_chioce");
        $(".leftsidebar_box dt img").attr("src","/Qh_tpc/public/admin/image/select_xl01.png");
        $(this).parent().find('img').attr("src","/Qh_tpc/public/admin/image/select_xl.png");
        $(".menu_chioce").slideUp(); 
        $(this).parent().find('dd').slideToggle();
        $(this).parent().find('dd').addClass("menu_chioce");
    });
});
$(function(){
$('.set-up dt').css('background-color','#4f5051');
$('.set-up').find('.target').css('background-color','#333')
$(this).find('dd').show();
});


$('#add_ok').click(function(){
	var url=$('#add_target').val();
	var c_id=$('#com').val();
	var c_year=$('#year').val();
	var d_money=$('#money').val();
	var info = "c_id="+c_id+"&c_year="+c_year+"&d_money="+d_money;
	 $.post(url,info,function(data){
		  if(data==1){
			  alert('新建成功');
			  window.location.href=window.location.href;
		  }else if(data==2){
			  alert('新建失败,该公司该年份目标已经设置');
			 // $('#np-esc').click();
		  }else if(data==3){
			  alert('新建失败,您没有此权限');
		  }else{
			  alert('新建失败');
		  }
	  },'json');
});


//检验年份为四位数字数字
function check_year(obj){
	
	//var re = /^[0-9]+[0-9]+.*$/;   //判断字符串是否为数字     //判断正整数 /^[1-9]+[0-9]*]*$/  
	var re=/^\d{4}$/;
    var number = $(obj).val();
   
    if (!re.test(number))
   {
       alert("请输入四位数字");
       $(obj).val('');
       return false;
    }

}

//检验金额为数字
function check_money(obj){
	
	var re = /^[0-9]+[0-9]+.*$/;   //判断字符串是否为数字     //判断正整数 /^[1-9]+[0-9]*]*$/  
	//var re=/^\d{4}$/;
    var number = $(obj).val();
   
    if (!re.test(number))
   {
       alert("请输入数字");
       $(obj).val('');
       return false;
    }

}




</script>
</body>
</html>