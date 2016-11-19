<?php
include('header.php');
include('conn.php');

if(!empty($_FILES)){
	$uploadDir="./upload/";
	//move_uploaded_file();
	print_r($_FILES['file']['tmp_name']);
	move_uploaded_file($_FILES['file']['tmp_name'],$uploadDir.$_FILES['file']['name']);
	echo "<script>alert('上传成功');location.href='fileShow.php';</script>";
}

?>
<h1>文件上传</h1>
<form action="" name="fileAddForm" method="post" enctype="multipart/form-data">
<input type="file" name="file" value="浏览"><br>
<input type="hidden" name="MAX_FILE_SIZE" value="2000000000">
<input type="submit" name="sub" value="submit">
</form>
<?php
include('foot.php');
?>