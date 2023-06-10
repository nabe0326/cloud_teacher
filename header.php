<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css?_=<?php echo date('Ymd-Hi'); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <?php
    wp_deregister_script("jquery");
    wp_enqueue_script("jquery", "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js", array(), "3.5.1");
    ?>
    <?php
    wp_enqueue_script("index.js", "/wp-content/themes/teacher_hp/js/index.js");
    ?>
    <?php wp_head(); ?>
</head>

<body>
    <header id="header">
        <div class="width flex header_box">
            <h1><a href="<?php echo esc_url(home_url('/')); ?>index"><img class="logo" src="<?php echo get_template_directory_uri() ?>/img/cloudK3.jpg" width="100" height="56" alt="logo"></a></h1>
            <nav>
                <ul id="navi">
                    <li class="menu-list"><a href="<?php echo esc_url(home_url('/')); ?>index">HOME</a></li>
                    <li class="menu-list"><a href="<?php echo esc_url(home_url('/')); ?>company">会社概要</a></li>
                    <li class="menu-list"><a href="<?php echo esc_url(home_url('/')); ?>contact">お問い合わせ</a></li>
                    <li class="menu-list"><a href="<?php echo esc_url(home_url('/')); ?>contact">ブログ</a></li>
                </ul>
            </nav>
            <!-- ボタン部分ここを後で追加するだけ-->
            <div class="nav_btn" id="nav_btn">
                <span class="hamburger_line hamburger_line1"></span>
                <span class="hamburger_line hamburger_line2"></span>
                <span class="hamburger_line hamburger_line3"></span>
            </div>
            <div class="nav_bg" id="nav_bg"></div>
            <!-- /ボタン部分ここを後で追加するだけ-->
        </div>
    </header>
</body>