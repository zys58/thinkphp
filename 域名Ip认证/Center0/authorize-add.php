<?php
	include '../conf/config.php';
	header("content-type:text/html;charset=utf-8");
	if(!isset($_SESSION['username'])||empty($_SESSION['username'])||!isset($_SESSION['uid'])||empty($_SESSION['uid'])){
		echo "<script>alert('请登录！');window.location.href='../index.php'</script>";
		exit();
	}
	
	$action = $_GET['action'];
	if($action=='do'){
		$username = $_POST['username'];
		$domain = $_POST['domain'];
		$ip = $_POST['ip'];
		$qq = $_POST['qq'];
	    $tel = $_POST['tel'];
		$time = strtotime($_POST['time']);
        
		if(!$domain||!$time){
		   echo "<script type=\"text/javascript\">alert('添加失败');</script>";
		}else{
		   $sql = "INSERT INTO `authorize` (`username`, `domain`, `ip`, `qq`, `tel`, `time`) VALUES ('$username', '$domain', '$ip', '$qq', '$tel', '$time');";
	       mysql_query($sql);
		   mysql_close();
		   echo "<script>alert('添加成功！');window.location.href='index.php'</script>";
		   die;
		}
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
							<div class="info_top"><h2>添加授权</h2></div>
							<table width="100%" cellspacing="0" cellpadding="5" border="0" bgcolor="#ffffff" align="center" class="cfBox">
								<tbody>
		   <iframe id="frame_profile" name="frame_profile" style="display: none"></iframe>
           <form action="authorize-add.php?action=do" method="post" enctype="multipart/form-data" autocomplete="off" target="frame_profile">
				
			<div id="con">
                <dl>
                    <dt id="acc">姓名：</dt>
                    <dd>
                      <input name="username" type="text" class="user" />
                    </dd>
                    <dt>授权域名：</dt>
                    <dd>
                      <input name="domain" type="text" class="user" />
                    </dd>
					<dt>IP：</dt>
                    <dd>
                      <input name="ip" type="text" class="user" />
                    </dd>
					<dt>QQ：</dt>
                    <dd>
                      <input name="qq" type="text" class="user" value='<?php echo $qq?>'/>
                    </dd>
					<dt>电话：</dt>
                    <dd>
                      <input name="tel" type="text" class="user" value='<?php echo $tel?>'/>
                    </dd>
					<dt>到期时间：</dt>
					<dd>
                      <input name="time" type="text" class="user" />
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