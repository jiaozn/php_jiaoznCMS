<?php
include('header.php');

if(!empty($_POST['sub'])){
	$title=$_POST['title'];
	$content=$_POST['content'];
	$author=$_POST['author'];
	date_default_timezone_set('PRC');
	$t=date("Y-m-d H:i:s");
	//$t = date_create()->format('Y-m-d H:i:s');
	$datetime=date('M j,g:i,A',time());
	include('conn.php');
	$sql="insert into `rizhi`(rizhiid,title,content,author,date) values(null,'$title','$content','$author','$t')";
	$result=mysql_query($sql);
	if($result){
			echo "<script>alert('新增文章成功！-- $datetime');location.href='rizhi.php';</script>";
		}else{
			echo "插入失败了呢....".mysql_error();
		}
	
}
?>
<html>
<body>
<form action="" name="rizhiAddForm" method="post">
题目：<input type="text" name="title"><br>
正文：<textarea name="content"></textarea><br>
作者：<input type="text" name="author" value="<?php echo $_SESSION['is_login'] ?>"><br>
<input type="submit" name="sub" value="发表">
</form>
<?php
include('foot.php');
?>
