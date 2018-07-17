<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="renderer" content="webkit" />
	<meta name="Description" content="">
	<meta name="Keywords" content="">
	<title>登录</title>
	<link rel="stylesheet" href="/bs_system/public/admin/css/bootstrap.css">
	<link rel="stylesheet" href="/bs_system/public/admin/css/main.css">
	<script src="/bs_system/public/admin/js/lib/jquery.js" defer="defer"></script>
	<script src="/bs_system/public/admin/js/lib/bootstrap.js" defer="defer"></script>
	<style>
		body {
		  padding-top: 40px;
		  padding-bottom: 40px;
		  background-color: #eee;
		}

		.form-signin {
		  max-width: 330px;
		  padding: 15px;
		  margin: 0 auto;
		}
		.form-signin .form-signin-heading,
		.form-signin .checkbox {
		  margin-bottom: 10px;
		}
		.form-signin .checkbox {
		  font-weight: normal;
		}
		.form-signin .form-control {
		  position: relative;
		  height: auto;
		  -webkit-box-sizing: border-box;
		     -moz-box-sizing: border-box;
		          box-sizing: border-box;
		  padding: 10px;
		  font-size: 16px;
		}
		.form-signin .form-control:focus {
		  z-index: 2;
		}
		.form-signin input[type="email"] {
		  margin-bottom: -1px;
		  border-bottom-right-radius: 0;
		  border-bottom-left-radius: 0;
		}
		.form-signin input[type="password"] {
		  margin-bottom: 10px;
		  border-top-left-radius: 0;
		  border-top-right-radius: 0;
		}
		.form-signin .btn-log{
			margin-top: 20px;
		}
		.form-signin .link-reg{
			float: right;
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<div class="container">
		<form class="form-signin" action='' id="loginForm" method="post">
			<h2 class="form-signin-heading">中国银行学习系统后台</h2>
			<input type="text" id="inputEmail" class="form-control" name="username" placeholder="账号" required="" autofocus="">
			<input type="password" id="inputPassword" name="password" class="form-control" placeholder="密码" required="">
			<button class="btn btn-lg btn-primary btn-block btn-log" type="submit">登&nbsp;&nbsp;录</button>
		</form>
    </div>
</body>
</html>