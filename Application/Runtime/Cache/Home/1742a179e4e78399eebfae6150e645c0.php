<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>用户管理中心</title>
<link href="/code/Public/css/content.css" rel="stylesheet" type="text/css" />
</head>
<body>
		<div id="bg">
			<div id="in_logo"></div>
			<div id="in_lay">
				<div id="in_top">
					<p>用户管理中心</p>
					<a target="_top" href="/code/index.php/Home/Login/loginout">退出</a>
				</div>
				<div id="in_con">
				<div id="left">
					                        <ul>
							<a href="index.html"><li class="xz">用户列表</li></a>
							<a href="/code/index.php/Home/userinfo/index"><li>添加用户</li></a>
<!--                             <a href="version-index.html"><li>版本列表</li></a>
							<a href="version-add.html"><li>添加版本</li></a>
							<a href="log.html"><li>升级日志</li></a> -->
							<a href="profile.html"><li>修改密码</li></a>
						</ul>
					</div>
					<div id="right">
						<div class="info">
							<div class="info_top"><h2>添加用户</h2></div>
							<table width="100%" cellspacing="0" cellpadding="5" border="0" bgcolor="#ffffff" align="center" class="cfBox">
								<tbody>
		   <iframe id="frame_profile" name="frame_profile" style="display: none"></iframe>
           <form action="/code/index.php/Home/Userinfo/add"method="post" >
				<!-- <form action="/code/index.php/Home/Userinfo/add"method="post" enctype="multipart/form-data" autocomplete="off" target="frame_profile"> -->
			<div id="con">
                <dl>
                    <dt id="acc">用户名：</dt>
                    <dd>
                      <input name="username" type="text" class="user" />
                    </dd>
                    <dt>MAC地址：</dt>
                    <dd>
                      <input name="mac" type="text" class="user" />
                    </dd>
					<dt>接入时间：</dt>
                    <dd>
                      <input name="jieru" type="text" class="user" />
                    </dd>
					<dt>联系方式：</dt>
                    <dd>
                      <input name="lxfs" type="text" class="user" />
                    </dd>
                </dl>
            </div>
			<div id="bottom">
			  <button type="submit" value="true" id="submit"/><strong>保存</strong></button>
            </div>

			</form>


								</tbody>
							</table>					
						</div>
					</div>
				<div class="clear"></div>
				</div>
			</div>
		</div>
</body>
</html>