<?php
include('header.php');
unset($_SESSION['is_login']);
echo "<script>alert('退出登录成功');location.href='index.php';</script>"
?>