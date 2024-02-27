

<?php get_header(); ?>


<article class="article">
    <section id="sec1-title">
        <h1><?php the_title(); ?></h1>
    </section>

    <main class="main">
        <div class="main-flex">
            <section class="top-wrap">
                <h2><?php echo wpautop( get_the_content() ); ?></h2>
                <!-- <h2>包括支援センターはお住まいの地区ごとにあります</h2> -->
                <div class="top-card-wrap">
                    <a href="<?php echo esc_url( home_url() ); ?>/houkatu">
                        <div class="top-card" >
                            <p>包括支援センター</p>
                        </div>
                    </a>
                    <a href="<?php echo esc_url( home_url() ); ?>/kyotaku">
                        <div class="top-card" >
                            <p>居宅介護支援事業所</p>
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