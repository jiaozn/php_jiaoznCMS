<?php
include 'header.php';
include 'conn.php';
$sql="select * from `rizhi`";
$result=mysql_query($sql);

echo '
<body>
<h1>文章分类</h1>
<table border="1">
<tr>
<td>id</td>
<td>标题</td>
<td>正文</td>
<td>作者</td>
<td>时间</td>
<td>操作</td>
<tr>
';

if($result){
	while($row=mysql_fetch_array($result)){
			echo "
			<tr>
			<td>$row[0]</td>
			<td>$row[1]</td>
			<td>$row[2]</td>
			<td>$row[3]</td>
			<td>date('M j,g:i,A',$row[4]);</td>
			<td><a href='#'>编辑  |</a><a href='#'>   删除</a></td>
			<tr>
			";
	}
}else{
	echo "查询失败！";
}

echo '</table>';

//$arr=mysql_fetch_array($result);
//print_r($arr['rizhiid']);


?>


</body>
</html>
<?php
include 'foot.php';
?>