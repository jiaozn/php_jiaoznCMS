<html>
<head>
<title>MyCMS</title>
</head>

<h1>Try CMS-中文示例</h1>

<a href='userAdd.php'>注册</a>
<?php
if(!empty($_SESSION['is_login'])){
	echo "<a href='logout.php'>登出</a>";
	//echo "欢迎，$_SESSION['is_login']";
}else{
	echo "<a href='index.php'>登陆</a>";
}
?>
<ul>
<li>
<a href='rizhi.php'>日志</a>
</li>
<li>
<a href='#'>文件</a>
</li>
</ul>
<hr>
</html>



