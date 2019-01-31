<?php
require_once "../func/commond.php";
$pwd = get("POST","pwd");
$ok = get("POST","ok");
$db = new mysqli("localhost","C4F","Class4Forever","C4f_CTRL");
$ip = $_SERVER["REMOTE_ADDR"];
$ips = $db->query("SELECT IP FROM black_ip");
while ($result = $ips->fetch_assoc())
{
	if ($result["IP"] = $ip)
	{
		$db->query("UPDATE black_ip SET TIMES = " . $result["TIMES"]+1 .",LAST_DATE=NOW() WHERE IP = ".$ip);
		header("location:http://".$_SERVER["HTTP_HOST"]."/index.php");
	}
}
if ($ok != 3 && $pwd !="C4FCTRL")
{
	$db->query("INSERT INTO black_ip (IP,TIMES,FIRST_TIME) VALUES('{$ip}',1,NOW()");
	header("location:http://".$_SERVER["HTTP_HOST"]."/index.php");
}
else
{
	$pwd = $ok = NULL;
	$db->query("INSERT INTO history (IP,TIME) VALUES('{$ip}',NOW())");
	setcookie("C4F_CTRL_KEY","~!@#$%^&*()_+|C4FCTRL|+_)(*&^%$#@!~",time()+60 * 30);
	header("location:http://".$_SERVER["HTTP_HOST"]."/.control/.ctrl/ctrl.php");
}
?>
