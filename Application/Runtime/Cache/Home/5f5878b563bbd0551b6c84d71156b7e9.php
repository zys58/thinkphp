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
					<a target="_top" href= "/code/index.php/Home/Login/loginout">退出</a>
				</div>
				<div id="in_con">
					<div id="left">
					                        <ul>
							<a href="index.html"><li class="xz">用户列表</li></a>
							<a href="/code/index.php/Home/Index/userinfo/add"><li>添加用户</li></a>
<!--                             <a href="version-index.html"><li>版本列表</li></a>
							<a href="version-add.html"><li>添加版本</li></a>
							<a href="log.html"><li>升级日志</li></a> -->
							<a href="profile.html"><li>修改密码</li></a>
						</ul>
					</div>
					<div id="right">
						<div class="info">
							<div class="info_top"><h2>用户管理</h2></div>
							<table width="100%" cellspacing="0" cellpadding="5" border="0" bgcolor="#ffffff" align="center" class="cfBox">
								<tbody>
								   <tbody>
								    <th width="10%" class="buy_tr">姓名</th>
									<th width="20%" class="buy_tr">MAC地址</th>
                                    <th width="20%" class="buy_tr">接入时间</th>
									<th width="20%" class="buy_tr">联系方式</th>
									<th width="20%" class="buy_tr">到期时间</th>
									<th width="10%" class="buy_tr">操作</th>
									<?php  $sql="select * from authorize limit $offset,$page_size"; $result=mysql_query($sql); if($result&&mysql_num_rows($result)){ while ($row=mysql_fetch_assoc($result)) { echo "<tr>"; echo "<td width='10%'' class='buy_tr'>".$row['username']."</td>"; echo "<td width='10%'' class='buy_tr'>".$row['domain']."</td>"; echo "<td width='10%'' class='buy_tr'>".$row['ip']."</td>"; echo "<td width='20%'' class='buy_tr'>".$row['qq']."</td>"; echo "<td width='20%'' class='buy_tr'>".$row['tel']."</td>"; echo "<td width='20%'' class='buy_tr'>".date("Y-m-d",$row['time'])."</td>"; echo "<td width='10%'' class='buy_tr'>
												<a href='authorize-chanage.php?id=".$row['id']."'>修改</a>||<a href='authorize-del.php?id=".$row['id']."'>删除</a>
											</td>"; echo "</tr>"; } } ?>
									
								</tbody>
							</table>
						
							<div class="pages">
							<li>当前页码：<?php echo $page;?>/<?php echo $page_count;?></li>
							<li>记录条数：<?php echo $message_count;?>条</li>

							
							</div>
				
						</div>
					</div>
				<div class="clear"></div>
				</div>
			</div>
		</div>
</body>
</html>