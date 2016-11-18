<?php
include('header.php');
include('conn.php');
if(!empty($_POST['sub'])){
	$sql="update `rizhi` set `title`='".$_POST['title']."',`content`='".$_POST['content']."' where `rizhiid`='".$_POST['rizhiid']."'";
	$result=mysql_query($sql,$link);
	echo "<script>alert('更新成功');location.href='rizhi.php';</script>";
}else{

	$sql="select * from `rizhi` where `rizhiid`='".$_GET['rizhiid']."';";
	$result=mysql_query($sql,$link);
	$arr=mysql_fetch_array($result);
?>
<h1>修改日志</h1>
<form action="" name="formRizhiUpdate" method="post">
<input type="hidden" name="rizhiid" value="<?php echo  $arr['rizhiid'];?>">
标题：<input type="text" name="title" value="<?php echo  $arr['title'];?>"><br>
正文：<textarea name="content"><?php echo  $arr['content'];?></textarea><br>
<input type="submit" name="sub" value="提交">
</form>
<?php
	
	}

?>