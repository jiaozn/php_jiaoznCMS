<?php
include 'header.php';
?>
<html>
<body>
<h1>登录</h1>
<form action="checkLogin.php" name="loginForm" method="post">
用户名：<input type="text" name="uname"><br>
密码：<input type="password" name="upassword"><br>
<input type="submit" name="sub" value="登录">
</form>
</body>
</html>
<?php
include 'foot.php';
?>