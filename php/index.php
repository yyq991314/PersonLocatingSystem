<!DOCTYPE html >
<html lang="zh">
	<!--copyright
		Author:杨文娟
		Data:2019-4-4
		version:v1.0>
	-->
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>
<style>
	.first{background-color:#8B8989;}
</style>
<body>
	<div class="container">
		<!--顶部-->
		<?php include("top_login.html");?>
		
		<!--导航-->
		<?php include("nav.php");?>

		<!--数据库连接-->
		<?php include("conn.php");?>
		
		<?php include("list.php");?>
	
		<!--页脚-->
		<?php include("footer.html");?>
	</div>

</body>
</html>