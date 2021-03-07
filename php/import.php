<?php 
  session_start();
  header("Content-type:application/vnd.ms-excel");  
  header("Content-Disposition:attachment;filename=data.xls");

?>
<!DOCTYPE html >
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <title></title>
</head>
<body>
<?php include("conn.php");?>
<?php include("search_friend.php")?>
</body>
</html>