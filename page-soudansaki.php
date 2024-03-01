

<?php get_header(); ?>


<article class="article">
    <section id="sec1-title">
        <h1><?php the_title(); ?></h1>
    </section>

    <main class="main">
        <div class="main-flex">
            <section class="top-wrap">
                <h2><?php echo wpautop( get_the_content() ); ?></h2>
                <div class="top-card-wrap">
                    <a href="<?php echo esc_url( home_url() ); ?>/houkatu">
                        <div class="top-card" >
                            <h3 class="top-card__title">包括支援センター</h3>
                            <p>要支援 1～2 の方はこちらへ</p>
                        </div>
                    </a>
                    <a href="<?php echo esc_url( home_url() ); ?>/kyotaku">
                        <div class="top-card" >
                            <h3 class="top-card__title">居宅介護支援事業所</h3>
                            <p>要介護 1～5 の方はこちらへ</p>
                        </div>
                    </a>
                </div>
            </section>

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