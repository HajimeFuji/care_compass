<?php 
/*
Template Name: アーカイブ_一覧_入浴
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
    
                <?php the_content(); ?>

        <div class="pc-none">
            <h2 class="side__headline">絞り込み</h2>

            <form action="<?php echo esc_url(home_url('/')); ?>" method="get" id="" class="searchform">
                <input type="hidden" name="search_type" value="houmon">
                <input name="catnum" type="hidden" value="2" />
                <input name="post_tag" type="hidden" value="nyuuyoku" />
                <input type="text" name="s" id="s" class="searchfield" placeholder="キーワード検索" />
                
                <select name="office_area" class="searchfield" >
                    <option value="" selected>地域名</option>
                    <option value="大麻">大麻</option>
                    <option value="野幌">野幌</option>
                    <option value="江別">江別</option>
                    <option value="その他">その他</option>
                </select>

                <div class="search-submit">
                    <button type="submit" value="検索"></button>
                </div>
            </form>
        </div>

                <div class="office-card-wrap">
                    <?php
                        $args = [
                            'post_type' => 'kaigo', //カスタム投稿タイプ名
                            'posts_per_page' => -1, //取得する投稿の件数
                            'category_name' => 'houmon',
                            'tag' => 'nyuuyoku',
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

                </div>
            </div>

                    <div class="returnbox">
                        <a class="btn2__text" href="#">
                            <div class="btn2">
                                <p class="btn2__text">page top</p>
                            </div>
                        </a>
                    </div>
                <!-- </div>
            </div> -->

            <div class="original-sidebar">
                <div>
                    <?php get_sidebar('nyuuyoku'); ?>
                </div>
            </div>


        </div>
    </main>

</article>

<?php get_footer(); ?>