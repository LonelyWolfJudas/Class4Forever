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
    $_time = time();
    if ($ON == TRUE)
    {
        $_db->query("UPDATE online SET LAST = {$_time} WHERE ID = '{$_id}'");
        echo $_db->errno() . $_db->error();
    }
    else
    {
        $_db->query("INSERT INTO online (ID , IP , LAST ,LAST_ACTION) VALUES('{$_id}' , '{$_ip}' , {$_time} , NOW())");
            
    }
    $_db->query("DELETE FROM online WHERE LAST < {$_time+300}");
 

}
function get_online($type)
{
    $_db = new mysqli("localhost","C4F","Class4Forever","C4F_CTRL");
    $_id = session_id();
    $_ip = $_SERVER["REMOTE_ADDR"];
    online();
    $_result = $_db->query("SELECT * FROM online");
    $_member = 0;
    $_members = array();
    while ($_value = $_result->fetch_assoc())
    {
        $_member += 1;
        $_members[$_member] = array("ID" => $_value["ID"] , "IP" => $_value["IP"] , "Last_action" => $_value["LAST_ACTION"]);
    }
    if ($_type="int")
    {
        return $_member;
    }
    else
    {
        return $_members;
    }
}
?>
