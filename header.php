<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php get_bloginfo('name'); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <?php wp_head(); ?>
    </head>
    <body>
        <div id="wrapper" class="home-page">
            <!-- start header -->
            <header>
                <div class="navbar navbar-default navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.html"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="logo"/></a>
                        </div>
                        <div class="navbar-collapse collapse ">
                            <ul class="nav navbar-nav">
                                <li><a href="http://localhost/TestTemplate/">首页</a></li> 
                                <li><a href="http://localhost/TestTemplate/about/">关于我们</a></li>
                                <li><a href="http://localhost/TestTemplate/service/">业务范围</a></li>
                                <li><a href="http://localhost/TestTemplate/anli/">案例展示</a></li>
                                <li><a href="http://localhost/TestTemplate/zhaopin/">人才招聘</a></li>
                                <li><a href="http://localhost/TestTemplate/contact/">联系我们</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>