<!DOCTYPE html>
<?php
require_once "../../func/common.php";
$db = new mysqli("localhost","C4F","Class4Forever","C4F_CTRL");
$key = get("COOKIE","C4F_CTRL_KEY");
$ip = $_SERVER["REMOTE_ADDR"];
$ips = $db->query("SELECT IP FROM black_ip");
if ($key == "")
{
	header("location:http://".$_SERVER["HTTP_HOST"]."/.control/index.html");
}
else
{
	if ($key != "qazwsxedcrfvtgbyhnujmik,ol.p;/")
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
    else
    {
        header("location:http://{$_SERVER["HTTP_HOST"]}/.control/.ctrl/HOME.php");
    }
}
?>
