<?php
@$link=mysql_connect('localhost','root','aghuizhang') or die("J could not connet DB ".mysql_error());
@mysql_select_db("cms",$link) or die('���ݱ����Ӵ���'.mysql_error());
@mysql_query("set names 'utf8'");
?>