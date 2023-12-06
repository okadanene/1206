<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="トラベルエステートで一緒に働きませんか？">
    <title>トラベルエステート株式会社 求人</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+JP:wght@500&family=Noto+Sans+JP:wght@400;900&family=Zen+Kaku+Gothic+New:wght@700&display=swap" rel="stylesheet">
    <!-- jQueryの読み込み -->
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

    <!-- スマホナビの表示・非表示 -->
    <script>
    $(function() {
    const hum = $('#menu, .close')
    const nav = $('.sp-nav')
    hum.on('click', function(){
        nav.toggleClass('toggle');
    });
    });
    </script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- ヘッダーここから -->

    <header>
        <h1 class="header-img">
            <a href="<?php echo home_url(); ?>/#">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpeg" alt="travel-logo">
            </a>
        </h1>
        <nav class="header-menu">
            <ul>
                <li><a href="<?php echo home_url(); ?>/#about">ABOUT</a></li>
                <li><a href="<?php echo home_url(); ?>/#recruit">RECRUIT</a></li>
                <li><a href="<?php echo home_url(); ?>/#company">COMPANY</a></li>
                <li><a href="<?php echo home_url(); ?>/#">CONTACT</a></li>
            </ul>
        </nav>
        <nav class="sp-nav">
            <ul>
                <li><a href="<?php echo home_url(); ?>/#about">ABOUT</a></li>
                <li><a href="<?php echo home_url(); ?>/#recruit">RECRUIT</a></li>
                <li><a href="<?php echo home_url(); ?>/#company">COMPANY</a></li>
                <li><a href="<?php echo home_url(); ?>/#">CONTACT</a></li>
                <li class="close"><span>閉じる</span></li>
            </ul>
        </nav>
        <div id="menu">
            <span></span>
        </div>
    </header>
<!-- ヘッダーここまで -->