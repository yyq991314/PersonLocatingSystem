<div class="nav">
    <ul id="menu">
        <li class="first" ><a class="nava" href="index.php" >首页</a></li>
        <li class="second"><a class="nava" href="add.php">新增</a></li>
        <li class="third"><a class="nava" href="search.php">查询</a></li>
        <li class="fourth"><a class="nava" href="load.php">退出</a></li>
    </ul>
</div>	  
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script> 
<script language="javascript" type="text/javascript">
$(document).ready(function (){
  $("li").each(function(index){
    $(this).click(function(){ 
      $("li").removeClass("first");
      $("li").eq(index).addClass("first");
    });
  });
});
</script>
