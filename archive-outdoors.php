<?php get_header(); ?>

<main class="main">

    <div class="main-flex">
        <div class="top-wrap">   
            <section class="outdoors-wrap">
                <h1>Outdoor活動</h1>
                <div class="outdoors-content">
                    <?php
                        $args = [
                            'post_type' => 'outdoors', //カスタム投稿タイプ名
                            'posts_per_page' => -1, //取得する投稿の件数
                            'orderby'   => 'date',
                        ];
                        $my_query = new WP_Query( $args );
                    ?>

                    <?php if ($my_query -> have_posts()) : ?>
                        <?php while ($my_query -> have_posts()) : $my_query -> the_post(); ?>
                        <a href="<?php the_permalink(); ?>">
                            <div class="outdoors-card" >
                                <h3><?php the_title(); ?></h3>
                                <img class="outdoors-card__img" src="<?php the_field('outdoors_image'); ?>" alt="">
                                <h3 class="outdoors-card__txt">日時：<?php the_field('outdoors_date'); ?></h3>
                                <h3 class="outdoors-card__txt">場所：<?php the_field('outdoors_place'); ?></h3>
                            </div>
                        </a>

                    <?php endwhile; ?><?php else : ?>
                        <?php echo "表示する記事がありません"; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </section>
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
            <div>
                <?php dynamic_sidebar('main-sidebar'); ?>
            </div>
        </div>


    </div>
    
</main>

<?php get_footer();