<?php
header("content-type:text/html;charset=utf-8");        //设置编码
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>CHECK</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
    	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="icon" href="image/icon.jpg" type="image/jpg" />
    </head>
    <body>
        <?php
        require_once "getpost.php";
        $name = post('name');
        $sex = post('sex');
        $born_date = post('born_date');
        $wish = post('wish');
        $color = post('color');
        $song = post('song');
        $person = post('person');
        $qq = post('qq');
        $tel = post('tel');
        $email = post('email');
        $SAY = post('SAY');
        $follow = '?';
        /*检查提交表单必要字段是否为空*/
        if (!$name || !$born_date || !$qq || !$SAY)
        {
            if (!$name)
            {
                echo $follow .= 'name_is_null=*名字为必填项&';
            }
            if (!$sex)
            {
                echo $follow .= 'sex_is_null=*你是男的女的?&';
            }
            if (!$born_date)
            {
                echo $follow .= 'born_date_is_null=*出生日期必填&';
            }
            if (!$qq)
            {
                echo $follow .= 'qq_is_null=*你不会没有QQ吧?<br/>&';
            }
            if (!$SAY)
            {
                echo $follow .= 'SAY_is_null=*你就没什么对我说的吗?';
            }
            $url = 'http://qnurye.wonzan.com/write/index.php' . $follow;
            header("Location:".$url);
            exit();
        }

        /*保存图片*/
        if ($_FILES["file"]["error"] > 0) //排除错误
        {
            echo "错误：" . $_FILES["file"]["error"] . "<br>";
        }
        $temp = explode(".", $_FILES["file"]["name"]);  //
        echo $_FILES["file"]["size"];                   //
        $extension = end($temp);                        // 获取文件后缀名
        $_FILES["file"]["name"] = $name . '.' . $extension; //文件名为:用户姓名+.+文件后缀名
        while (file_exists("../faces/" . $_FILES["file"]["name"])) // 判断 faces 目录是否存在该文件
        {
            $_FILES["file"]["name"] = $name . rand(100,9999) . $extension; //文件名为:姓名+随机数+.+文件后缀名
        }
        move_uploaded_file($_FILES["file"]["tmp_name"],"../faces/".$_FILES["file"]["name"]);

        /*插入数据库*/
        $db = new mysqli('数据库服务器','数据库用户名','数据库用户密码','你的数据库');
        $query = <<<mysql
INSERT INTO SOVE                                           
(NAME,
SEX,
BORN,
COLOR,
SONG,
FAVORITE,
WISH,
QQ,
TEL,
Email,
ME,
AT
)
VALUES                                                     
(                                                                 
        '{$name}',                                                
        '{$sex}',                                                  
        '{$born_date}',
        '{$color}',
        '{$song}',
        '{$person}',
        '{$wish}',
        '{$qq}',
        '{$tel}',
        '{$email}',
        '{$SAY}',                                                   
        NOW()                                              
)
mysql;
        $db->query('SET NAMES UTF8'); //设置编码,防止中文乱码
        if (!$db->query($query))
        {
            /*输出错误信息*/
            echo <<<html
        <div class="panel panel-danger">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-remove"></span>
                数据库错误 !!!
            </div>
            <div class="panel-body">
                请联系网站管理员:<br/>
                <a href="mailto:邮箱" title="邮箱联系我">
                    Hacker_Orange@outlook.com
                </a><br/>
                详情:<br/>{$db->errno}
                <pre class="pre-scrollable text-muted">
                    {$db->error}
                </pre>
            </div>
        </div>      
html;
        }
        else
        {
            session_start();
            $_SESSION['name'] = $name;                                              //
            header("Location:http://qnurye.wonzan.com/write/bye.php?name={$name}"); //掩耳盗铃[滑稽]
        }
        ?>
		<p class="text-muted text-center"><small>
            &copy; 2019 <a href="#" title="Qnurye's Classmates-website">Qnurye</a> . All rights ignored .
        </small></p>
        <div style="height:1000px;"></div>
    </body>
</html>