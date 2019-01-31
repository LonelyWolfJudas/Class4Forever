<!DOCTYPE html>
<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="main.css" />
	<title>在这里写下真心的话！</title>
</head>
<body>
	<fieldset>
		<legend>带<b>*</b>符号的请务必认真填写</legend>
		<form action="check/check.php" method="POST">
			<hr />
			名字<b>*</b>: <input type="text" name="name" /><br /><br />
			<hr />
			性别<b>*</b>: <select name="sex">
				<option value="没有长处也没有缺点"</selected>没有长处也没有缺点</option>
				<option value="男人">男人</option>
				<option value="女人">女人</option>
				<option value="男孩">男孩</option>
				<option value="女孩">女孩</option>
			</select><br /><br />
			<hr />
			<!--这里的日期是用php输出的，不懂可以联系我哟~~~-->
<?php
	/*=====-----Born Date Begin-----=====*/
	$year = 1900;
	$month = $day = 1;
	echo "\t\t\t出生日期<b>*</b>: <select name=\"year\">\n";
	while ($year <= 2019)
	{
		echo "\t\t\t\t<option value=\"{$year}\"";
		if ($year == 2000)
		{
			echo "selected";
		}
		echo ">{$year}</option>\n";
		$year++;
	}
	echo "\t\t\t</select>\n<select name=\"month\">\n";
	while ($month <= 12)
	{
		echo "\t\t\t\t<option value=\"{$month}\">{$month}</option>\n";
		$month++;
	}
	echo "\t\t\t</select>\n\t\t\t<select name=\"day\">\n";
	while ($day <= 31)
	{
		echo "\t\t\t\t<option value=\"{$day}\">{$day}</option>\n";
		$day++;
	}
	echo "\t\t\t</select><br />\n";
	/*=====-----Born Date END-----=====*/
?>
			<hr />
			愿望: <textarea rows="3" cols="17" name="wish"></textarea><br /><br />
			<hr />
			最喜欢的歌曲: <input type="text" name="song" /><br /><br />
			<hr />
			最喜欢的颜色: <input type="text" name="color" /><br /><br />
			<hr />
			最喜欢......<textarea rows="3" cols="17" name="favorite"></textarea><br /><br />
			<hr />
			QQ号码<b>*</b>: <input type="text" name="QQ" /><br /><br />
			<hr />
			电话号码: <input type="text" name="tel" /><br /><br />
			<hr />
			E-mail: <input type="text" name="email" /><br /><br />
			<hr />
			最想对我说<b>*</b>:<br /><textarea name="me" rows="10" cols="30" placeholder="光阴似箭，岁月如梭"></textarea><br />
			<hr /><hr />
			<input type="submit" value=" 	 我 填 好 了 	 " />
			<hr />
		</form>
	</fieldset>
</body>
</html>
