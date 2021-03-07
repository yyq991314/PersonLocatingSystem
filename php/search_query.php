<?php include("conn.php");?>
<?php
            
						if($_SERVER["REQUEST_METHOD"] == "POST"){
						
							// 8、获取表单上传的数据
							$condition=$_POST["condition"];
							$fruit=$_POST["Fruit"];

							if($fruit=="name"){
								echo "<tr>";
                   	 			echo "<td>姓名</td>";
                    			echo "<td>身份证号</td>";
                    			echo "<td>入学年份</td>";
                    			echo "<td>班级</td>";
                    			echo "<td>手机</td>";
                    			echo "</tr>";
								$sql="select real_name,card_no,enter_year,class_name,mobile from students,classes where students.real_name like '%{$condition}%' and students.class_id=classes.id";
								$result=mysqli_query( $conn, $sql);
								if(mysqli_num_rows($result)>0){
        		 	    			while($row = mysqli_fetch_assoc($result)){
                						echo "<tr>";
                   	 					echo "<td>{$row['real_name']}</td>";
                    					echo "<td>{$row['card_no']}</td>"; 
                    					echo "<td>{$row['enter_year']}</td>";
                    					echo "<td>{$row['class_name']}</td>";
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
							else if($fruit=="enter"){
								echo "<tr>";
                   	 			echo "<td>姓名</td>";
                    			echo "<td>身份证号</td>";
                    			echo "<td>入学年份</td>";
                    			echo "<td>班级</td>";
                    			echo "<td>手机</td>";
                    			echo "</tr>";
                    			$sql="select real_name,card_no,enter_year,class_name,mobile from students,classes where enter_year like '%{$condition}%' and students.class_id=classes.id";
								$result=mysqli_query($conn,$sql);
								if(mysqli_num_rows($result)>0){
        		 	    			while($row = mysqli_fetch_assoc($result)){
                						echo "<tr>";
                   	 					echo "<td>{$row['real_name']}</td>";
                    					echo "<td>{$row['card_no']}</td>"; 
                    					echo "<td>{$row['enter_year']}</td>";
                    					echo "<td>{$row['class_name']}</td>";
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
							else if($fruit=="class"){
								echo "<tr>";
                   	 			echo "<td>姓名</td>";
                    			echo "<td>身份证号</td>";
                    			echo "<td>入学年份</td>";
                    			echo "<td>班级</td>";
                    			echo "<td>手机</td>";
                    			echo "</tr>";
                    			$sql="select real_name,card_no,enter_year,class_name,mobile from students,classes where classes.class_name like '%{$condition}%' and students.class_id=classes.id";
								$result=mysqli_query($conn,$sql);
								if(mysqli_num_rows($result)>0){
        		 	    			while($row = mysqli_fetch_assoc($result)){
                						echo "<tr>";
                   	 					echo "<td>{$row['real_name']}</td>";
                    					echo "<td>{$row['card_no']}</td>"; 
                    					echo "<td>{$row['enter_year']}</td>";
                    					echo "<td>{$row['class_name']}</td>";
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


						}
					?>