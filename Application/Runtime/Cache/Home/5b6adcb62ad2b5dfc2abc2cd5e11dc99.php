<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>微乐分享产品授权管理中心</title>
<link href="/code/Public/css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="/code/Public/js/jquery-1.7.2.min.js"></script>
<!-- <script language="JavaScript" src="/code/Public/js/function.js"></script> -->
</head>
<body>
<form name="loginform" method="post" action="/code/index.php/Home/Login/login">
  <div id="bg">
        <div id="logo"></div>
        <div id="lay">
            
            <div id="con">
                <dl>
                    <dt id="acc">账号：</dt>
                    <dd>
                      <input name="username" id="z1" onblur="login(1)" type="text" class="user" />&nbsp;
                      <span id='m1'></span>
                      <input type="hidden" id='a1' />
                    </dd>
                    <dt>密码：</dt>
                    <dd>
                      <input name="password" id="z2" onblur="login(2)" type="password" class="pw" />&nbsp;
                      <span id='m2'></span>
                      <input type="hidden" id='a2' />
                    </dd>
					<dt>安全码：</dt>
                    <dd>
                      <input name="safepassword" id="z2" onblur="login(2)" type="password" class="pw" />
                    </dd>
                </dl>
            </div>
            
            <div id="bottom">
             <button type="submit"><a id="login">登录</a></button>
             
            </div>
            
        </div>
    </div>
</form>
</body>
</html>