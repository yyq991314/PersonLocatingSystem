<div class="container2" >
		
		<div class="login">
			<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
			
			<input type="text" id="user" name="user" placeholder="请输入工号"/><span id="warning1"></sapn><br>

			
			<input type="password" id="pwd" name="pwd" placeholder="请输入密码"/><span id="warning2"></sapn><br>

			<lable><input type="radio" id="radio1" name="choose" value="admin">管理员</lable>
			<lable><input type="radio" id="radio2" name="choose" value="friend">校友</lable><br>
			<input type="submit" name="submit" id="btnlogin" value="登陆" href="index.php">
			</form>
		</div>
</div>

<?php
		if(isset($_POST['submit'])){
			$user=trim($_POST["user"]);
			$pwd=trim($_POST['pwd']);
			$choose=$_POST["choose"];
			include('conn.php');
			if($choose=="admin"){
				$sql="select ad_id from admins where ad_id='$user' and ad_password='$pwd'";
				$result=mysqli_query( $conn, $sql);
				if(mysqli_num_rows($result)==1){
    				header("location:index.php");
   				} 
   				// else if(!preg_match("\d{5}",$user)){
   				// 	echo "<script>alert('账号不可用!')</script>";
   				// }
   				// else if(strlen($pwd)!=6){
   				// 	echo "<script>alert('密码长度应为6位！')</script>";
   				// }
   				// else{
     	 // 			echo "<script>alert('账号或密码错误！')</script>";
   				// }
   			}
   			else if($choose=="friend"){
   				$sql="select ad_id from admins where ad_id='$user' and  ad_password='$pwd'";
				$result=mysqli_query( $conn, $sql);
				if(mysqli_num_rows($result)==1){
    				header("location:index.php");
   				} 
   			// 	else if(!preg_match("/^[a-zA-Z ]*$/",$user)){
   			// 		echo "<script>alert('账号不可用!')</script>";
   			// 	}
   			// 	else if(strlen($pwd)!=6){
   			// 		echo "<script>alert('密码长度应为6位！')</script>";
   			// 	}
   			// 	else{
     	//  			echo "<script>alert('账号或密码错误！')</script>";
   			// 	}
   			// }
   			// else if($choose==""){
   			// 	echo "<script>alert('请选择您的登录身份！')</script>";
   			// }
   		}
    }
?>
