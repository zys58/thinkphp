<?php
	include '../conf/config.php';
	header("content-type:text/html;charset=utf-8");
	if(!isset($_SESSION['username'])||empty($_SESSION['username'])||!isset($_SESSION['uid'])||empty($_SESSION['uid'])){
		echo "<script>alert('请登录！');window.location.href='../index.php'</script>";
		exit();
	}

	$id = $_GET['id'];
	$sql = "delete FROM `version` WHERE id ='$id';";
	//$result=mysql_query($sql);
    echo "<script>alert('暂不支持！');window.location.href='index.php'</script>";
?>
