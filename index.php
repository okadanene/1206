<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="トラベルエステートで一緒に働きませんか？">
    <title>トラベルエステート株式会社 求人</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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
</head>

<body>
<!-- ヘッダーここから -->

    <header>
        <h1 class="header-img">
            <a href="#">
                <img src="img/logo.jpeg" alt="travel-logo">
            </a>
        </h1>
        <nav class="header-menu">
            <ul>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#recruit">RECRUIT</a></li>
                <li><a href="#company">COMPAY</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>
        </nav>
        <nav class="sp-nav">
            <ul>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#recruit">RECRUIT</a></li>
                <li><a href="#company">COMPAY</a></li>
                <li><a href="#">CONTACT</a></li>
                <li class="close"><span>閉じる</span></li>
            </ul>
        </nav>
        <div id="menu">
            <span></span>
        </div>
    </header>
<!-- ヘッダーここまで -->
<main>
    <div class="main">
        <img src="img/logomark.png" alt="travel-logo-name">
    </div>

<!-- セクション１ここから -->

    <div class="section1">
        <div class="item">
            <h2 id="about">ABOUT</h2>
            <i class="bi bi-caret-down-fill"></i>
            <p>トラベルエステートは世界を魅了するコンテンツを創出する<br>
            プラットフォームを展開していきます。
            </p>
        </div>

        <div class="item">
            <h2 id="recruit">RECRUIT</h2>
            <i class="bi bi-caret-down-fill"></i>
            <p>トラベルエステートでは<br>
            様々な職種のスタッフを随時募集中です。
            </p>
        </div>
    </div>

<!-- セクション1ここまで -->

<!-- セクション2ここから -->

    <div class="section2">
        <h3>現在募集中の職種</h3>
        <div class="section2-item">
            <div class="recruit">
                <a href="recruit1.html"><button type="button">不動産エージェント<i class="bi bi-chevron-right"></i></button></a>
            </div>
            <div class="recruit">
                <a href="recruit2.html"><button type="button">不動産エージェントリーダー<i class="bi bi-chevron-right"></i></button></a>
            </div>
            <div class="recruit">
                <a href="recruit3.html"><button type="button">バックオフィス担当<i class="bi bi-chevron-right"></i></button></a>
            </div>
            <div class="recruit">
                <a href="recruit4.html"><button type="button">マーケティング担当<i class="bi bi-chevron-right"></i></button></a>
            </div>
            <div class="recruit">
                <a href="recruit5.html"><button type="button">マネージャー<i class="bi bi-chevron-right"></i></button></a>
            </div>
            <div class="recruit">
                <a href="recruit6.html"><button type="button">民泊コンサルタント<i class="bi bi-chevron-right"></i></button></a>
            </div>
            <div class="recruit">
                <a href="recruit7.html"><button type="button">カスタマーサポート担当<i class="bi bi-chevron-right"></i></button></a>
            </div>
            <div class="recruit">
                <a href="recruit8.html"><button type="button">清掃員（アルバイト）<i class="bi bi-chevron-right"></i></button></a>
            </div>
        </div>
    </div>

<!-- セクション2ここまで -->

<!-- セクション3ここから -->

    <div class="section3">
        <h2 id="company">COMPANY</h2>
        <div class="section3-1">
            <div class="section3-item">
                <h3>会社名</h3>
                <p>トラベルエステート株式会社</p>
            </div>
            <div class="section3-item">
                <h3>代表</h3>
                <p>代表取締役 松井 雄馬</p>
            </div>
        </div>
        <div class="section3-2">
            <div class="section3-item">
                <h3>設立</h3>
                <p>2016年7月</p>
            </div>
            <div class="section3-item">
                <h3>資本金</h3>
                <p>100万円</p>
            </div>
            <div class="section3-item">
                <h3>事業内容</h3>
                <p>不動産業</p>
            </div>
        </div>
    </div>
</main>
<!-- セクション3ここまで -->

<!-- フッターここから -->

    <footer>
        <h1 class="header-img">
            <a href="#">
                <img src="img/logo.jpeg" alt="travel-logo">
            </a>
        </h1>
        <nav class="footer-menu">
            <ul>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#recruit">RECRUIT</a></li>
                <li><a href="#company">COMPAY</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>
        </nav>
    </footer>

<!-- フッターここまで -->
   
</body>
</html>