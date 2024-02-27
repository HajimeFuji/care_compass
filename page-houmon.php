

<?php get_header(); ?>


<article class="article">
    <section id="sec1-title">
        <h1><?php the_title(); ?></h1>
    </section>

    <main class="main">
        <div class="main-flex">
            <section class="top-wrap">
                <h2><?php the_content(); ?></h2>
                <div class="top-card-wrap">
                    <a href="<?php echo esc_url( home_url() ); ?>/homehelp">
                        <div class="top-card" >
                            <p>訪問介護</p>
                        </div>
                    </a>
                    <a href="<?php echo esc_url( home_url() ); ?>/kango">
                        <div class="top-card" >
                            <p>訪問看護</p>
                        </div>
                    </a>
                    <a href="<?php echo esc_url( home_url() ); ?>/rihabili">
                        <div class="top-card" >
                            <p>訪問リハビリ</p>
                        </div>
                    </a>
                    <a href="<?php echo esc_url( home_url() ); ?>/nyuuyoku">
                        <div class="top-card" >
                            <p>訪問入浴</p>
                        </div>
                    </a>
                    <a href="<?php echo esc_url( home_url() ); ?>/fukushi">
                        <div class="top-card" >
                            <p>福祉用具貸与・販売</p>
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