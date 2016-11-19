<?php
include("header.php");
$path="./upload/";
$dir=scandir($path);
if(!empty($_GET['filename'])){
	unlink($_GET['filename']);
	echo "<script>alert('删除成功！');location.href='fileShow.php';</script>";

}
	echo '<h1>文件列表</h1><table border="true"><tr><td>文件名</td><td>操作</td></tr>';

foreach($dir as $value){
	echo "<tr><td>".$value."</td><td><a href='fileShow.php?filename=$path".$value."'>删除</a></td></tr>";
}
echo "</talbe>";

include("foot.php");
?>