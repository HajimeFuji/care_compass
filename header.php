<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="キーワードでサイトを説明">
    <meta name="description" content="どんなサイトか短い文章で説明">
    <title>
        <?php if(is_home()): ?>
        <?php bloginfo('name'); ?>

        <?php elseif(is_page()): ?>
        <?php wp_title(''); ?> | <?php bloginfo('name'); ?>

        <?php elseif(is_single()): ?>
        <?php wp_title(''); ?> | <?php bloginfo('name'); ?>

        <?php elseif(is_category()): ?>
        <?php single_cat_title() ?>の記事一覧 | <?php bloginfo('name'); ?>

        <?php elseif(is_month()): ?>
        <?php the_time("Y年m月") ?>の記事一覧 | <?php bloginfo('name'); ?>

        <?php elseif(is_year()): ?>
        <?php the_time("Y年") ?>の記事一覧 | <?php bloginfo('name'); ?>

        <?php elseif(is_search()): ?>
        検索結果 | <?php bloginfo('name'); ?>

        <?php else: ?>
        <?php bloginfo('name'); ?>

        <?php endif; ?>

    </title>

    <?php wp_head(); ?>
    
</head>

<!-- <body  class="drawer drawer--right"> -->
<body <?php body_class( ['drawer', 'drawer--left'] ); ?>>
    <header>
        <div class="header__pc">
            <div class="header__text">
                <p><?php bloginfo('name'); ?></p>
            </div>
            <nav class="header header-menu">
                <div>
                    <?php 
                        wp_nav_menu( [
                            'theme_location' => 'main-menu' 
                            ] ); 
                    ?>
                </div>
            </nav>
        </div>
        
        <button type="button" class="drawer-toggle drawer-hamburger">
            <!-- <i class="fa fa-bars" aria-hidden="true"></i> -->
            <span class="sr-only">toggle navigation</span>
            <span class="drawer-hamburger-icon"></span>
        </button>

        <nav class="drawer-nav" role="navigation">
            <?php 
                wp_nav_menu( [
                    'theme_location' => 'drawer-menu', 
                    'menu_class' => 'drawer-menu', 
                    // 'container' => false, 
                    // 'depth' => 1 
                    ] ); 
            ?>
        </nav>
    
    </header>   