<?php
function cleanup()
{
    if (isset($_COOKIE["C4F_CTRL_KEY"]))
    {
        if ($_COOKIE["C4F_CTRL_KEY"] != "qazwsxedcrfvtgbyhnujmik,ol.p;/")
        {
            header("location:http://{$_SERVER["HTTP_HOST"]}/index.php");
        }
    }
    else
    {
        header("location:http://{$_SERVER["HTTP_HOST"]}/index.php");
    }
}
function echomap()
{
    echo <<<map
    <table class="map" border="1">
        <tr>
            <td><a href="HOME.php">|HOME|</a></td>
            <td><a href="DB.php">|Database|</a></td>
        </tr>
    </table>

map;
}
?>
