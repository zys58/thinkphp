<?php
	include '../conf/config.php';
	header("content-type:text/html;charset=utf-8");
	if(!isset($_SESSION['username'])||empty($_SESSION['username'])||!isset($_SESSION['uid'])||empty($_SESSION['uid'])){
		echo "<script>alert('请登录！');window.location.href='../index.php'</script>";
		exit();
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>产品授权管理中心</title>
<link href="../static/css/content.css" rel="stylesheet" type="text/css" />
</head>
<body>
		<div id="bg">
			<div id="in_logo"></div>
			<div id="in_lay">
				<div id="in_top">
					<p>产品授权管理中心</p>
					<a target="_top" href="logout.php">退出</a>
				</div>
				<div id="in_con">
					<div id="left">
					<?php
	                include 'left.php';
                    ?>
					</div>
					<div id="right">
						<div class="info">
							<div class="info_top"><h2>版本列表</h2></div>
							<table width="100%" cellspacing="0" cellpadding="5" border="0" bgcolor="#ffffff" align="center" class="cfBox">
								<tbody>
									<th width="20%" class="buy_tr">版本号</th>
									<th width="50%" class="buy_tr">更新内容</th>
									<th width="20%" class="buy_tr">文件名</th>
									<th width="10%" class="buy_tr">操作</th>
									<?php 
										$sql="select * from version";
										$result=mysql_query($sql);
										if($result&&mysql_num_rows($result)){
											while ($row=mysql_fetch_assoc($result)) {
											echo "<tr>";
											echo "<td width='20%'' class='buy_tr'>".$row['name']."</td>";
											echo "<td width='50%'' class='buy_tr'>".base64_decode($row['content'])."</td>";
											echo "<td width='20%'' class='buy_tr'>".$row['file']."</td>";
											echo "<td width='10%'' class='buy_tr'>
												<a href='version-chanage.php?id=".$row['id']."'>修改</a>||<a href='version-del.php?id=".$row['id']."'>删除</a>
											</td>";
											echo "</tr>";
											}
										}
									?>
									
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