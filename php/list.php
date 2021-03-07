<div>
    <p id="indexbread">首页 > 信息列表</p>
    <table>
        <tr bgcolor="#ADADAD">
        	<td>工号</td>
        	<td>姓名</td>
        	<td>性别</td>
        	<td>职务</td>
        	<td>手机号码</td>
        	<td>操作</td>
        </tr>
        <?php
        	include("conn.php");
        	$sql="select st_id,st_name,gender,post,mobile from staff ;";
        	$result=mysqli_query( $conn, $sql);
        	if(mysqli_num_rows($result)>0){
        		while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>{$row['st_id']}</td>";
                    echo "<td>{$row['st_name']}</td>";
                    echo "<td>{$row['gender']}</td>";
                    echo "<td>{$row['post']}</td>";
                    echo "<td>{$row['mobile']}</td>";
                    echo "<td><a href='add.php'>新增</a>/<a href='updata.php? st_id={$row['st_id']}'>修改</a>/<a href='delete.php? st_id={$row['st_id']}'>删除</a></td>";
                    echo "</tr>";

                }
            }
        ?>
    </table>
</div> 
<script>
    //删除行;(obj代表连接对象)
    function deleteRow(obj){
      //获取tr对象;
        var mytd = obj.parentNode;
        alert(mytd.innerHTML);
    } 
</script> 

