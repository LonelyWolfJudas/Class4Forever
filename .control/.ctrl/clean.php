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
function map()
{
    echo <<<map
    <table class="map" border="1" style="top:0pt;left:0pt;width:100%;" class="map">
        <tr>
            <td style="width=50%;"><a style="text-decoration:none;" href="http://{$_SERVER["HTTP_HOST"]}/.control/.ctrl/HOME.php">|HOME|</a></td>
            <td style="width=50%;"><a style="text-decoration:none;" href="http://{$_SERVER["HTTP_HOST"]}/.control/.ctrl/DB.php">|Database|</a></td>
        </tr>
    </table>

map;
}
?>
