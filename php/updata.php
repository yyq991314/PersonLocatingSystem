<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>
<style>
	.first{background-color:#8B8989;}
</style>
<body>
<?php
    include("conn.php");
    $st_id = $_GET['st_id'];
    $result = mysqli_query($conn,"SELECT st_id,st_password,st_name,gender,post,mobile,age,address,images FROM staff WHERE st_id='$st_id'");
	$row = mysqli_fetch_assoc($result);
 ?>

<?php include("top_login.html");?>
<?php include("nav.php");?>
<?php include("updata_friends.php")?>
</body>
</html>