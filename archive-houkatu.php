<?php 
/*
Template Name: アーカイブ_ホウカツ
Template Post Type: page, post
*/
?>

<?php get_header(); ?>


<article class="article">
    <section id="sec1-title">
        <h1><?php the_title(); ?></h1>
    </section>
    
    <main class="main">
        <div class="main-flex">
                <section class="top-wrap">
                    <p><?php the_content(); ?></p>
                    <div class="office-card-wrap">
                        <?php
                            $args = [
                                'post_type' => 'madoguti', //カスタム投稿タイプ名
                                'posts_per_page' => -1, //取得する投稿の件数
                                'category_name' => 'houkatu',
                                'orderby'   => 'title',
                            ];
                            $my_query = new WP_Query( $args );
                        ?>

                        <?php if ($my_query -> have_posts()) : ?>
                            <?php while ($my_query -> have_posts()) : $my_query -> the_post(); ?>
                            <a href="<?php the_permalink(); ?>">
                                <div class="office-card" >
                                    <h2 class="office-card__title"><?php echo nl2br(get_post_meta($post->ID, 'soudan_name', true)); ?></h2>
                                    <h4 class="office-card__txt">住所：<?php the_field('soudan_address'); ?></h4>
                                    <h4 class="office-card__txt">電話：<?php the_field('soudan_tel'); ?></h4>
                                </div>
                            </a>

                        <?php endwhile; ?><?php else : ?>
                            <?php echo "表示する記事がありません"; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
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