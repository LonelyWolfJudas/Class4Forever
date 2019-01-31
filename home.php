<!DOCTYPE html>
<head>
	<meta charset="UTF-8" />
<?php
if (!isset($_GET['user_name']) AND !isset($_COOKIE["user_name"]))
{
	echo "<title>您还未登录!</title>";
	header("location:http://" . $_SERVER["HTTP_HOST"] ."/index.php");
}
else
{
	echo "<title>HOME</title>";
}
$name = isset($_GET["user_name"]) ? $_GET["user_name"] : $_COOKIE["user_name"];
//如果get存在就把name赋值get，否则赋值cookie
?>
	<link rel="stylesheet" type="text/css" href="/style/css.css" media="All" />
	<link rel=" shortcut icon" href="image/shortcut.jpg" />
</head>
<body class="home">
	<div class="way_to_write">
		<h1><a href="write/main.php">给Qnurye写一篇同学录</a></h1>
	</div>
</body>
