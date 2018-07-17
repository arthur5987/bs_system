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

<input type="hidden" id="session_destroy" value="<?php echo U('Admin/Public/out');?>"/>

<script src="/Qh_tpc/public/admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script >

$('.h-nav li').click(function(){

	var url=$('#session_destroy').val();
	//alert(url);
	$.get(url,function(data){
		//alert(data);
		if(data){
			location.href="/Qh_tpc/index.php/Admin/Public/login.html";
		}else{
			alert('出错啦！');
		}
	},'json');
	
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
	<div class="main" >
        
        <!-- 业绩、产值、回款、费用 -->
            <div class="idx-resultsBox">
                <p>公司预警信息</p>
                <!-- 业绩 -->
                <div class="results">                   
                        <div class="container1">
                            <div id="sample_goal1"></div>
                        </div>
                        <p>业绩&nbsp;￥326,123,107</p>
                </div> 
                <!-- 产值 -->
                <div class="output-value">
                      <div class="container2">
                            <div id="sample_goal2"></div>
                        </div>
                        <p>产值&nbsp;￥326,123,107</p>
                </div> 
                <!-- 回款 -->
                <div class="receivable">
                        <div class="container3">
                            <div id="sample_goal3"></div>
                        </div>
                        <p>回款&nbsp;￥326,123,107</p>
                    
                </div> 
                <!-- 费用 -->
                <div class="cost">
                    <div class="container4">
                            <div id="sample_goal4"></div>
                        </div>
                        <p>费用&nbsp;￥326,123,107</p>
                </div>                   
            </div>
            <div class="idx-Operation-analysis">
                <p>公司整体运营分析</p>
                <div class="ioa-box">
                    <div class="ioa-con">
                        <div class="ioa-con-title"> 
                            <p>业绩情况</p>
                            <a href="results.html">查看详情 >></a>
                        </div>
                        <div id="results-list" style="height:170px;margin-top:8px;"></div>
                    </div>
                    <div class="ioa-con">
                        <div class="ioa-con-title"> 
                            <p>回款情况</p>
                            <a href="receivable.html">查看详情 >></a>  
                        </div>
                         <div id="receivable-list" style="height:170px;margin-top:8px;"></div>
                    </div>
                    <div class="ioa-con">
                        <div class="ioa-con-title"> 
                            <p>项目情况</p>
                            <a href="project_situation.html">查看详情 >></a>  
                        </div>
                        <div id="project-list" style="height:170px;margin-top:8px;"></div>
                    </div>  
                    <div class="ioa-con">
                        <div class="ioa-con-title"> 
                            <p>费用情况</p>
                            <a href="cost.html">查看详情 >></a>  
                        </div>
                        <div id="cost-list" style="height:170px;margin-top:8px;"></div>
                    </div>
                    <div class="ioa-con">
                        <div class="ioa-con-title"> 
                            <p>售前情况</p>
                            <a href="pre_sale_chart.html">查看详情 >></a>  
                        </div>
                        <div id="pre-sale-list" style="height:170px;margin-top:8px;"></div>
                    </div>
                  
                    <div class="ioa-con">
                        <div class="ioa-con-title"> 
                            <p>部门情况</p>
                            <a href="department.html">查看详情 >></a>  
                        </div>
                        <div id="department-list" style="height:170px;margin-top:8px;"></div>
                    </div>
                </div>
            </div>
       
	</div>
</div>

<script src="/Qh_tpc/public/admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="/Qh_tpc/public/admin/js/index.js"></script>
<script src="/Qh_tpc/public/admin/js/highcharts.js"></script>
<script src="/Qh_tpc/public/admin/js/goalProgress.js"></script>

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
$('.home').find('dt').css('background-color','#333')

});
</script>




</body>
</html>