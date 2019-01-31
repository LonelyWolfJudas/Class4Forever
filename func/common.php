<?php
function get($method,$get)
{
	if ($method == "GET")
	{
		return isset($_GET[$get]) ? $_GET[$get] : "" ;
	}
	else if ($method == "POST")
	{
		return isset($_POST[$get]) ? $_POST[$get] : "" ;
	}
	else
	{
		return "!!! Wrong method !!!";
	}
}
?>
