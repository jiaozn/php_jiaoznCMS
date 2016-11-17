<?php
@$link=mysql_connect('localhost','root','aghuizhang') or die("J could not connet DB ".mysql_error());
@mysql_select_db("cms",$link) or die('数据表连接错误'.mysql_error());
@mysql_query("set names 'utf8'");
?>