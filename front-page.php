<?php get_header();?>
<main>
    <div class="main">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logomark.png" alt="travel-logo-name">
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
                <a href="<?php echo esc_url(home_url('/recruit')); ?>"><button type="button">不動産エージェント<i class="bi bi-chevron-right"></i></button></a>
            </div>
            <div class="recruit">
                <a href="<?php echo esc_url(home_url('/recruit2')); ?>"><button type="button">不動産エージェントリーダー<i class="bi bi-chevron-right"></i></button></a>
            </div>
            <div class="recruit">
                <a href="<?php echo esc_url(home_url('/recruit3')); ?>"><button type="button">バックオフィス担当<i class="bi bi-chevron-right"></i></button></a>
            </div>
            <div class="recruit">
                <a href="<?php echo esc_url(home_url('/recruit4')); ?>"><button type="button">マーケティング担当<i class="bi bi-chevron-right"></i></button></a>
            </div>
            <div class="recruit">
                <a href="<?php echo esc_url(home_url('/recruit5')); ?>"><button type="button">マネージャー<i class="bi bi-chevron-right"></i></button></a>
            </div>
            <div class="recruit">
                <a href="<?php echo esc_url(home_url('/recruit6')); ?>"><button type="button">民泊コンサルタント<i class="bi bi-chevron-right"></i></button></a>
            </div>
            <div class="recruit">
                <a href="<?php echo esc_url(home_url('/recruit7')); ?>"><button type="button">カスタマーサポート担当<i class="bi bi-chevron-right"></i></button></a>
            </div>
            <div class="recruit">
                <a href="<?php echo esc_url(home_url('/recruit8')); ?>"><button type="button">清掃員（アルバイト）<i class="bi bi-chevron-right"></i></button></a>
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
<?php get_footer(); ?>
