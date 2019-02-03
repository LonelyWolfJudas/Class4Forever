<?php
require "../clean.php";cleanup();
$dbname = $_GET["dbname"];
$db = new mysqli("localhost","C4F","Class4Forever",$dbname);
?>
<!DOCTYPE html>
<head>
    <link re="stylesheet" href="../style.css" type="text/css" />
    <meta charset="UTF-8" />
    <title>ConTRoL | Database | Table | <?php echo $dbname; ?></title>
</head>
<body>
<?php
map();
echo <<<table
    <table border="1">
        <caption>数据表</caption>
        <tr>
            <th>数据表名</th>
            <th></th>
        </tr>

table;
$result = $db->query("SHOW TABLES");
while ($value = $result->fetch_assoc())
{
    $tbname = $value["Tables_in_{$dbname}"];
    echo <<<table
        <tr>
            <td>{$tbname}</td>
            <td><a href="desc.php?dbname={$dbname}&tbname={$tbname}"]}>USE</a></td>
        </tr>
table;
}
echo <<<table
    </table>
</body>
table;
?>
