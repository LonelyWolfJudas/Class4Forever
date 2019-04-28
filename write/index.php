<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>write on leaf</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
    	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="icon" href="../image/icon.jpg" type="image/jpg" />
        <?php
        require_once "check/getpost.php";
        $name_err = get('name_is_null') ? " has-error" : '';
        $sex_err = get('sex_is_null') ? " has-error" : '';
        $born_date_err = get('born_date_is_null') ? " has-error" : '';
        $qq_err = get('qq_is_null') ? " has-error" : '';
        $SAY_err = get('SAY_is_null') ? " has-error" : '';

        ?>
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
                    <li class="active"><a href="#" title="给我写一篇同学录吧!">
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
        <hr />
        <form role="form" action="check/check_value.php" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
            <!--<div class="form-group">
                <lable for="file">你的照片:</lable>
                <input type="file" id="file" name="file" class="form-control" />
                <span class="help-block">请上传图片</span>
            </div>-->
            <div class="form-group<?php echo $name_err;?>"><!--名字-->
                <input class="form-control" type="text" name="name" id="name" placeholder="你的名字." />
                <span class="text-danger" id="name_error"><?php echo get('name_is_null');?></span>
            </div>
            <div class="form-group<?php echo $sex_err;?>"><!--性别-->
                <label class="radio-inline">
                    <input type="radio" name="sex" id="sex"  value="Boy"> 男
                </label>
                <label class="radio-inline">
                    <input type="radio" name="sex" id="sex"  value="Girl"> 女
                </label>
                <span class="text-danger" id="sex_error"><?php echo get('sex_is_null'); ?></span>
            </div>
            <div class="form-group<?php echo $born_date_err;?>"><!--出生日期-->
                <span class="help-block">出生日期:</span>
                <input class="form-control" type="date" name="born_date" id="born_date"/>
                <span class="text-danger" id="born_date_error"><?php echo get('born_date_is_null');?></span>
            </div>
            <div class="form-group"><!--喜欢-->
                <input type="text" name="color" id="color" placeholder="最喜欢的颜色" class="form-control" />
                <input type="text" name="song" id="song" placeholder="最喜欢的歌曲" class="form-control" />
                <input type="text" name="person" id="person" placeholder="最喜欢的人" class="form-control" />
                <input type="text" name="wish" id="wish" placeholder="愿望" class="form-control" />
            </div>
            <div class="form-group<?php echo $qq_err;?>"><!--qq联系方式-->
                <input class="form-control" type="tel" name="qq" id="qq" placeholder="你的QQ号" class="form-control" />
                <span class="text-danger" id="qq_error"><?php echo get('qq_is_null');?></span>
            </div>
            <div class="form-group"><!--其他联系方式-->
                <input type="tel" name="tel" id="tel" placeholder="你的手机号" class="form-control" />
                <input type="email" name="email" id="email" placeholder="你的邮箱" class="form-control" />
            </div>
            <div class="form-group <?php echo $SAY_err;?>"><!--SAY-->
                <textarea name="SAY" class="form-control" rows="13" placeholder="你有什么想对我说的嘛?" ></textarea>
                <span class="text-danger" id="SAY_error"><?php echo get('SAY_is_null');?></span>
            </div>
            <div class="form-group"><!--提交按钮-->
                <button type="submit" class="btn btn-primary form-control">提交</button>
            </div>
        </form>
		<hr /><hr />
		<p class="text-muted text-center"><small>
            &copy; 2019 <a href="#" title="Qnurye's Classmates-website">Qnurye</a> . All rights ignored .
        </small></p>
        <div style="height:1000px;"></div>
	</body>
</html>