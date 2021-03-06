<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="renderer" content="webkit" />
	<meta name="Description" content="">
	<meta name="Keywords" content="">
	<title>考试题库</title>
	<link rel="stylesheet" href="/bs_system/public/admin/css/bootstrap.css">
    <link rel="stylesheet" href="/bs_system/public/admin/css/kindeditor/default.css"/>
    <link rel="stylesheet" href="/bs_system/public/admin/css/main.css">
	<!--script src="/bs_system/public/admin/js/lib/jquery.js" defer="defer"></script-->
	<script src="/bs_system/public/admin/js/lib/bootstrap.js" defer="defer"></script>
    <script src="/bs_system/public/admin/js/lib/vue.js" defer="defer"></script>
    <script src="/bs_system/public/admin/js/lib/doT.js" defer="defer"></script>
    <script src="/bs_system/public/admin/js/lib/kindeditor/kindeditor.js"></script>
    <script src="/bs_system/public/admin/js/lib/kindeditor/zh-CN.js"></script>
	<script src="/bs_system/public/admin/js/main.js" defer="defer"></script>
	<style>

	</style>
</head>
<body id="page-examlist">
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
            <li><a href="javascript:;" class="txt-identity">身份：系统管理员</a></li>
            <li><a href="#" class="link-logout" id="go_out">退出</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
      	<!-- 左侧菜单 -->
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="./branchlist.html">分行列表</a></li>
            <li><a href="./studylist.html">学习章节</a></li>
            <li class="active"><a href="./examlist.html">考试题库</a></li>
            <li><a href="./appsetting.html">App 部分设置</a></li>
          </ul>
        </div>
        <!-- 内容 -->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main main-examlist">
        	<div class="chapter-list ui-scrollbar js-chapter-list">
                <ul class="list-one">
                    <li>
                        <a class="active"  href="javascript:;" data-id="1">第一章题库</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-id="2">第二章题库</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-id="3" id="test">第三章题库</a>
                    </li>
                </ul>   
            </div>
            <div class="chapter-cont">
                <div class="chanter-cont-info clearfix">
                    <div class="chapter-num pull-left">{{chapter}}</div>
                    <div class="chapter-info pull-left">
                        <p><span>优秀分数：{{score_excellent}}</span><span>普通分数：{{score_normal}}</span><span>通过分数：{{score_pass}}</span></p>
                        <p>每场考试间隔时间：{{time_interval}}小时</p>
                        <p>考试时间：{{time_kaoshi}}小时</p>
                        <p>单选题数目：{{single.num}}个单选，分数{{single.score}}分<span v-if="compare_single" class="tip txt-red">提示：单选题数目不够</span></p>
                        <p>多选题数目：{{multi.num}}个多选，分数{{multi.score}}分<span v-if="compare_multi" class="tip txt-red">提示：多选题数目不够</span></p>
                        <p>判断题数目：{{judge.num}}个判断，分数{{judge.score}}分<span v-if="compare_judge" class="tip txt-red">提示：判断题数目不够</span></p>
                        <p class="txt-red">提示：总分数为{{total}}分</p>
                        <div class="wrod-box clearfix">
                            <div class="word pull-left"><p>优秀的过关词汇：{{word_excellent}}</p><p>普通的过关词汇：{{word_normal}}</p></div>
                            <div class="word pull-right"><p>通过的过关词汇：{{word_pass}}</p><p>未通过的过关词汇：{{word_notpass}}</p></div>
                        </div>
                    </div>
                    <a class="btn btn-primary pull-right js-setting" href="javascript:;" role="button">设置</a>
                </div>
                <div class="btn-box clearfix">
                    <a class="btn btn-primary pull-right js-newexam" href="javascript:;" role="button">新建考题</a>
                </div>
                
               
                
                	<table class="table table-hover table-bordered table-examlist js-examlist" id="table_list" data-url="<?php echo U('Admin/index/question_list');?>">
        	
        	
					<!--thead>
					   <tr id='table_tr_name' style="cursor:default">
					    <th name='id'>编号</th>
					    <th name='type'>类型</th>
					    <th name='title'>考题</th>
					    <th name='comm'>操作</th>
					  </tr>
				  </thead>
				  
				 
			    	<tbody id="tblData">  
			    	</tbody--> 
                
                
                
                    <thead>
                        <tr><th>编号</th><th>类型</th><th>考题</th><th>操作</th></tr>
                    </thead>
                    <tbody>
                        <tr v-for="item in list">
                        	<td hidden>{{item.que_id}}</td>
                            <td>{{$index + 1}}</td>
                            <td>{{item.type}}</td>
                            <td>{{item.cont}}</td>
                            <td><a que_id={{item.que_id}} href="javascript:;" class="js-detail">详情</a><a href="javascript:;" class="js-delete">删除</a></td>
                        </tr>
                    </tbody>
                    
                </table>
                
                <!--ul class="pagination pull-right" id="pagination">
			
				</ul-->
                
            </div>
        </div>
      </div>
    </div>
    <!-- 弹层Modal 题库设置 -->
    <div class="modal fade" id="modal-setting" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">题库设置</h4>
          </div>
          
          <!-- 保存通过表单提交，成功刷页 -->
          <form id="set_ok" action="/bs_system/index.php/Admin/index/set_ques" method="post">
          
          	<input type="hidden" name="id" id="set_id" value=1 />
          
              <div class="modal-body modal-draw">
                <table>
                    <tr><td width="35%">优秀分数：</td><td><input value="{{score_excellent}}" name="score_excellent" type="text" class="form-control input-num"/></td></tr>
                    <tr><td>普通分数：</td><td><input value="{{score_normal}}" name="score_normal" type="text" class="form-control input-num"/></td></tr>
                    <tr><td>通过分数：</td><td><input value="{{score_pass}}" name="score_pass" type="text" class="form-control input-num"/></td></tr>
                    <tr><td>每场考试间隔时间：</td><td><input value="{{time_interval}}" name="time_interval" type="text" class="form-control input-num"/></td></tr>
                    <tr><td>考试时间：</td><td><input value="{{time_kaoshi}}" name="time_kaoshi" type="text" class="form-control input-num"/></td></tr>
                    <tr><td>单选题：</td><td class="ques"><label>个数：<input value="{{single.num}}" name="singlenum" type="text" class="form-control input-num"/></label><label>分数：<input value="{{single.score}}" name="singlescore" type="text" class="form-control input-num"/></label></td></tr>
                    <tr><td>多选题分数：</td><td class="ques"><label>个数：<input value="{{multi.num}}" name="multinum" type="text" class="form-control input-num"/></label><label>分数：<input value="{{multi.score}}" name="multiscore" type="text" class="form-control input-num"/></label></td></tr>
                    <tr><td>判断题分数：</td><td class="ques"><label>个数：<input value="{{judge.num}}" name="judgenum" type="text" class="form-control input-num"/></label><label>分数：<input value="{{judge.score}}" name="judgescore" type="text" class="form-control input-num"/></label></td></tr>
                    <tr><td>优秀的过关词汇：</td><td><input value="{{word_excellent}}" name="word_excellent" type="text" class="form-control"/></td></tr>
                    <tr><td>普通的过关词汇：</td><td><input value="{{word_normal}}" name="word_normal" type="text" class="form-control"/></td></tr>
                    <tr><td>通过的过关词汇：</td><td><input value="{{word_pass}}" name="word_pass" type="text" class="form-control"/></td></tr>
                    <tr><td>未通过的过关词汇：</td><td><input value="{{word_notpass}}" name="word_notpass" type="text" class="form-control"/></td></tr>
                	
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary js-save" data-dismiss="modal" id="set_res" >保存</button>
              </div>
          </form>
          
          
        </div>
      </div>
    </div>
    <!-- 弹层Modal 新建考题 -->
    <div class="modal fade" id="modal-newexam" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">新建考题</h4>
          </div>
          <form action="/usercenter/main/draw_incharge/" method="post">
              <div class="modal-body modal-draw">
                 <textarea name="examcont" class="ui-editor"></textarea>
                 <div class="btnbox">
                    <label>考题类型：</label>
                    <label><input type="radio" name="type" value="1" />选择</label>
                    <label><input type="radio" name="type" value="2" />判断</label>
                    <a class="btn btn-primary btn-add js-add" href="javascript:;" role="button">增加答案</a>
                 </div>
                 <div class="ansbox js-ansbox">
                     <!--p><label><input type="radio" name="type" value="1" />对</label></p>
                     <p><label><input type="radio" name="type" value="0" />错</label></p-->
                     <!--p><label><input type="checkbox" name="" value="0" />A：<input type="text" name="" class="form-control" /><a class="del js-del" href="javascript:;">&times;</span></a></p-->
                 </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary js-save" data-dismiss="modal">保存</button>
              </div>
          </form>
        </div>
      </div>
    </div>
    
