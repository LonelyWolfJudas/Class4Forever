<!DOCTYPE html>
<?php
require_once "../../func/common.php";
require "../check.php";
$db = new mysqli("localhost","C4F","Class4Forever","C4f_CTRL");
$key = get("COOKIE","C4F_CTRL_KEY");
if ($key != "")
{
	header("location:http://".$_SERVER["HTTP_HOST"]."/.control/index.php");
}
else
{
	if ($key != "~!@#$%^&*()_+|C4FCTRL|+_)(*&^%$#@!~")
	{
		while ($result = $ips->fetch_assoc())
		{
			if ($result["IP"] = $ip)
			{
				$db->query("UPDATE black_ip SET TIMES = " . $result["TIMES"]+1 .",LAST_DATE=NOW() WHERE IP = ".$ip);
				header("location:http://".$_SERVER["HTTP_HOST"]."/index.php");

			}
		}
		$db->query("INSERT INTO black_ip (IP,TIMES,FIRST_TIME) VALUES('{$ip}',1,NOW()");
		header("location:http://".$_SERVER["HTTP_HOST"]."/index.php");
	}

}
?>
