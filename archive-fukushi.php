<?php 
/*
Template Name: アーカイブ_一覧_福祉用具
Template Post Type: page, post
*/
?>

<?php get_header(); ?>


<article class="article">

    <main class="main">
        <div class="main-flex">
            <div class="top-wrap-main">
                <section id="sec1-title">
                    <h1><?php the_title(); ?></h1>
                </section>
    
                <p><?php the_content(); ?></p>

                <div class="office-card-wrap">
                    <?php
                        $args = [
                            'post_type' => 'kaigo', //カスタム投稿タイプ名
                            'posts_per_page' => -1, //取得する投稿の件数
                            'category_name' => 'houmon',
                            'tag' => 'fukushi',
                            'orderby'   => 'title',
                        ];
                        $my_query = new WP_Query( $args );
                    ?>

                    <?php if ($my_query -> have_posts()) : ?>
                        <?php while ($my_query -> have_posts()) : $my_query -> the_post(); ?>
                        <a href="<?php the_permalink(); ?>">
                            <div class="office-card" >
                                <h2 class="office-card__title"><?php the_title(); ?></h2>
                                <h4 class="office-card__txt">住所：<?php the_field('kaigo_address'); ?></h4>
                                <h4 class="office-card__txt">電話：<?php the_field('kaigo_tel'); ?></h4>
                            </div>
                        </a>

                    <?php endwhile; ?><?php else : ?>
                        <?php echo "表示する記事がありません"; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>

                    <div class="returnbox">
                        <a class="btn2__text" href="#">
                            <div class="btn2">
                                <p class="btn2__text">page top</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="original-sidebar">
                <div>
                    <?php get_sidebar('fukushi'); ?>
                </div>
            </div>


        </div>
    </main>

</article>


<?php get_footer(); ?>