<input type="hidden" id="del_session" value="<?php echo U('Admin/Public/del_session');?>"/>

<input type="hidden" id="add_question" value="<?php echo U('Admin/Index/add_question');?>"/>

<input type="hidden" id="up_question" value="<?php echo U('Admin/Index/up_question');?>"/>

<input type="hidden" id="set_ques_list" value="<?php echo U('Admin/Index/set_ques_list');?>"/>

<input type="hidden" id="select_que_detial" value="<?php echo U('Admin/Index/select_que_detial');?>"/>

<input type="hidden" id="del_question" value="<?php echo U('Admin/Index/del_question');?>"/>

<input type="hidden" id="old_id" />

<input type="hidden" id="old_XZ" />

<input type="hidden" id="old_PD" />




<script src="/bs_system/public/admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="/bs_system/public/admin/js/jqPaginator.min.js" type="text/javascript"></script>
<script src="/bs_system/public/admin/js/myPage.js" type="text/javascript"></script> 
<script src="/bs_system/public/admin/js/page.js" type="text/javascript"></script>     

 
<script>


$('#test').click();


//$('.js-chapter-list').find("a[data-id='3']").click();

$('#go_out').click(function(){
	var url=$('#del_session').val();

	$.get(url,function(data){
		if(data==1){
 			location.href = "/bs_system/index.php/Admin/Public/log"
 		}
	});
});


//page()
</script>
        
    
    
    
</body>
</html>