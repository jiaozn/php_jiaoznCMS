<?php
include('header.php');
include('conn.php');
$sql="delete from `rizhi` where `rizhiid`='".$_GET['rizhiid']."'";
mysql_query($sql,$link);
echo "<script>alert('删除成功！');location.href='rizhi.php';</script>";
?>