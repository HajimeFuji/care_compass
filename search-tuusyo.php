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

            <?php
                $s = $_GET['s'];
                $catnum = $_GET['catnum'];
                $post_tag = $_GET['post_tag'];
                $area = $_GET['office_area'];
                $sougei = $_GET['kaigo_sougei'];
                $bath = $_GET['kaigo_bath'];
                
                //tax_query用
                if($catnum){
                    $taxquerysp[] = array(
                            'taxonomy'=>'category',
                            'terms'=> $catnum,
                            'include_children'=>false,
                            'field'=>'term_id',
                            'operator'=>'AND'
                        );
                }
                if($post_tag){
                    $taxquerysp[] = array(
                            'taxonomy'=>'post_tag',
                            'terms'=> $post_tag,
                            'include_children'=>false,
                            'field'=>'slug',
                            'operator'=>'AND'
                            );
                }
                $taxquerysp['relation'] = 'AND';

                //meta_query用
                if($area){
                    $metaquerysp[] = array(
                            'key'=>'office_area',
                            'value'=> $area,
                        );
                }
                if($sougei){
                    $metaquerysp[] = array(
                            'key'=>'kaigo_sougei',
                            'value'=> $sougei,
                        );
                }
                if($bath){
                    $metaquerysp[] = array(
                            'key'=>'kaigo_bath',
                            'value'=> $bath,
                        );
                }


                $metaquerysp['relation'] = 'AND';
            ?>

<p><?php echo ''.get_cat_name($catnum).'/ 地域：'.$area.'/ '.$sougei.' / '.$bath.'の検索結果' ?></p>

                <?php
                    query_posts( array(
                        'tax_query' => $taxquerysp,
                        'meta_query' => $metaquerysp,
                        's' => $s,
                        )
                    );
                ?>

                <div class="office-card-wrap">
                    <?php if (have_posts()): ?>
                        <?php while(have_posts()) : the_post();?>
                        <a href="<?php the_permalink(); ?>">
                            <div class="office-card">
                                <h2 class="office-card__title"><?php the_title(); ?></h2>
                                <h4 class="office-card__txt">カテゴリー：<?php the_category(" , "); ?></h4>
                                <h4 class="office-card__txt">分類：<?php the_tags("  "); ?></h4>
                                <h4 class="office-card__txt">地域：<?php the_field('office_area'); ?></h4>
                                <h4 class="office-card__txt"><?php the_field('kaigo_sougei'); ?>/<?php the_field('kaigo_bath'); ?></h4>
                            </div>
                        </a>
                    <?php endwhile; ?><?php else: ?>
                        <?php echo "該当する情報はありませんでした。"; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>

                <?php wp_reset_query(); ?>

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
