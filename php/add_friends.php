<p id="addbread">首页 > 新增列表</p>
<fieldset id="addfieldset">
        		<legend>新增校友</legend>
        		<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data" id="addfrom"> 
				<input type="text" name="st_id" placeholder="    请输入工号" /><br>
				<input type="text" name="st_password" placeholder="    请输入密码" /><br>
				<input type="text" name="st_name" placeholder="    请输入姓名" /><br>
				<select name="gender" id="gender">
					<option>请选择性别</option>
					<option>男</option>
  					<option>女</option>
 				</select><br>
 				<select name="post" id="st_post">
					<option>请选择职位</option>
					<option>员工</option>
  					<option>组长</option>
  					<option>经理</option>
 			 	</select><br>
				<input type="text" name="mobile" placeholder="    请输入手机号" /><br>
				<input type="text" name="age" placeholder="    请输入年龄" /><br>
				<input type="text" name="address" placeholder="    请输入通讯地址" /><br>
				<button type="submit" id="btn1">提交</button>
				<button type="reset" id="btn2">重置</button>	<br>
				<div id="filechoose">
					<img src="../images/init.jpg" id="previewimg" width="120px" height="160px"/>
					<br><br><br><br><br><br><br><br><br>  
					<input type="file" name="file" onChange="preview(this)" id="choose"/><br>
     
    				<script type="text/javascript">
            			function preview(obj){
                			var img = document.getElementById("previewimg");
                			img.src = window.URL.createObjectURL(obj.files[0]);
            			}
       				</script>
           		</div>
           		</form>
</fieldset>

<?php

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$st_id=$_POST["st_id"];
		$st_password=$_POST["st_password"];
		$st_name=$_POST["st_name"];
		$gender=$_POST["gender"];
		$post=$_POST["post"];
		$mobile=$_POST["mobile"];
		$age=$_POST["age"];
		$address=$_POST["address"];
		
		
		if(($_FILES["file"]["type"]=="image/jpeg" || $_FILES["file"]["type"]=="image/png") && $_FILES["file"]["size"]<1024000){
        //找到文件存放的位置
		//在服务器中新建一个uploads文件夹,图片名中也加入当前时间
        $filename = "../images/".date("YmdHis").$_FILES["file"]["name"];
         //转换编码格式，只有转换成GB2312，move_uploaded_file函数才不会把图片名字里的中文变成乱码
        $filename1 = iconv("UTF-8","gb2312",$filename);
        //判断文件是否存在
        if(file_exists($filename1))
        {
            echo "该文件已存在！";
        }

        else{
        	 move_uploaded_file($_FILES["file"]["tmp_name"],$filename1);
        	 $sql="insert into staff(st_id,st_password,st_name,gender,post,mobile,age,address,images) values ('$st_id','$st_password','$st_name','$gender','$post','$mobile','$age','$address','$filename')";
		$result=mysqli_query( $conn, $sql) or die("Error in query: $sql. ".mysqli_error($conn)); 
        }
     
    }

		

	}
?>