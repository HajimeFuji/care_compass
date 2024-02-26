<?php 
/*
Template Name: カイゴ_詳細
Template Post Type: page, post
*/
?>


<?php get_header(); ?>

<article class="article">
    <section id="sec1-title">
        <!-- <h1><?php the_field('kaigo_name'); ?></h1> -->
    </section>

    <main class="main">
        <div class="main-flex">
            <section class="detail-wrap">
                <div class="detail-card-wrap">
                    <!-- <?php if( get_field('kaigo_image') == "" ): ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no_img.jpg" class="detail_img" alt="no_image">
                    <?php else: ?>
                        <img src="<?php the_field('kaigo_image'); ?>" class="detail_img" alt="">
                    <?php endif; ?> -->

                    <?php if (post_custom('kaigo_image')) : ?>
                        <img src="<?php the_field('kaigo_image'); ?>" class="detail_img" alt="">
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no_img.jpg" class="detail_img" alt="no_image">
                    <?php endif; ?>

                    <div class="detail-card" >
                        <div class="detail-card__box">
                            <h2 class="detail-card__title"><?php echo nl2br(get_post_meta($post->ID, 'kaigo_name', true)); ?></h2>
                        </div>
                        <div class="detail-card__box">
                            <p class="detail-card__txt">住所：<?php the_field('kaigo_address'); ?></p>
                            <p class="detail-card__txt">電話：<?php the_field('kaigo_tel'); ?></p>
                        </div>
                        <div class="detail-card__box">
                            <!-- <p class="detail-card__txt__area">サービス概要：<?php the_field('kaigo_service'); ?></p> -->
                            <p class="detail-card__txt">サービス概要：<?php echo nl2br(get_post_meta($post->ID, 'kaigo_service', true)); ?></p>
                            <p class="detail-card__txt__area">PR：<?php the_field('kaigo_pr'); ?></p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </main>

</article>

<?php get_footer(); ?>