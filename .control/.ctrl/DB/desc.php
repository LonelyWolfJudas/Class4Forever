<?php
require "../clean.php";cleanup();
$dbname = $_GET["dbname"];
$tbname = $_GET["tbname"];
$db = new mysqli("localhost","C4F","Class4Forever",$dbname);
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="../style.css" type="text/css" />
    <meta charset="UTF-8" />
    <title>ConTRoL | Database | <?php echo $dbname; ?> | <?php echo $tbname; ?></title>
</head>
<body>
<a href="table.php?<?php echo $dbname; ?>">&larr;后退</a>
<?php
map();
$result = $db->query("DESC {$tbname}");
echo <<<table
    <table border="1">
        <caption>数据详情</caption>
        <tr>
            <th>数据名</th>
            <th>数据类型</th>
            <th>是否可空</th>
            <th>Key</th>
            <th>默认</th>
            <th>Extra</th>
        </tr>

table;
while ($value = $result->fetch_assoc())
{
    $field = $value["Field"];
    $type = $value["Type"];
    $null = $value["Null"];
    $key = $value["Key"];
    $default = $value["Default"];
    $extra = $value["Extra"];
    echo <<<table
        <tr>
            <td>{$field}</td>
            <td>{$type}</td>
            <td>{$null}</td>
            <td>{$key}</td>
            <td>{$default}</td>
            <td>{$extra}</td>
        </tr>

table;
}
?>
    </table>
</body>
