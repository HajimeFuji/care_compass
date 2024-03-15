<?php 
/*
Template Name: ソウダン_詳細
Template Post Type: page, post
*/
?>


<?php get_header(); ?>

<article class="article">
    <section id="sec1-title">
        <!-- <h1><?php the_field('soudan_name'); ?></h1> -->
    </section>

    <main class="main">
        <div class="main-flex">
            <section class="detail-wrap">
            <div class="detail-card-wrap">
                <div class="detail-imgbox">
                        <?php if (post_custom('soudan_image')) : ?>
                            <img src="<?php the_field('soudan_image'); ?>" class="detail-imgbox_img" alt="">
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no_img.jpg" class="detail-imgbox_img" alt="no_image">
                        <?php endif; ?>
                    </div>

                    <div class="detail-card" >
                        <div class="detail-card__box">
                            <h4 class="detail-card__title"><?php echo nl2br(get_post_meta($post->ID, 'soudan_name', true)); ?></h4>
                        </div>
                        <div class="detail-card__box">
                            <p class="detail-card__txt">住所：<?php the_field('soudan_address'); ?></p>
                            <?php if( get_field('soudan_map') ): { ?>
                                <a href="<?php the_field('soudan_map'); ?>" target="_blank" rel="noopener norefferrer"><p class="detail-card__txt">地図はこちら</p></a>
                            <?php } ?>
                            <?php else: ?>
                            <?php endif; ?>
                            <p class="detail-card__txt">電話：<?php the_field('soudan_tel'); ?></p>
                            <?php if( get_field('soudan_link') ): { ?>
                                <a href="<?php the_field('soudan_link'); ?>" target="_blank" rel="noopener norefferrer"><p class="detail-card__txt">公式サイトはこちら</p></a>
                            <?php } ?>
                            <?php else: ?>
                                <p class="detail-card__txt">公式サイトはありません</p>
                            <?php endif; ?>
                        </div>
                        <div class="detail-card__box">
                            <p>サービス概要：</p>
                            <p class="detail-card__txt"><?php echo nl2br(get_post_meta($post->ID, 'soudan_service', true)); ?></p>
                        </div>
                        <div class="search-single">
                            <h4 class="search-single__text">事業者の方へ</h4>
                            <a href="<?php echo site_url('/contact') ?>" class="cta-single">
                                <p class="search-single__text">情報の追加・修正の依頼はこちら</p>
                            </a>
                        </div>
                    </div>
            </section>

        </div>
    </main>

</article>

<?php get_footer(); ?>