<?
include('header.php');
include('conn.php');
@mysql_select_db("cms",$link) or die('数据表连接错误'.mysql_error());
@mysql_query("set names 'utf8'");

if(!empty($_POST['sub'])){
	if(!empty($_POST['uname'])){
		$uname=$_POST['uname'];
		$upassword=$_POST['upassword'];
		$sql="select * from `user` where `uname`='$uname'";
		$result=mysql_query($sql);
		
		if($result){
			$arr=mysql_fetch_array($result);
			if(!empty($_POST['upassword'])){
				if($_POST['upassword']==$arr['upassword']){
					$_SESSION['is_login']=$uname;
					echo "<script>alert('登录成功');location.href='rizhi.php';</script>";
				}else{
					echo "密码错误";
				}
			}else{
				echo "密码不能为空";
			}
		}else{
			echo "用户名不存在";
		}
	}else{
		echo "用户名不能为空";
	}
}else{
	echo '没有检测到sub提交';
}
?>
