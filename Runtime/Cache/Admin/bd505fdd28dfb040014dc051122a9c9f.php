<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="renderer" content="webkit" />
	<meta name="Description" content="">
	<meta name="Keywords" content="">
	<title>中国银行学习系统后台</title>
	<link rel="stylesheet" href="/bs_system/public/admin/css/bootstrap.css">
	<link rel="stylesheet" href="/bs_system/public/admin/css/branchmain.css">
	<!--script src="/bs_system/public/admin/js/lib/jquery.js" defer="defer"></script-->
	<script src="/bs_system/public/admin/js/lib/bootstrap.js" defer="defer"></script>
    <script src="/bs_system/public/admin/js/lib/doT.js" defer="defer"></script>
	<script src="/bs_system/public/admin/js/branchmain.js" defer="defer"></script>
</head>
<body>
	<!-- 头部 -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">中国银行学习系统后台</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="javascript:;" class="txt-identity">身份：分行管理员</a></li>
            <li><a href="javascript:;" class="link-modifypass js-modifypass">修改密码</a></li>
            <li><a href="#" class="link-logout" id="go_out">退出</a></li>
          </ul>
        </div>
      </div>
    </nav>
    
    
    <form method="post" id='export' action="<?php echo U('Admin/Index/export_fen_user');?>" enctype="multipart/form-data">				
	</form>
    
    
    <div class="container-fluid">
      <div class="row">
      	<div class="main">
           <div class="infobar">
                <span><?php echo $bank_name['me_name'];?></span>
                <span>注册人数：<?php echo $info['fen']['total'];?>人</span>
                <span>三级人员：<?php echo $info['fen']['lev_3'];?>人</span>
                <span>二级人员：<?php echo $info['fen']['lev_2'];?>人</span>
                <span>一级人员：<?php echo $info['fen']['lev_1'];?>人</span>
                <span>无级人员：<?php echo $info['fen']['lev_0'];?>人</span>
                
                <button id="DG_user" >人员导出</button>
                
            </div>
            
            	<table class="table table-hover table-bordered table-branchmain" id="table_list" data-url="<?php echo U('Admin/index/branchd_user_list_fen');?>">
        	
        	
					<thead>
					   <tr id='table_tr_name' style="cursor:default">
					    <th name='id'>编号</th>
					    <th name='position'>职位</th>
					    <th name='name'>姓名</th>
					    <th name='sex'>性别</th>
					    <th name='level'>级别</th>
					    <th name='type'>用户状态</th>
					    <th name='comm'>操作</th>
					  </tr>
				  </thead>
				  
				 
			    	<tbody id="tblData">  
			    	</tbody> 
            
                <!--thead>
                    <tr><th>编号</th><th>职位</th><th>姓名</th><th>性别</th><th>级别</th><th>状态</th><th>操作</th></tr>
                </thead>
                <tbody>
                    <tr data-id="1"><td>1</td><td>1</td><td>张三</td><td>男</td><td>3级</td><td>正常</td><td><a href="javascript:;" class="js-detail">详情</a></td></tr>
                </tbody-->
            </table>
            
           <ul class="pagination pull-right" id="pagination">
			
			</ul>
        </div>
      </div>
    </div>
    <!-- 弹层Modal 修改密码 -->
    <div class="modal fade" id="modal-modifypass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">修改密码</h4>
          </div>
          
          <!-- 保存通过表单提交，成功刷页 -->
          <form action="/bs_system/index.php/Admin/index/up_fen_pass" method="post">
              <div class="modal-body modal-draw">
                <table>
                    <tr><td width="35%">原密码：</td><td><input value="" name="pass_origin" type="text" class="form-control" required /></td></tr>
                    <tr><td>新密码：</td><td><input id="new_pass" value="" name="pass_new" type="text" class="form-control" onblur="check_repass(this)" required /></td></tr>
                    <tr><td>确认密码：</td><td><input id="quren_pass" value="" name="pass_sure" type="text" class="form-control" onblur="check_repass(this)" required /></td></tr>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="submit" class="btn btn-primary">保存</button>
              </div>
          </form>
          
        </div>
      </div>
    </div>
    <!-- 弹层Modal 分行员工详情-->
    <div class="modal fade" id="modal-bdetail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">详情</h4>
          </div>
          <div class="modal-body modal-draw clearfix">
            <table class="table table-hover pull-left table-user">
                <tr><th>姓名：</th><td>张三</td><td></td></tr>
                <tr><th>性别：</th><td>男</td><td></td></tr>
                <tr><th>职位：</th><td>1</td><td></td></tr>
                <tr><th>级别：</th><td>3级</td><td></td></tr>
                <tr><th>考试次数：</th><td>3次</td><td></td></tr>
                <tr><th>用户状态：</th><td colspan="2">注册<button type="button" class="btn btn-primary btn-pass js-handle" data-url="/pass">通过</button><button type="button" class="btn btn-danger js-handle" data-url="/reject">拒绝</button></td></tr>
                <tr><th>重置注册密码：</th><td><button type="button" class="btn btn-primary js-handle" data-url="/resetpass">确定</button></td><td></td></tr>
                <tr><th>调动工作：</th>
                    <td>
                        <select class="form-control js-branch">
                          <option value="1">1XXXX分行</option>
                          <option value="2">2XXXX分行</option>
                          <option value="3">3XXXX分行</option>
                          <option value="4">4XXXX分行</option>
                          <option value="5">5XXXX分行</option>
                        </select>
                    </td>
                    <td><button type="button" class="btn btn-primary js-handle" data-url="/branch" data-type="surebranch">确定</button></td></tr>
            </table>
            <table class="table table-hover table-bordered pull-right table-exam">
                <thead>
                    <tr><th>考试时间</th><th>持续时间</th><th>考试级别</th><th>考试分数</th></tr>
                </thead>
                <tbody><tr><td>2016年7月20日9:00</td><td>56分钟</td><td>1级</td><td>90分</td></tr></tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    
    
