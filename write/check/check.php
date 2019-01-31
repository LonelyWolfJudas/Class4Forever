<?php
	require_once "../../func/common.php";
	$name = get("POST","name");
	$sex = get("POST","sex");
	$year = get("POST","year");
	$month = get("POST","month");
	$day = get("POST","day");
	$color = get("POST","color");
	$favorite = get("POST","favorite");
	$wish = get("POST","wish");
	$qq = get("POST","QQ");
	$tel = get("POST","tel");
	$me = get("POST","me");
	$song = get("POST","song");
	$email = get("POST","email");
	if (strlen($month) < 2)
	{
		$month = "0" .$month;
	}
	if (strlen($day) < 2)
	{
		$day = "0" .$day;
	}
	$born = $year."-".$month."-".$day;
	echo $name . "\n" . $sex . "\n" .$born . "\n" .$color ."\n" .$favorite."\n" . $wish . "\n" . $qq . "\n" . $tel ."\n" . $me;
	if (!$name || !$sex || !$born || !$me)
	{
		header("location:http://" . $_SERVER["HTTP_HOST"] . "/write/main.php");
	}
	else
	{
		$db = new mysqli("localhost","C4F","Class4Forever","Class4Forever");
		if (!mysqli_connect_error())
		{
			$query = <<<query
INSERT INTO SOVE 
(NAME,SEX,BORN,COLOR,SONG,FAVORITE,WISH,QQ,TEL,Email,ME,AT)
VALUES
(
	'{$name}',
	'{$sex}',
	'{$born}',
	'{$color}',
	'{$song}',
	'{$favorite}',
	'{$wish}',
	'{$qq}',
	'{$tel}',
	'{$email}',
	'{$me}',
	NOW()
)
query;
			$result = $db->query($query);
			if (!$result)
			{
				echo "Query failed";
				echo "<br />".$db->error.$db->errno;
			}
		}
		else
		{
			echo "database connect error";
			echo $db->error . "<br />" . $db->errno;
		}
	}
?>
