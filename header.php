<?php
session_start();
?>
<html>
<head>
<title>MyCMS</title>
</head>

<h1>Try CMS-我的CMS</h1>


<?php
if(!empty($_SESSION['is_login'])){
	echo "欢迎  ".$_SESSION['is_login'].",";
	echo "<a href='logout.php'>登出  </a>";
}else{
	echo "<a href='index.php'>登陆  </a>";
}
?>
<a href='userAdd.php'>|   注册</a>
<ul>
<li>
<a href='rizhi.php'>1.日志</a>
</li>
	<ul>
	<li><a href='rizhiAdd.php'>----1.1新增日志</a></li>
	<li><a href='rizhi.php'>----1.2编辑日志</a></li>
	<li><a href='rizhi.php'>----1.3删除日志</a></li>
	</ul>
<li>
<a href='#'>2.文件</a>
</li>
<li>
<a href=''>3.管理</a>
</li>
</ul>
<hr>
</html>



