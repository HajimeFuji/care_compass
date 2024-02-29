

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
                    <a href="<?php echo esc_url( home_url() ); ?>/dayservice">
                        <div class="top-card" >
                            <h3 class="top-card__title">通所介護<br>(デイサービス)</h3>
                            <p>通って過ごせるところを<br>探している方はこちら</p>
                        </div>
                    </a>
                    <a href="<?php echo esc_url( home_url() ); ?>/daycare">
                        <div class="top-card" >
                            <h3 class="top-card__title">通所リハビリ<br>(デイケア)</h3>
                            <p>通ってリハビリできるところを<br>探している方はこちら</p>
                        </div>
                    </a>
                    <a href="<?php echo esc_url( home_url() ); ?>/shortstay">
                        <div class="top-card" >
                            <h3 class="top-card__title">短期入所<br>(ショートステイ)</h3>
                            <p>数日お泊りできることを<br>探している方はこちら</p>
                        </div>
                    </a>
                    <a href="<?php echo esc_url( home_url() ); ?>/ssmulti">
                        <div class="top-card" >
                            <h3 class="top-card__title">小規模多機能</h3>
                            <p>通い中心で状況により訪問や<br>お泊まりを頼みたい方はこちら</p>
                        </div>
                    </a>
                    <a href="<?php echo esc_url( home_url() ); ?>/cssmulti">
                        <div class="top-card" >
                            <h3 class="top-card__title">看護小規模多機能</h3>
                            <p>通い中心で状況により訪問看護や<br>お泊まりを頼みたい方はこちら</p>
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