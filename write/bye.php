<!DOCTYPE html>
<html>
    <head>
        <?php
        $name = $_SESSION['name'];
        if (!$name)
        {
            //header("Location:http://qnurye.wonzan.com/");
        }
        if ($name == "邓琳静")
        {
            header("Location:http://qnurye.wonzan.com/dlj.html");
        }
        ?>
        <meta charset="UTF-8" />
        <title>Thanks for your support !</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
    	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="icon" href="../image/icon.jpg" type="image/jpg" />
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
                    <li><a href="../index.html" title="返回主页">
                            <span class="glyphicon glyphicon-home"></span>
                            主页
                    </a></li>
                    <li><a href="../../lost_time/index.html" title="中考倒计时">
                        <span class="glyphicon glyphicon-time"></span>
                        中考倒计时
                    </a></li>
                    <li><a href="index.php" title="给我写一篇同学录吧!">
                        <span class="glyphicon glyphicon-pencil"></span>
                        写一篇同学录
                    </a></li>
                    <li><a href="../about.html" title="关于本站">
                        <span class="glyphicon glyphicon-bell"></span>
                        关于本站
                    </a></li>
                    <li><a href="../pay.html" title="给我捐赠">
                        <span class="glyphicon glyphicon-qrcode"></span>
                        捐赠
                    </a></li>
                </ul>
            </div>
            </div>
        </nav>
<!-- 导航栏结束 -->
        <div class="panel panel-success text-center">
            <div class="panel-heading">
                <span class="panel-title glyphicon glyphicon-ok"></span>
                <span class="panel-title"><?php echo $name; ?> 谢谢您的支持 ！</span>
            </div>
            <div class="panel-body text-info">
                <a href="../pay.html" title="帮助我！">
                    <span class="glyphicon glyphicon-qrcode"></span>
                    扫码给我捐钱 ！
                </a>
            </div>
        </div>
		<hr /><hr />
		<p class="text-muted text-center"><small>
            &copy; 2019 <a href="#" title="Qnurye's Classmates-website">Qnurye</a> . All rights ignored .
        </small></p>
        <div style="height:1000px;"></div>
	</body>
</html>