<!DOCTYPE html>
<?php
require "func/common.php";
online();
$db =  @new mysqli("localhost","C4F","Class4Forever","Class4Forever");
if($db->connect_error)
{
	echo "<h1><strong>连接不到数据库了！请您稍后再重试,或者联系Qnurye:<br />邮箱:hacker_orange@outlook.com<br />QQ:1484618847<br />抱歉!!<br /><br />错误代码:<br />";
	echo $db->connect_errno . '<br />' . $db->connect_error;
	echo "<br /><br /></strong></h1>";
	exit();
}
?>
<html>
		<head>
				<meta charset="UTF-8" />
                <link rel="shortcut icon" href="./image/shortcut.jpg" />
                <title>Class 4 Forever 永远4班</title>
                <link href="./style/css.css" type="text/stylesheet"  rel="stylesheet" />
	</head>
	<body class="login">
		<div class="floatwindow">
			<br />
			<fieldset>
				<legend>请输入您的名字</legend>
<?php
$name = get("POST","name");
if ($name=='')
{
	echo <<<main
				<br /><br />
				<form action="" method="POST" accept-charset="UTF-8">
					<input type="text" name="name" />
					<input type="submit" value="确定" />
				</form>
main;
}
else
{
	if ($name)
	{
		$result = $db->query("SELECT * FROM default_names");
		if (!$result)
		{
			echo "对不起，数据查询失败！";
			exit();
		}
		else
		{
			while($row = $result->fetch_assoc())
			{
				if ($name == $row["NAME"])
				{
					$query= <<<query
SELECT LOGGED FROM default_names
WHERE NAME = '{$name}'
query;
					if (!$db->query($query))
					{
						$query = <<<query
UPDATE default_names
SET LOGGED=NOW()
WHERE NAME = '{$name}'
query;
						$db->query($query);
					}
					setcookie("user_name",$name,time()+60*60*24*10);
					header("location:http://".$_SERVER["HTTP_HOST"] . "/home.php?user_name=" . $name);
					continue;
				}
			}
			echo "数据库中没有您的名字";
		}
	}
}
?>
				<br />
				<br />
				<hr />
				<br />
			</fieldset>
                </div>
	</body>
</html>
