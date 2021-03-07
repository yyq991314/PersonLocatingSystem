<?php
    include("conn.php");
    session_start();
    $delete = trim($_GET['real_name']);
    $sql = " delete from students where real_name= '$delete'";
    $result= mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('数据删除成功！');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
    }else{
        echo "<script>alert('数据删除失败！');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
    }
?>