<?php 
/*
Template Name: カイゴ_詳細
Template Post Type: page, post
*/
?>


<?php get_header(); ?>

<article class="article">
    <section id="sec1-title">
        <h1><?php the_field('kaigo_name'); ?></h1>
    </section>

    <main class="main">
        <div class="main-flex">
            <section class="top-wrap">

                <div class="top-card-wrap">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="office-card" >
                            <h2><?php the_title(); ?></h2>
                            <img class="office-card__img" src="<?php the_field('kaigo_image'); ?>" alt="">
                            <p class="office-card__txt">住所：<?php the_field('kaigo_address'); ?></p>
                            <p class="office-card__txt">電話：<?php the_field('kaigo_tel'); ?></p>
                            <p class="office-card__txt">PR：<?php the_field('kaigo_pr'); ?></p>
                            <p class="office-card__txt">サービス概要：<?php the_field('kaigo_service'); ?></p>
                        </div>
                    <?php endwhile; ?><?php else : ?>
                        <p>新着記事はありません</p>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </section>
        </div>
    </main>

</article>

<?php get_footer(); ?>