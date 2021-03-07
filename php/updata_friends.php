<fieldset id="updatafieldset">
<legend>修改员工信息</legend>
<form action="action-editnews.php" method="post" id="updatafrom">
    <label>工号: </label><input type="text" name="st_id" value="<?php echo $row['st_id']?>"><br>
    <label>密码：</label><input type="text" name="st_password" value="<?php echo $row['st_password']?>"><br>
    <label>姓名：</label><input type="text" name="st_password" value="<?php echo $row['st_name']?>"><br>
    <label>性别：</label><select name="gender" id="gender">
        <option><?php echo $row['gender']?></option>
        <option>男</option>
        <option>女</option>            
    </select></label><br>
    <label>职位：</label><select name="post" id="st_post">
        <option><?php echo $row['post']?></option>
        <option>员工</option>
        <option>组长</option>
        <option>经理</option>            
    </select><br>
    
    <label>手机号：</label><input type="text" name="mobile" value="<?php echo $row['mobile']?>"><br>
    <label>年龄：</label><input type="text" name="age" value="<?php echo $row['age']?>"><br>
    <label>通讯地址：</label><input type="text" name="address" value="<?php echo $row['address']?>"><br>
    
   
    <input type="submit" value="确认修改" id="updatasubmit">
    <div id="filechoose">
					<img  id="previewimg" width="120px" height="160px" src="<?php echo $row['images']?>"/>
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