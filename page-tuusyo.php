

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
                    <a href="<?php echo esc_url( home_url() ); ?>/dayservice">
                        <div class="top-card" >
                            <p>通所介護デイサービス</p>
                        </div>
                    </a>
                    <a href="<?php echo esc_url( home_url() ); ?>/daycare">
                        <div class="top-card" >
                            <p>通所リハビリデイケア</p>
                        </div>
                    </a>
                    <a href="<?php echo esc_url( home_url() ); ?>/shortstay">
                        <div class="top-card" >
                            <p>短期入所ショートステイ</p>
                        </div>
                    </a>
                    <a href="<?php echo esc_url( home_url() ); ?>/ssmulti">
                        <div class="top-card" >
                            <p>小規模多機能</p>
                        </div>
                    </a>
                    <a href="<?php echo esc_url( home_url() ); ?>/cssmulti">
                        <div class="top-card" >
                            <p>看護小規模多機能</p>
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