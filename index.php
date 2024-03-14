<!DOCTYPE HTML>
<html>
<head>
<title> Login Admin Page :: </title>
<?php
error_reporting(0);
$msg = function ($m) {
switch($m) {
case 21:
echo "<script>alert('Your password not match')</script>";
break;

case 31:
echo "<script>alert('Your Username not match')</script>";
}
};
$msg($_GET['msg']);
?>
</head>
<body>
<div id="form">
<form method = "post" action="admin.php">
<p><input type="text" name="username" placeholder="username" require></p>
<p><input type="password" name="password" placeholder="password" require></p>
<p><input type="submit" value="Login" name="Login" placeholder="USER-NAME" require></p>
</form>
</div>
</body>
</html>
