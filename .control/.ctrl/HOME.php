<!DOCTYPE html>
<?php
require "clean.php";cleanup();
require "../../func/common.php";
?>
<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>ConTRoL | HOME</title>
    <meta charset="UTF-8" />
</head>
<!-- =========BODY========= -->
<body>
    <table class="map">
        <tr>
            <td><a href="HOME.php">|HOME|</a></td>
            <td><a href="DB.php">|Database|</a></td>
        </tr>
    </table>
    <div class="online">
        当前在线人数: <?php echo get_online("int");$members=array();$members=get_online('array');?>
        <table>
            <tr>
                <td>ID</td>
                <td>IP</td>
                <td>最后一次操作</td>
            </tr>
<?php
    $shown = 0;
    while ($shown <= count($members))
    {
        $shown += 1;
        echo <<<table
            </tr>
                <td>{$members[$shown]["ID"]}</td>
                <td>{$members[$shown]["IP"]}</td>
                <td>{$members[$shown]["Last_action"]}</td>
            </tr>\n
table;
    }
?>
</body>
