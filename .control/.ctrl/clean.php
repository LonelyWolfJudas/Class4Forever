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
?>
