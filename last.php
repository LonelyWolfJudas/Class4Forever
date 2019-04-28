<!DOCTYPE html>

<?php
$starttimestr = "09:00:00";
$endtimestr = "2019-6-21 00:00:00";
$starttime = strtotime($starttimestr);
$endtime = strtotime($endtimestr);
$nowtime = time();
?>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>My Qnurye`s Classmates-website</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
    	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="icon" href="image/icon.jpg" type="image/jpg" />
        <script type="text/javascript">
 $(function(){ 
    show_time();
}); 

function show_time(){ 
    var time_start = new Date().getTime(); //设定当前时间

    var time_end =  new Date('<?=$endtime*1000?>').getTime(); //设定目标时间
    // 计算时间差 
    var time_distance = time_end - time_start; 
    /*判断活动是否结束*/
    if(time_distance<0){

        int_day=0;
        int_hour=0;
        int_minute=0;
        int_second=0;
    }else{
          // 天
    var int_day = Math.floor(time_distance/86400000) 
    time_distance -= int_day * 86400000; 
    // 时
    var int_hour = Math.floor(time_distance/3600000) 
    time_distance -= int_hour * 3600000; 
    // 分
    var int_minute = Math.floor(time_distance/60000) 
    time_distance -= int_minute * 60000; 
    // 秒 
    var int_second = Math.floor(time_distance/1000) 
    // 时分秒为单数时、前面加零 
    if(int_day < 10){ 
        int_day = "0" + int_day; 
    } 
    if(int_hour < 10){ 
        int_hour = "0" + int_hour; 
    } 
    if(int_minute < 10){ 
        int_minute = "0" + int_minute; 
    } 
    if(int_second < 10){
        int_second = "0" + int_second; 
    } 
    }

    // 显示时间 
    $("#day_show").val(int_day); 
    $("#hour_show").val(int_hour); 
    $("#minute_show").val(int_minute); 
    $("#second_show").val(int_second); 
    // 设置定时器
    setTimeout("show_time()",1000); 
}
</script>
    </head>
    <body>

<!-- 导航栏开始 -->  
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="container-fluid"> 
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#navbar-collapse">
                        <span class="sr-only">导航</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../index.html">C4F</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#" title="返回主页">
                                <span class="glyphicon glyphicon-home"></span>
                                主页
                        </a></li>
                        <li><a href="write/index.php" title="给我写一篇同学录吧!">
                            <span class="glyphicon glyphicon-pencil"></span>
                            写一篇同学录
                        </a></li>
                        <li><a href="../about.html" title="关于本站">
                            <span class="glyphicon glyphicon-bell"></span>
                            关于本站
                        </a></li>
                        <li><a href="pay.html" title="给我捐赠">
                            <span class="glyphicon glyphicon-qrcode"></span>
                            捐赠
                        </a></li>
                    </ul>
                </div>
            </div>
        </nav>
<!-- 导航栏结束 -->
<!-- TimeZone -->
        <div class="text-center box">
            <span class="text-danger content"><h1>
                <input type="text" id="day_show">天<input type="text" id="hour_show">时<input type="text" id="minute_show">分<input type="text" id="second_show">
            </h1></span>
        </div>
<!-- TZend -->
    </body>
</html>