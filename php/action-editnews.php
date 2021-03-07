<?php

include("conn.php");

// 获取修改的新闻
$user_name = $_POST['user_name'];
$user_pwd = $_POST['user_pwd'];
$real_name = $_POST['real_name'];
$mobile = $_POST['mobile'];
$business = $_POST['business'];
$card_no = $_POST['card_no'];
$address = $_POST['address'];
$zipcode = $_POST['zipcode'];
$enter_year = $_POST['enter_year'];
$class_id = $_POST['class_id'];
// 更新数据
mysqli_query($conn,"UPDATE students SET user_name='$user_name',user_pwd='$user_pwd',real_name='$real_name',mobile='$mobile',business='$business',card_no='$card_no',address='$address',zipcode='$zipcode',enter_year='$enter_year',class_id='$class_id' WHERE real_name='$real_name'") or die('修改数据出错：'.mysqli_error($conn)); 
header("Location:index.php");  
?>