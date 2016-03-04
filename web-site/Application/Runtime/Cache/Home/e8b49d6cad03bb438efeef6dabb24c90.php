<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="<?php echo (C("ASSETS.css_bootstrap")); ?>" rel="stylesheet">
    <link href="<?php echo (C("ASSETS.css_mainsite")); ?>" rel="stylesheet">

    <title>标题内容</title>
  </head>
  <body>
    <div class="container-fluid">
        
        <!--nav-->
        <div id="navbar" class="container">
            <nav class="navbar" role="navigation">
               <div class="navbar-header">
                  <a class="navbar-brand" href="/"><img src="<?php echo (C("ASSETS.img_logo")); ?>" title="网站LOGO"/></a>
               </div>
               <div class="navbar-right">
                  <a class="navbar-text active" href="/">首页</a>
                  <a class="navbar-text" href="">为您服务</a>
                  <a class="navbar-text" href="">精选模板</a>
                  <a class="navbar-text" href="">关于我们</a>
                  <a class="navbar-text" href="">联系我们</a>
               </div>
            </nav>
        </div>

        <!--carousel-->
        <div id="carousel" class="carousel slide">
          <ol class="carousel-indicators">
              <li data-target="#carousel" data-slide-to="0" class="active"></li>
              <li data-target="#carousel" data-slide-to="1"></li>
              <li data-target="#carousel" data-slide-to="2"></li>
          </ol>   
          <div class="carousel-inner">
              <div class="item active">
                 <a href=""><img src="http://website.com/Public/v1/img/0.jpg"></a> <!-- 400 X 240 (mobile) 2580 X 330 (pc) -->
              </div>
              <div class="item">
                 <a href=""><img src="http://website.com/Public/v1/img/1.jpg"></a>
              </div>
              <div class="item">
                 <a href=""><img src="http://website.com/Public/v1/img/2.jpg"></a>
              </div>
          </div>
          <a class="carousel-control left"  href="#carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
          <a class="carousel-control right" href="#carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div> 
        
        <!--content-->
        <div id="content" class="content">
            
        <div>

        <!--footer-->
        <div id="footer" class="footer">
            <div class="container">
                <div class="col-xs-8">
                   <div class="col-xs-3">
                        <p><a class="menu-link"  href="">为您服务</a></p>
                        <p><a class="page-link"  href="">服务流程</a></p>
                        <p><a class="page-link"  href="">网站定制</a></p>
                        <p><a class="page-link"  href="">售后服务</a></p>
                    </div>
                    <div class="col-xs-3">
                        <p><a class="menu-link"  href="">精选模板</a></p>
                        <p><a class="page-link"  href="">传统网站</a></p>
                        <p><a class="page-link"  href="">手机网站</a></p>
                        <p><a class="page-link"  href="">微型网站</a></p>
                    </div>
                    <div class="col-xs-3">
                        <p><a class="menu-link"  href="">关于我们</a></p>
                        <p><a class="page-link"  href="">公司简介</a></p>
                        <p><a class="page-link"  href="">团队精英</a></p>
                        <p><a class="page-link"  href="">新闻动态</a></p>
                    </div>
                    <div class="col-xs-3">
                        <p><a class="menu-link"  href="">联系我们</a></p>
                        <p><a class="page-link"  href="">联系方式</a></p>
                        <p><a class="page-link"  href="">在线留言</a></p>
                        <p><a class="page-link"  href="">付款方式</a></p>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div>
                        <p><a class="menu-link"  href="">关注我们</a></p>
                        <p><img src="<?php echo (C("ASSETS.img_bar")); ?>"/></p>
                        <p class="weichat">微信账号</p>
                    </div>
                  </div>
            </div>    
        </div>
    </div>

    <!--[if lt IE 9]>
      <script src="<?php echo (C("ASSETS.js_html5shiv")); ?>"></script>
      <script src="<?php echo (C("ASSETS.js_respond")); ?>"></script>
    <![endif]-->
    <script src="<?php echo (C("ASSETS.js_jquery")); ?>"></script>
    <script src="<?php echo (C("ASSETS.js_bootstrap")); ?>"></script>
  </body>
</html>