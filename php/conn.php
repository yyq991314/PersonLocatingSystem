<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ex11";
 
// 创建连接
$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_set_charset($conn, "utf8");
// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>