<!DOCTYPE HTML>
<?php
require "../../func/common.php";
require "clean.php";
cleanup();
?>
<head>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="../../style/css.css" type="text/css" />
    <meta charset="UTF-8" />
    <title>ConTRoL | Database</title>
<head>
<?php
map();
$db = new mysqli("localhost","C4F","Class4Forever","Class4Forever");
echo <<<table
    <table border="1" class="online">
        <caption>数据库</caption>
        <tr>
            <th>数据库名</th>
            <th></th>
        </tr>

table;
$result = $db->query("SHOW DATABASES");
while ($value = $result->fetch_assoc())
{
    
    echo <<<table
        <tr>
            <td>{$value["Database"]}</td>
            <td><a href="DB/table.php?dbname={$value["Database"]}">USE</a></td>
        </tr>

table;
}
?>
    </table>
</body>
