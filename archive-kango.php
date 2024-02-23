<?php 
/*
Template Name: アーカイブ_kango
Template Post Type: page, post
*/
?>

<?php get_header(); ?>


<article class="article">
    <section id="sec1-title">
        <h1>訪問看護事業所の一覧</h1>
        <!-- <div class="text">
            <p><?php bloginfo( 'description' ); ?></p>
        </div> -->
    </section>
    
    <main class="main">
        <div class="main-flex">
            <section class="top-wrap">
                <h2>看護師さんに自宅に来てほしい方はこちら</h2>
                <div class="top-card-wrap">
                    <?php
                        $args = [
                            'post_type' => 'kaigo', //カスタム投稿タイプ名
                            // 'posts_per_page' => -1, //取得する投稿の件数
                            'category_name' => 'houmon',
                            'tag' => 'kango',
                            'orderby'   => 'date',
                        ];
                        $my_query = new WP_Query( $args );
                    ?>

                    <?php if ($my_query -> have_posts()) : ?>
                        <?php while ($my_query -> have_posts()) : $my_query -> the_post(); ?>
                        <a href="<?php the_permalink(); ?>">
                            <div class="office-card" >
                                <!-- <P class="oniwa-card__title"><?php the_title(); ?></P> -->
                                <!-- <img class="top-card__img" src="<?php the_field('kaigo_image'); ?>" alt=""> -->
                                <h3 class="office-card__txt">事業所名：<?php the_field('kaigo_name'); ?></h3>
                                <h3 class="office-card__txt">住所：<?php the_field('kaigo_address'); ?></h3>
                                <h3 class="office-card__txt">電話：<?php the_field('kaigo_tel'); ?></h3>
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