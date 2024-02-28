

<?php get_header(); ?>


<article class="article">
    <section id="sec1-title">
        <h1><?php the_title(); ?></h1>
    </section>

    <main class="main">
        <div class="main-flex">
            <section class="top-wrap">
                <p><?php the_content(); ?></p>
                <div class="top-card-wrap">
                    <a href="<?php echo esc_url( home_url() ); ?>/homehelp">
                        <div class="top-card" >
                            <h3 class="top-card__title">訪問介護</h3>
                            <p>ヘルパーさんに来て欲しい<br>方はこちら</p>
                        </div>
                    </a>
                    <a href="<?php echo esc_url( home_url() ); ?>/kango">
                        <div class="top-card" >
                            <h3 class="top-card__title">訪問看護</h3>
                            <p>看護師さんに来て欲しい<br>方はこちら</p>
                        </div>
                    </a>
                    <a href="<?php echo esc_url( home_url() ); ?>/rihabili">
                        <div class="top-card" >
                            <h3 class="top-card__title">訪問リハビリ</h3>
                            <p>リハビリの先生に来て欲しい<br>方はこちら</p>
                        </div>
                    </a>
                    <a href="<?php echo esc_url( home_url() ); ?>/nyuuyoku">
                        <div class="top-card" >
                            <h3 class="top-card__title">訪問入浴</h3>
                            <p>浴槽を運んでもらって<br>自宅で入浴したい方はこちら</p>
                        </div>
                    </a>
                    <a href="<?php echo esc_url( home_url() ); ?>/fukushi">
                        <div class="top-card" >
                            <h3 class="top-card__title">福祉用具貸与・販売</h3>
                            <p>必要な用具を借りたり買いたい<br>方はこちら</p>
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