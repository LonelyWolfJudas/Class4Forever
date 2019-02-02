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
    else if ($method == "COOKIE")
	{
		return isset($_COOKIE[$get]) ? $_COOKIE[$get] : "" ;
	}
	else
	{
		return FALSE;
	}
}

function online()
{
    $_db = new mysqli("localhost","C4F","Class4Forever","C4F_CTRL");
    $_ip = $_SERVER["REMOTE_ADDR"];
    $_id = session_id();
    $_result = $_db->query("SELECT * FROM online");
    $ON = FALSE;
    while ($_value = $_result->fetch_assoc())
    {
        if ($_id == $_value["ID"])
        {
            $ON = TRUE;
        }
    }
    $_time = time() + 300;
    if ($ON == TRUE)
    {
        $_db->query("UPDATE online SET LAST = {$_time} , LAST_ACTION = NOW() WHERE ID = '{$_id}'");
    }
    else
    {
        $_db->query("INSERT INTO online (ID , IP , LAST ,LAST_ACTION) VALUES('{$_id}' , '{$_ip}' , {$_time} , NOW())");
            
    }
    $_db->query("DELETE FROM online WHERE LAST < {$_time}");
 

}

class get_online
{
    function number()
    {
        online();
        $db = new mysqli("localhost","C4F","Class4Forever","C4F_CTRL");
        $result = $db->query("SELECT * FROM online");
        $num = 0;
        while ($value = $result->fetch_assoc())
        {
            $num++;
        }
        return $num;
    }
    function desc()
    {
        online();
        $db = new mysqli("localhost","C4F","Class4Forever","C4F_CTRL");
        $result = $db->query("SELECT * FROM online");
        $desc = array();
        $num = 0;
        while ($value = $result->fetch_assoc())
        {
            $num++;
            $desc[$num] = array("id" => $value["ID"] , "ip" => $value["IP"] , "last" => $value["LAST"] , "last_action" => $value["LAST_ACTION"]);
        }
        return $desc;
    }
}
?>
