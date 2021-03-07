 <div class="search">
        	<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post"> 
        		<fieldset id="searchfieldset">
        			<legend>查询条件</legend>
					<input type="text" id="condition" name="condition"/>
					<label><input name="Fruit" type="radio" value="st_id" />工号 </label> 
					<label><input name="Fruit" type="radio" value="st_name" />姓名 </label> 
					<label><input name="Fruit" type="radio" value="st_post" />职位 </label> 
					<button type="submit" id="btnsearch">查询</button><br>
				</fieldset>
			</form>
      <br>
			<div class="end">
				<p id="bread">首页 > 查询结果</p>
        <button id="excel" onclick="window.location.href='import.php'">导出数据</button>
      </div>
      <div>
				<table id="tablesearch">
          <?php
// 关闭所有PHP错误报告
error_reporting(0);
?>
<?php
  include("conn.php");
?>
					<?php
						if($_SERVER["REQUEST_METHOD"] == "POST"){
						
							// 8、获取表单上传的数据
							$condition=$_POST["condition"];
							$fruit=$_POST["Fruit"];

							if($fruit=="st_id"){
								echo "<tr>";
                  echo "<td>工号</td>";
                  echo "<td>姓名</td>";
                  echo "<td>职位</td>";
                  echo "<td>电话</td>";
                  echo "<td>手机</td>";
                echo "</tr>";
								$sql="select st_id,st_name,gender,post,mobile from staff where st_id like '%{$condition}%' ";
								$result=mysqli_query( $conn, $sql);
								if(mysqli_num_rows($result)>0){
        		 	    			while($row = mysqli_fetch_assoc($result)){
                						echo "<tr>";
                   	 					echo "<td>{$row['st_id']}</td>";
                    					echo "<td>{$row['st_name']}</td>"; 
                    					echo "<td>{$row['gender']}</td>";
                    					echo "<td>{$row['post']}</td>";
                    					echo "<td>{$row['mobile']}</td>";
                    					echo "</tr>";
									}
           						}
           						else{
           							echo "<tr>";
           							echo "<td>无记录</td>";
           							echo "<td>无记录</td>";
           							echo "<td>无记录</td>";
           							echo "<td>无记录</td>";
           							echo "<td>无记录</td>";
           							echo "</tr>";
           						}
							}
							else if($fruit=="st_name"){
								echo "<tr>";
                  echo "<td>工号</td>";
                  echo "<td>姓名</td>";
                  echo "<td>职位</td>";
                  echo "<td>电话</td>";
                  echo "<td>手机</td>";
                echo "</tr>";
                    			$sql="select st_id,st_name,gender,post,mobile from staff where st_name like '%{$condition}%' ";
								$result=mysqli_query($conn,$sql);
								if(mysqli_num_rows($result)>0){
        		 	    			while($row = mysqli_fetch_assoc($result)){
                						echo "<tr>";
                              echo "<td>{$row['st_id']}</td>";
                              echo "<td>{$row['st_name']}</td>"; 
                              echo "<td>{$row['gender']}</td>";
                              echo "<td>{$row['post']}</td>";
                              echo "<td>{$row['mobile']}</td>";
                              echo "</tr>";
									}
           						}
           						else{
           							echo "<tr>";
           							echo "<td>无记录</td>";
           							echo "<td>无记录</td>";
           							echo "<td>无记录</td>";
           							echo "<td>无记录</td>";
           							echo "<td>无记录</td>";
           							echo "</tr>";
           						}
							}
							else if($fruit=="st_post"){
							echo "<tr>";
                  echo "<td>工号</td>";
                  echo "<td>姓名</td>";
                  echo "<td>职位</td>";
                  echo "<td>电话</td>";
                  echo "<td>手机</td>";
                echo "</tr>";
                    			$sql="select st_id,st_name,gender,post,mobile from staff where staff.post like '%{$condition}%' ";
								$result=mysqli_query($conn,$sql);
								if(mysqli_num_rows($result)>0){
        		 	    			while($row = mysqli_fetch_assoc($result)){
                					echo "<tr>";
                              echo "<td>{$row['st_id']}</td>";
                              echo "<td>{$row['st_name']}</td>"; 
                              echo "<td>{$row['gender']}</td>";
                              echo "<td>{$row['post']}</td>";
                              echo "<td>{$row['mobile']}</td>";
                              echo "</tr>";
									}
           						}
           						else{
           							echo "<tr>";
           							echo "<td>无记录</td>";
           							echo "<td>无记录</td>";
           							echo "<td>无记录</td>";
           							echo "<td>无记录</td>";
           							echo "<td>无记录</td>";
           							echo "</tr>";
           						}
							}
              else{
                 echo "<script>alert('请选择查询方式')</script>";
              }


						}
					?>

				</table>
			</div>
			
        </div>