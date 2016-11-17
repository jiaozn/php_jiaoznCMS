<?php
include 'header.php';
?>
<html>
<body>
<h1>文章分类</h1>
<?php
echo $_SESSION["is_login"];
if(!empty($_SESSION['is_login'])){
	echo "<a href='logout.php'>登出</a>";
	echo "欢迎，".$_SESSION['is_login'];
}else{
	echo "<a href='index.php'>登陆</a>";
}
?>
</body>
</html>
<?php
include 'foot.php';
?>