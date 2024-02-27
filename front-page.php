

<?php get_header("noheader"); ?>


<article class="article">
    <section id="sec1-title">
        <h1><?php bloginfo('name'); ?></h1>
        <div class="text">
            <p><?php bloginfo( 'description' ); ?></p>
        </div>
    </section>

    <main class="main">
        <div class="main-flex">
            <section class="top-wrap">
                <h1>あなたのお困りごとは何ですか</h1>
                <div class="top-card-wrap">
                    <a href="<?php echo esc_url( home_url() ); ?>/soudansaki">
                        <div class="top-card" >
                            <p>介護の相談をしたい<br>ケアマネージャーを探したい</p>
                        </div>
                    </a>
                    <a href="<?php echo esc_url( home_url() ); ?>/houmon">
                        <div class="top-card" >
                            <p>自宅に訪問してくれるサービスを探したい</p>
                        </div>
                    </a>
                    <a href="<?php echo esc_url( home_url() ); ?>/tuusyo">
                        <div class="top-card" >
                            <p>自宅から通えるサービスを探したい</p>
                        </div>
                    </a>
                </div>
            </section>

            <div class="search">
                <p>事業所検索ボックス</p>
                <?php get_search_form(); ?>
            </div>
        </div>

        <div class="returnbox">
            <a class="btn2__text" href="#">
                <div class="btn2">
                    <p class="btn2__text">page top</p>
                </div>
            </a>
        </div>


    </main>
</article>





<?php get_footer(); ?>