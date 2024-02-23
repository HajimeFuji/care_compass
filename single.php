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
                <h2><?php the_field('kaigo_name'); ?></h2>
                <div class="top-card-wrap">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="office-card" >
                            <h2><?php the_field('blog_date'); ?>_<?php the_title(); ?></h2>
                            <!-- <div class="single_thumbnail"> -->
                                <!-- <?php the_post_thumbnail(array(600,450)); ?> -->
                                <!-- <?php the_post_thumbnail( 'thumbnails', array( 'class' => 'thumb')); ?>
                            </div> -->
                            
                            <div class="thumb">
                                <?php the_post_thumbnail( 'full' ); ?>
                            </div>
                            <div class="outdoors-single__txt">
                                <?php the_content(); ?>
                            </div>
                            <a href="<?php the_field('blog_album'); ?> "target="_blank" rel="noopener noreferrer"><p class="outdoors-single__txt">アルバム</p></a>
                        </div>
                    <?php endwhile; ?><?php else : ?>
                        <p>新着記事はありません</p>
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