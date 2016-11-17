<?php
include 'header.php';
if(!empty($_POST['sub'])){
	$uname=$_POST['uname'];
	$upassword=$_POST['upassword'];
	$uage=$_POST['uage'];
	$udes=$_POST['udes'];
	include('conn.php');
	@mysql_select_db('cms',$link) or die("数据库连接错误");
	$sql="insert into `user` set `uname`='$uname',`upassword`='$upassword',`uage`='$uage',`udes`='$udes'";
	$result=mysql_query($sql);
		if($result){
			$_SESSION['is_login']=$uname;
			echo "<script>alert('注册成功');location.href='rizhi.php';</script>";
		}else{
			echo "注册失败了呢....";
		}
	}
?>
<html>
<body>
<h1>注册</h1>
<form action="" name="userAddForm" method="post">
用户名：<input type="text" name="uname"><br>
密码：<input type="password" name="upassword"><br>
年龄：<input type="text" name="uage"><br>
介绍：<textarea name="udes"></textarea><br>
<input type="submit" name="sub" value="注册">
</form>
</body>
</html>
<?php
include 'foot.php';
?>