<input type="hidden" id="del_session" value="<?php echo U('Admin/Public/del_session');?>"/>

<input type="hidden" id="user_detial" value="<?php echo U('Admin/Index/getUserInfo_fen');?>"/>

<input type="hidden" id="user"/>

<input type="hidden" id="Resetpass" value="<?php echo U('Admin/Index/Resetpass');?>"/>

<input type="hidden" id="openorshut" value="<?php echo U('Admin/Index/openorshut');?>"/>

<input type="hidden" id="JG" value="<?php echo U('Admin/Index/getfen_JG');?>"/>
    
<script src="/bs_system/public/admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="/bs_system/public/admin/js/jqPaginator.min.js" type="text/javascript"></script>
<script src="/bs_system/public/admin/js/myPage.js" type="text/javascript"></script> 
<script src="/bs_system/public/admin/js/page.js" type="text/javascript"></script>     

<script>



$('#go_out').click(function(){
	var url=$('#del_session').val();

	$.get(url,function(data){
		if(data==1){
 			location.href = "/bs_system/index.php/Admin/Public/log"
 		}
	});
});

function check_repass(obj){
	var new_pass=$('#new_pass').val();
	var queren_pass=$('#quren_pass').val();
	if(new_pass!=''){
		if(queren_pass!=''){
			
			if(new_pass!=queren_pass){
				alert('两次密码不一致');
				$(obj).val('');
			}	
			
		}
	}
}


function get_JG(obj){
	//alert($(obj).val());
	
	var name=$(obj).val();
	var url=$('#JG').val();
	var info={name:name};
	$.post(url,info,function(data){
		var html='';
		if(data!=null){
			for(var i=0;i<data.length;i++){
				html+='<option value='+data[i]['id']+'>'+data[i]['me_name']+'</option>';
			}
		}
		
		$('.js-branch').html(html);
	},'json');
		
}

//get_JG(5);



	
page(); 


$('#DG_user').click(function(){
	$('#export').submit();
});
 
</script>	
	    
    
    
</body>
</html>