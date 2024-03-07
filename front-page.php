

<?php get_header("noheader"); ?>


<article class="article">

    <main class="main">
        <div class="main-flex">
            <div class="top-wrap-main">
                <section id="sec1-title">
                    <h1><?php bloginfo('name'); ?></h1>
                    <div class="text">
                        <h2>江別市の在宅介護<br class="pc-none"> サービス事業所一覧サイト</h2>
                    </div>
                </section>
                <h2>あなたのお困りごとは何ですか</h2>
                <div class="top-card-wrap">
                    <a href="<?php echo esc_url( home_url() ); ?>/soudansaki">
                        <div class="top-card" >
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/soudan_t.png">
                            <h3>介護の相談をしたい<br>ケアマネージャーを探したい</h3>
                        </div>
                    </a>
                    <a href="<?php echo esc_url( home_url() ); ?>/houmon">
                        <div class="top-card" >
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tuusyo_t.png">
                            <h3>自宅に訪問してくれる<br>サービスを探したい</h3>
                        </div>
                    </a>
                    <a href="<?php echo esc_url( home_url() ); ?>/tuusyo">
                        <div class="top-card" >
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/houmon_t.png">
                            <h3>自宅から通える<br>サービスを探したい</h3>
                        </div>
                    </a>

                    <div class="search-contact"></div>
                        <div class="search">
                            <h4 class="search__text">事業所検索ボックス</h4>
                            <form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="search-form">
                                <label for="s"></label>
                                    <input type="text" name="s" id="s" value="<?php the_search_query(); ?>" placeholder="キーワードを入力">
                                    <button type="submit" aria-label="検索"></button>
                            </form>
                        </div>
                        <div class="search">
                            <h4 class="search__text">事業者の方へ</h4>
                            <a href="<?php echo site_url('/contact') ?>" class="cta">
                                <p>情報の追加・修正の依頼はこちら</p>
                            </a>
                        </div>
                    </div>

                    <div class="returnbox">
                        <a class="btn2__text" href="#">
                            <div class="btn2">
                                <p class="btn2__text">page top</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="original-sidebar">
                    <div>
                        <?php get_sidebar(); ?>
                    </div>
                </div>

            </div>  


        </div>
    </main>
</article>





<?php get_footer(); ?>