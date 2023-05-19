<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css?_=<?php echo date('Ymd-Hi'); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <?php
    wp_deregister_script("jquery");
    wp_enqueue_script("jquery", "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js", array(), "3.5.1");
    ?>
    <?php
    wp_enqueue_script("index.js", "/themes/teacher_hp/js/index.js");
    ?>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
    </header>
</body>