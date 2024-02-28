<?php 
/*
Template Name: 検索結果
Template Post Type: page, post
*/
?>

<?php get_header("noheader"); ?>

<article class="article">
    <main class="main">
        <div class="main-flex">
            <section class="top-wrap">
                <p><?php echo '「'.get_search_query().'」の検索結果：' .$wp_query->found_posts. ' 件の記事が該当しました。';?></p>
                <div class="office-card-wrap">
                    <?php if (have_posts()): ?>
                        <?php while(have_posts()) : the_post();?>
                        <a href="<?php the_permalink(); ?>">
                            <div class="office-card">
                                <h2><?php the_title(); ?></h2>
                                <p>カテゴリー：<?php the_category(" , "); ?></p>
                            </div>
                        </a>
                    <?php endwhile; ?><?php else: ?>
                        <?php echo "該当する情報はありませんでした。"; ?>
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