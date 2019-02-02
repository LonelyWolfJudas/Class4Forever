<!DOCTYPE html>
<?php
require "clean.php";cleanup();
require "../../func/common.php";
$online = new get_online();
?>
<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>ConTRoL | HOME</title>
    <meta charset="UTF-8" />
</head>
<!-- =========BODY========= -->
<body>
<?php echomap(); ?>
    <hr />
    <hr />
    <div class="online">
        <table border="1">
            <caption>当前在线人数: <?php echo $online->number(); ?></caption>
            <tr>
                <th>ID</th>
                <th>IP</th>
                <th>最后一次操作</th>
            </tr>
<?php
    $members = $online->desc();
    $shown = 0;
    foreach ($members as $value)
    {
        echo <<<table
            <tr>
                <td>{$value["id"]}</td>
                <td>{$value["ip"]}</td>
                <td>{$value["last_action"]}</td>
            </tr>
table;
    }
?>
        </table>
    </div>
</body>
