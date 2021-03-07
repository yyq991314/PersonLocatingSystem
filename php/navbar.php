<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>YanCms左侧导航栏</title>
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/jquery-ui-1.8.custom.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function () {
//#title代表页面中点击的元素
$(".title").click(function () {
var con = $(this).html();
//#getTitle代表页面中想要得到title的值元素
$("#getTitle").html(con);
//$(this).attr('href')获取超链接
var con1 = $(this).attr('href');
// $("#getTitle").attr("href", "con1");
// alert(con1);
});
});
</script>
<script type="text/javascript">
jQuery().ready(function () {
jQuery("#navigation").accordion({
header: '.head',
event: 'click',
fillSpace: true,
animated: 'bounceslide'
});
});
</script>
<link href="css/left.css" rel="stylesheet" type="text/css" />
</head>
<body style="background-color:#e6f4fa;" >
<div class="subMenuTitle" id="getTitle"><a href="#">主功能菜单</a></div>
<div style="height:100%;">
<ul id="navigation">
<li>
<a class="head">类别管理</a>
<ul>
<li class="title">
<a href="#1233333" >博文列表</a>
</li>


<li class="title">
<a href="#">添加博文</a>
</li>
</ul>
</li>
<li>
<a class="head">类别管理</a>
<ul>
<li>
<a href="#" target="rightFrame"> 类别列表</a>
</li>
</ul>
</li>
<li>
<a class="head">友情链接</a>
<ul>
<li>
<a href="#" target="rightFrame"> 链接列表</a>
</li>
<li>
<a href="#" target="rightFrame">添加链接</a>
</li>


</ul>
</li>
<li>
<a class="head">系统管理</a>
<ul>
<li>
<a href="#" target="rightFrame">修改管理员密码</a>
</li>




</ul>
</li>


<li>
<a class="head">权限管理</a>
<ul>
<li>
<a href="#" target="rightFrame">暂未开放</a>
</li>
<li>
<a href="#" target="rightFrame">暂未开放</a>
</li>




</ul>


</li>
</ul>
</div>


</body>
</html>
